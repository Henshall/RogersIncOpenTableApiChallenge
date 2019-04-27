<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;
use PayPal\Rest\ApiContext;
use PayPal\Auth\OAuthTokenCredential;
use PayPal\Api\Amount;
use PayPal\Api\Details;
use PayPal\Api\Item;
use PayPal\Api\ItemList;
use PayPal\Api\Payer;
use PayPal\Api\Payment;
use PayPal\Api\RedirectUrls;
use PayPal\Api\PaymentExecution;
use PayPal\Api\Transaction;
use App\Email;


class PaymentController extends Controller
{

  private $_api_context;



public function __construct()
{
  /** setup PayPal api context **/
  $paypal_conf = config('paypal');
  $this->_api_context = new ApiContext(new OAuthTokenCredential($paypal_conf['client_id'], $paypal_conf['secret']));
  $this->_api_context->setConfig($paypal_conf['settings']);
}






public function payment(Request $request)
{
  $depositAmount= 99;

  $payer = new Payer();
  $payer->setPaymentMethod('paypal');
  $item_temp = new Item();
  $item_temp->setName("Deposit") /** item name **/
  ->setCurrency('USD')
      ->setQuantity(1)
      ->setPrice($depositAmount); /** unit price **/


  $item_list = new ItemList();
  $item_list->setItems([$item_temp]);

  $amount = new Amount();
  $amount->setCurrency('USD')
      ->setTotal($depositAmount);

  $transaction = new Transaction();
  $transaction->setAmount($amount)
      ->setItemList($item_list)
      ->setDescription('Deposit');

  $redirect_urls = new RedirectUrls();

  $redirect_urls->setReturnUrl(route('_payment_received')) /** Specify return URL **/
  ->setCancelUrl(route('payment_received'));

  $payment = new Payment();

  $payment->setIntent('sale')
      ->setPayer($payer)
      ->setRedirectUrls($redirect_urls)
      ->setTransactions(array($transaction));


  try {
      $payment->create($this->_api_context);
  } catch (\PayPal\Exception\PPConnectionException $ex) {
      if (config('app.debug')) {
          \Session::put('error','Connection timeout');
          return redirect(url('deposit'));
          /** echo "Exception: " . $ex->getMessage() . PHP_EOL; **/
          /** $err_data = json_decode($ex->getData(), true); **/
          /** exit; **/
      } else {
          \Session::put('error','Some error occur, sorry for inconvenient');
          return redirect(url('deposit'));
          /** die('Some error occur, sorry for inconvenient'); **/
      }
  }

  foreach($payment->getLinks() as $link) {
      if($link->getRel() == 'approval_url') {
          $redirect_url = $link->getHref();
          break;
      }
  }
  /** add payment ID to session **/
  Session::put('paypal_callback', $payment->getId());
  // Session::put('promo_code', $request->promo_code);

  if(isset($redirect_url)) {
      /** redirect to paypal **/

      return Redirect::away($redirect_url);
  }
  \Session::put('error','Unknown error occurred');
  return redirect(url('deposit'));
}







public function payment_received()
{

  /** Get the payment ID before session clear **/
  $payment_id = Session::get('paypal_payment_id');
  if($payment_id) {
      /** clear the session payment ID **/
      Session::forget('paypal_payment_id');
      if (empty(Input::get('PayerID')) || empty(Input::get('token'))) {
          \Session::put('message', 'Payment failed');
          return redirect(url('deposit'));
      }
      $payment = Payment::get($payment_id, $this->_api_context);
      $execution = new PaymentExecution();
      $execution->setPayerId(Input::get('PayerID'));

      $result = $payment->execute($execution, $this->_api_context);
      if ($result->getState() == 'approved') {
          $user = Auth::user();
          $amount= 0;
          foreach ($result->getTransactions() as $transaction)
              $amount += $transaction->getAmount()->getTotal();

          $promo_code = Session::get('promo_code');
          Session::forget('promo_code');
          if ($promo_code) {
              $addAmount = $this->calculateAddAmount(Auth::user()->id, $promo_code, $amount);
          } else {
              $addAmount = 0;
          }

          $me = Auth()->user();
          $me->paid = 1;

          $me->save();

          \Session::put('message', 'Payment success');
          return redirect(url('/download_csv'))->with('message', "Payment Successful");
      }
      \Session::put('message', 'Payment failed');
  }
  return redirect("/")->with("message","Payment failed");

}







}
