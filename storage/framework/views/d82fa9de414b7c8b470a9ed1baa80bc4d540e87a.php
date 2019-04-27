<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    
    <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    
    <title><?php echo e(config('app.name', 'App Title Here')); ?></title>

    <!-- INCLUDE ALL CSS FILES -->
    <link href="<?php echo e(asset('css/style.css')); ?>" rel="stylesheet">


</head>


<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="/">Laravel Lightning</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto">




                    <li class="nav-item active">
                      <a id="about_link" class="nav-link" href="/">About </a>
                    </li>

                    <li class="nav-item active">
                      <a id="buy_link" class="nav-link" href="/demo">Demo </a>
                    </li>


                    <li class="nav-item active">
                      <a id="contact_link" class="nav-link" href="/contact">Contact </a>
                    </li>

                    <li class="nav-item active">
                      <a id="faq_link" class="nav-link" href="/faq">FAQ </a>
                    </li>
                  </ul>
                  
                        
                       
                  
                    <ul class="navbar-nav ml-auto">
                        <?php if(Auth::guest()): ?>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?php echo e(route('register')); ?>">Register</a></li>

                        <?php else: ?>


                        <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                             <?php echo e(Auth::user()->username); ?>

                          </a>

                          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                  onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();">
                                  Logout
                              </a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo e(route('user.profile.edit',[Auth::user()->username])); ?>">
                                  Edit Profile
                              </a>

                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="/api/create">
                                    Create New Api
                                </a>

                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="<?php echo e(route('user.profile.edit_password',[Auth::user()->username])); ?>">
                                  Edit Password
                              </a>
                            <a class="dropdown-item" href="#">
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form>
                            </a>
                          </div>
                        </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>

        </nav>



    <?php if(Session::has('message')): ?>
            <p class="mb-0 animated bounce alert <?php echo e(Session::get('alert-class', 'alert-info')); ?>"><?php echo e(Session::get('message')); ?></p>

    <?php elseif(Session::has('success')): ?>
            <p class="mb-0 animated  bounce alert <?php echo e(Session::get('alert-class', 'alert-success')); ?>"> 	&nbsp; 	&nbsp; <?php echo e(Session::get('success')); ?></p>

    <?php elseif(Session::has('error')): ?>
            <p class="mb-0 animated animated bounce alert <?php echo e(Session::get('alert-class', 'alert-danger')); ?>">	&nbsp; 	&nbsp;  <?php echo e(Session::get('error')); ?></p>

    <?php elseif(Session::get('error')): ?>
        <p class="mb-0 alert animated bounce <?php echo e(Session::get('alert-class', 'alert-danger')); ?>"><?php echo e(Session::get('error')); ?></p>
    <?php endif; ?>
        <?php echo $__env->yieldContent('content'); ?>
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









</html>
