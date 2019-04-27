<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- INCLUDE ALL JS FILES --}}
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- TITLE --}}
    <title>{{ config('app.name', 'App Title Here') }}</title>

    <!-- INCLUDE ALL CSS FILES -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">


</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Open Table Demo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">




                    <li class="nav-item active">
                      <a id="about_link" class="nav-link" href="/">About {{-- <span class="sr-only">(current)</span> --}}</a>
                    </li>

                    <li class="nav-item active">
                      <a id="buy_link" class="nav-link" href="/demo">Demo {{-- <span class="sr-only">(current)</span> --}}</a>
                    </li>


                    <li class="nav-item active">
                      <a id="contact_link" class="nav-link" href="/contact">Contact </a>
                    </li>

                    <li class="nav-item active">
                      <a id="faq_link" class="nav-link" href="/faq">FAQ </a>
                    </li>
                  </ul>
                  {{--<form role="form" method="POST" action="{{route('api.search')}}">--}}
                        {{--{{csrf_field()}}--}}
                       {{--<input class="form-control mr-sm-2" name="search_keyword" type="search" placeholder="Search" aria-label="Search">--}}
                  {{--</form>--}}
                    <ul class="navbar-nav ml-auto">
                        @if (Auth::guest())
                            <li class="nav-item"><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>

                        @else


                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             {{ Auth::user()->username }}
                          </a>

                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="{{ route('logout') }}"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('user.profile.edit',[Auth::user()->username]) }}">
                                  Edit Profile
                              </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/api/create">
                                    Create New Api
                                </a>

                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('user.profile.edit_password',[Auth::user()->username]) }}">
                                  Edit Password
                              </a>
                            <a class="dropdown-item" href="#">
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </a>
                          </div>
                        </li>
                        @endif
                    </ul>
                </div>
            </div>

        </nav>



    @if(Session::has('message'))
            <p class="mb-0 animated bounce alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>

    @elseif(Session::has('success'))
            <p class="mb-0 animated  bounce alert {{ Session::get('alert-class', 'alert-success') }}"> 	&nbsp; 	&nbsp; {{ Session::get('success') }}</p>

    @elseif(Session::has('error'))
            <p class="mb-0 animated animated bounce alert {{ Session::get('alert-class', 'alert-danger') }}">	&nbsp; 	&nbsp;  {{ Session::get('error') }}</p>

    @elseif(Session::get('error'))
        <p class="mb-0 alert animated bounce {{ Session::get('alert-class', 'alert-danger') }}">{{ Session::get('error') }}</p>
    @endif
        @yield('content')
    </div>


    <script type="text/javascript">

    $(".buy_button").click(function(){
    var price = $(this).attr("data-price");
    var interval = $(this).attr("data-interval");
    var seller_id = $(this).attr("data-seller_id");
    var api_plan_id = $(this).attr("data-api_plan_id");

    $("#stripe_script").attr('data-amount', (price * 100));
    $("#hidden_api_id").val(api_plan_id);
    $("#hidden_seller_id").val(seller_id);


    });

  //   $( ".buy_button" ).click(function(button) {
  //     var price = $(button).data("price");
  //     var api_id = "id";
  //
  //      console.log(price);
  //      console.log(api_id);
  //   });
  //     console.log("fff");
  //   $( "a" ).click(function( ) {
  //    console.log("fff");
  // });


    </script>

    <style media="screen">

    .pagination{
      font-size: 15px;

      margin-bottom: 20%;

      background-color: #717880;
    margin-bottom: 20%;
    color: white!important;
    }

.pagination a{
  color: black!important;
}

    .pag_inner_div{
      display: flex;
      margin: 0 auto;
      width: 95%;
    }

    .pag_inner_div li{
      width: 20%;
    }

    .grey_background{
      background-color: #3c4248;
    }


    .color_background{

    background: #092756;
    background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
    background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
    background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
    background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
    background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}


    </style>
</body>








{{--
<body>
  @if (Session::has('message'))
<div class="flipInX  animated  alert" style="margin-bottom:0px!important;">{{ Session::get('message') }}</div>
@endif
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('App Title Here', 'App Title Here') }}
                    </a>
                    <div class="">

                    </div>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="/">About</a></li>
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                            <li><a href="/contact">Contact</a></li>
                        @else
                            <li><a href="/">About</a></li>

                            <li><a href="/login_home">Home</a></li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                  <li>

                                    <a href="/profile">Profile</a>

                                  </li>
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                            <li><a href="/contact">Contact</a></li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
</body> --}}
</html>
