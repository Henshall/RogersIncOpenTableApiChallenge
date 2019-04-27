<?php $__env->startSection('content'); ?>
  <div class="about">
    <div class="head">
      <div class="container">
        <div class="postion-center row">
          <div class="left-side col-md-7">
            <h1 class="head-title title text">Open Table Demo App</h1>
            <p class="head-small-title title">
              Finding great restaurants nearby!
            </p>
          </div>
          <div class="right-side col-md-5">
            <div class="text-gray">
              <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">
                <?php echo e(csrf_field()); ?>

                <div class="form-group<?php echo e($errors->has('username') ? ' has-error' : ''); ?>">
                  <label for="name" class="control-label">Name</label>
                  <input id="name" type="text" class="form-control" placeholder="Your first name" name="frname" value="<?php echo e(old('name')); ?>" >
                  <?php if($errors->has('username')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('username')); ?></strong>
                    </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                  <label for="email" class="control-label">E-Mail Address</label>
                  <input id="email" type="email" class="form-control" name="email" placeholder="you@example.com" value="<?php echo e(old('email')); ?>" >
                  <?php if($errors->has('email')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('email')); ?></strong>
                    </span>
                  <?php endif; ?>
                </div>
                <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                  <label for="password" class="control-label">Password</label>
                  <input id="password" type="password" class="form-control" placeholder="Create a password" name="password" >
                  <?php if($errors->has('password')): ?>
                    <span class="help-block">
                      <strong><?php echo e($errors->first('password')); ?></strong>
                    </span>
                  <?php endif; ?>
                </div>
                <div class="form-group">
                  <label for="password-confirm" class="control-label">Confirm Password</label>
                  <input id="password-confirm" type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                </div>
                <button type="submit" class="btn btn-primary sign-up btn-large">
                  Sign up for Laravel Lightning
                </button>
                <br><br>
                <span class="term-of-service">
                  By clicking "Sign up for Laravel Lightning", you agree to our
                  <a href="#" target="_blank">terms of service</a>.
                </span>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <br>
    <br>
    <br>
    <br>

    <div class="section-title">What is Open Table Demo App?</div>
    <div class="section-small-title">
      This "Open Table Demo App" is an application made for BMO as part of a coding challenge.
      The task is to allow a user to enter a city name and be shown all of the available restaurants in that city.
      The name, price and address of each available restaurant should be displayed.



    </div>







    <div class="container">

      <div class="section-title ">Featured Restaurants</div>
      <br>
      <div class="row">
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/15877.jpg"> </div>
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/93247.jpg"> </div>
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/93247.jpg"> </div>
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/61345.jpg"> </div>
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/93451.jpg"> </div>
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/24367.jpg"> </div>
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/141022.jpg"> </div>
        <div class="img_holder col-3"><img src="https://www.opentable.com/img/restimages/141244.jpg"> </div>
      </div>
      <br>
      <br>
      <br>
      <br>
    </div>



    <div class="section bg-gray-dark">
      <div class="container">
        <div class="context-center">
          “This site has the best reservation software I have ever used!” 
        </div>
      </div>
    </div>
  </div>
  <style>
  .head {
    color: rgba(255,255,255,0.6);
    background: url(),#2b3137;
    background-position: center 10%;
    background-size: cover;
    padding-top: 70px;
    padding-bottom: 120px;
  }
  .has-error .help-block{
    color: #a94442;
    display: block;
    margin-top: 5px;
    margin-bottom: 10px;
  }
  .left-side{
    text-align: left;
    padding-right: 25px;
  }
  .title{
    -webkit-font-smoothing: antialiased;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Helvetica Neue","Segoe UI","Oxygen","Ubuntu","Cantarell","Open Sans",sans-serif;
    font-weight: 300;
  }
  .head-title{
    font-size: 72px;
    color: #fff;
  }
  .head-small-title{
    font-size: 26px;
  }
  .text-gray{
    background-color: #fafbfc;
    padding: 24px;
    color: #586069;
    border-radius: 3px;
    text-align: left;
  }
  .control-label{
    font-size: 14px
  }
  .sign-up{
    width: 100%;
  }
  .postion-center{
    -webkit-box-align: center ;
    align-items: center ;
  }
  .section{
    padding-top: 80px;
    padding-bottom: 80px;
  }
  .section-title{
    margin-bottom: 10px;
    text-align: center;
    font-size: 40px;
    font-weight: 300;
    -webkit-font-smoothing: antialiased;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Helvetica Neue","Segoe UI","Oxygen","Ubuntu","Cantarell","Open Sans",sans-serif;
  }
  .section-small-title{
    text-align: center;
    margin-bottom: 30px;
    font-size: 20px;
    font-weight: 300;
    color: #586069;
    margin-right: auto;
    margin-left: auto;
    width: 66%;
  }
  .small-grey{
    font-size: 22px;
    color: #6a737d !important;
  }
  .bg-gray-dark{
    background-color: #24292e;
    color: #fff;
  }
  .bg-gray-dark .context-center{
    text-align: center;
    font-size: 38px;
    font-weight: 300;
    -webkit-font-smoothing: antialiased;
    font-family: Roboto,-apple-system,BlinkMacSystemFont,"Helvetica Neue","Segoe UI","Oxygen","Ubuntu","Cantarell","Open Sans",sans-serif;
  }
  .term-of-service{
    font-size: 12px;
    color: #6a737d;
    margin-top: 5px;
  }
  .images{
    list-style: none;
    margin-top: 16px;
    margin-bottom: 16px;
    -webkit-box-align: center;
    align-items: center;
    flex-wrap: wrap;
    -webkit-box-pack: center;
    justify-content: center;
    display: flex;
    filter: grayscale(100%);
  }
  .images img{
    width: auto;
    height: 42px;
    margin: 10px;
    padding-right: 32px;
    position: relative;
    display: inline-block;
    padding-left: 32px;
    vertical-align: middle;
  }

  #about_link{
    color: #66b6ff;
  }

  .why_use_title {
    color: white !important;
  }

  .img_holder{
    margin: 10px auto;

  }

  .img_holder img{
    width:85%;

  }

  </style>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>