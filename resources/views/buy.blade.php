@extends('layouts.app')




@section('content')

<script type="text/javascript" src="js/countup.js"></script>


  <div class="bg-dark">
  <br>

  <div style="background-color:white;" class="container ">
    <h1 class="text-center">Statistics</h1>
    <br>
    <div class="row text-center">

      <div class="col-6 col-md-3 ">
        <h1 id="dq_count"></h1>
        # Domains Searched
      </div>

      <div class="col-6 col-md-3 ">
        <h1 id="search_per_hour"></h1>
        # Domains Search / Hour
      </div>

      <div class="col-6 col-md-3 ">
        <h1 id="email_count"></h1>
        # Unique Emails Found
      </div>


      <div class="col-6 col-md-3 ">
        <h1 id="size">222MB</h1>
        Total Size of all Data
      </div>

    </div>



    <br>
    <br>
    <div class="row">
      <div class="col-12 text-center">


          Currently Scanning: xxx


          <br>
          <br>
      </div>
    </div>

    <br>




@if (isset(auth()->user()->paid) && auth()->user()->paid == 1 )


  <div class="row">
    <div id="promo_container" class="col-12 col-md-6">
        <br>
          <div class="middle_contain">
            <h2 class="text-center">Promotional Offer:</h2>
          <ul >
          <li>Buy up to xxx emails today</li>
          <li>Fresh emails every day</li>
          <li>Unlimited downloads as our list grows</li>

          <li>Includes websites, pages, and timestamp info</li>
          <li>Lifetime Membership</li>
          <li>Includes Bonus business directory of 20k US businesses</li>
          <li>Only <del>$200</del> $99USD!</li>
          <br>
          <li> <a href="/download_email_sample">Click Here</a> to download email sample list </li>
          <li> <a href="/download_business_sample">Click Here</a> to download business sample list </li>
          </ul>

          </div>
    </div>




    <div style="background-color: #e9ecef;"class="col-12 col-md-6">
      <br>
      <div class="middle_contain ">


            <h2 class="text-center">Thank you for purchasing our list!  </h2>
            <div class="text-center">
              <small >Download all of our lists below</small>
            </div>




        <div class="text-center">
          <br>

          <a href="/download_email_paid">
            <button class="btn btn-primary" type="button" name="button">Download Email List</button>
          </a>
          <br>
          <br>

          <a href="/download_business_paid">
            <button class="btn btn-primary" type="button" name="button">Download Business List</button>
          </a>


        </div>
        <br>
        <br>

        </div>
    </div>



  </div>



@elseif (auth()->user())
  <div class="row">


    <div id="promo_container" class="col-12 col-md-6">
        <br>
          <div class="middle_contain">
            <h2 class="text-center">Promotional Offer:</h2>
          <ul >
          <li>Buy up to  emails today</li>
          <li>Fresh emails every day</li>
          <li>Unlimited downloads as our list grows</li>

          <li>Includes websites, pages, and timestamp info</li>
          <li>Lifetime Membership</li>
          <li>Includes Bonus business directory of 20k US businesses</li>
          <li>Only <del>$200</del> $99USD!</li>
          <br>
          <li> <a href="/download_email_sample">Click Here</a> to download email sample list </li>
          <li> <a href="/download_business_sample">Click Here</a> to download business sample list </li>
          </ul>

          </div>
    </div>




    <div style="background-color: #e9ecef;"class="col-12 col-md-6">
      <br>
      <div class="middle_contain ">
            <h2 class="text-center">Buy Now <img id="fifty_off" src="images/half.png" alt=""> </h2>
            <div class="text-center">
              <small >Includes Email and Business list <del>$200</del> $99 USD!</small>
            </div>




        <div id="email_picture">
            <img src="/images/email_list.png" alt="">
        </div>

        <div class="text-center">

            <a href="/list_payment">

              <button class="btn btn-primary" type="button" name="button">
                      Buy Full Email List Now!
              </button>
              <br>
              <small>paypal or credit card accepted</small>
              </a>



        </div>
        <br>
        <br>

        </div>
    </div>



  </div>

@else
  <div class="row">


    <div id="promo_container" class="col-12 col-md-6">
        <br>


          <div class="middle_contain">
            <h2 class="text-center">Promotional Offer:</h2>
          <ul >
          <li>download up to xxx emails today</li>
          <li>Fresh emails every day</li>
          <li>Unlimited downloads as our list grows</li>
          <li> <a href="/login">Sign in</a> to download our sample list </li>
          <li>Includes websites, pages, and timestamp info</li>
          <li>Lifetime Membership</li>
          <li>Includes Bonus business directory of 20k US businesses</li>
          <li>Sign in to download all of our lists!</li>
          </ul>

          </div>




    </div>




    <div style="background-color: #e9ecef;"class="col-12 col-md-6">
      <br>
      <div class="middle_contain ">


            <h2 class="text-center">
              <a href="/login">Sign in to download our email list!</a>
            </h2>
            <div class="text-center">
              <small >Includes Bonus Business List!
            </div>



        <div id="email_picture">
            <img src="/images/email_list.png" alt="">
        </div>

        <div class="text-center">


              <a href="/login">

                <button class="btn btn-primary" type="button" name="button">
                        Sign in to download our list!
                </button>
                <br>
                </a>



        </div>
        <br>
        <br>

        </div>
    </div>



  </div>

@endif











    @if (auth()->user() && !auth()->user()->paid)
      <div class="row">
          <div class="col-12 text-center">
            <a href="/list_payment">
                      <img src="/images/paypal_button.png" alt="">
              </a>
              <br>
              <br>
          </div>
          <br>
          <br>
      </div>
    @endif













  </div>
  <br>

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>

  </div>


<div style="display:none" class="hidden hide">
  {{-- INVISIBLE AREA --}}
  <div class="dq_count">33</div>
  <div class="emails_count">44</div>
  <div class="search_per_hour">60</div>
  <div class="size">55</div>


</div>



<script type="text/javascript">

var dq_count = $(".dq_count").text();
var email_count = $(".emails_count").text();
var search_per_hour = $(".search_per_hour").text();
var size = $(".size").text();

var options = {
  useEasing: true,
  useGrouping: true,
  separator: ',',
  decimal: '.',
};


var dq_count_up = new CountUp('dq_count', 0, dq_count, 0, 2.5, options);
var email_count_up = new CountUp('email_count', 0, email_count, 0, 2.5, options);
var search_per_hour_count_up = new CountUp('search_per_hour', 0, search_per_hour, 0, 2.5, options);
// var size_count_up = new CountUp('size', 0, size, 0, 2.5, options);


if (!dq_count_up.error) {
  dq_count_up.start();
} else {
  console.error(dq_count_up.error);
}

if (!email_count_up.error) {
email_count_up.start();
} else {
  console.error(email_count_up.error);
}

if (!search_per_hour_count_up.error) {
search_per_hour_count_up.start();
} else {
  console.error(search_per_hour_count_up.error);
}

// if (!size_count_up.error) {
// size_count_up.start();
// } else {
//   console.error(size_count_up.error);
// }

</script>



<style media="screen">
/* Component Needs */


#buy_link{
  color: #66b6ff;
}

#loading_gif{
  width:30px;
}

#fifty_off{
      width: 108px;
}

#promo_container{

  background-color: #e9ecef;
}

#email_picture{
    width: 80%;
    margin: 0 auto;

}

#email_picture img{
    width: 100%;
}


@media screen and (min-width: 767px) {
  #promo_container{
    border-right-style: solid;

  }
}




</style>
@endsection
