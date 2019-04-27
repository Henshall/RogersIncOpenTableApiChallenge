<?php

namespace App\Http\Controllers;
//
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Users;
use App\User;
use App\Order;
use App\Exceptions\Handler;
use Illuminate\Support\Facades\Session;


use Queue;
use Illuminate\Support\ServiceProvider;
use App\Jobs\Apply;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      Session::flash('message', 'This is a flash message');
        return view('login_home');
    }

    public function profile()
    {
        return view('profile');
    }





    public function contact()
    {
        return view('contact');
    }

    public function update(Request $request){
      $user_id =  Auth::user()->id;
      $user = User::whereId($user_id)->firstOrFail();
      $user->first_name = $request->get('first_name');
      // die($request->get('phone'));
      $user->last_name = $request->get('last_name');
      $user->phone = $request->get('phone');
      $user->city = $request->get('city');
      $user->country = $request->get('country');
      $user->save();
      return redirect("profile");

    }




}
