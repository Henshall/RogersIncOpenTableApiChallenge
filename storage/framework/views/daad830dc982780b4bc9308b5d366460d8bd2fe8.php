<?php $__env->startSection('content'); ?>







  <div class="color_background">
  <br>

  <div style="overflow:-webkit-paged-x" class="container">
      <div class="login">
          <h1>Register</h1>




          <form class="form-horizontal" method="POST" action="<?php echo e(route('register')); ?>">

              <?php echo e(csrf_field()); ?>







        
              <div class="form-group<?php echo e($errors->has('email') ? ' has-error' : ''); ?>">
                  <label for="email" class="col-12 control-label">E-Mail Address</label>

                  <div class="col-md-12">
                      <input id="email" type="email" class="" name="email" value="<?php echo e(old('email')); ?>" required>

                      <?php if($errors->has('email')): ?>
                          <span class="help-block">
                              <strong><?php echo e($errors->first('email')); ?></strong>
                          </span>
                      <?php endif; ?>
                  </div>
              </div>

              <div class="form-group<?php echo e($errors->has('password') ? ' has-error' : ''); ?>">
                  <label for="password" class="col-12 control-label">Password</label>

                  <div class="col-md-12">
                      <input id="password" type="password" class="" name="password" required>

                      <?php if($errors->has('password')): ?>
                          <span class="help-block">
                              <strong><?php echo e($errors->first('password')); ?></strong>
                          </span>
                      <?php endif; ?>
                  </div>
              </div>

              <div class="form-group">
                  <label for="password-confirm" class="col-12 control-label">Confirm Password</label>

                  <div class="col-md-12">
                      <input id="password-confirm" type="password" class="" name="password_confirmation" required>
                  </div>
              </div>

              <div class="form-group">
                  <div class="col-md-6 col-md-offset-4">
                      <button type="submit" class="btn btn-primary">
                          Register
                      </button>
                  </div>
              </div>

          </form>
      </div>
  </div>


  <br>
  <br>
  <br>
  <br>

  </div>


  <style>
      .login {
        position: relative;
        width: 100%;
        max-width: 500px;
        height: 300px;
        margin: 0 auto;
      }

      .login h1, h2 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

      input {
          width: 100%;
          margin-bottom: 10px;
          background: rgba(0,0,0,0.3);
          border: none;
          outline: none;
          padding: 10px;
          font-size: 13px;
          color: #fff;
          text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
          border: 1px solid rgba(0,0,0,0.3);
          border-radius: 4px;
          box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
          -webkit-transition: box-shadow .5s ease;
          -moz-transition: box-shadow .5s ease;
          -o-transition: box-shadow .5s ease;
          -ms-transition: box-shadow .5s ease;
          transition: box-shadow .5s ease;
      }
      input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

      .forgot-pass{
          float:right;
          margin-top: 20px;
      }

      .form-group {
          margin-bottom: 1rem;
          color: #c5c1c1;
      }
  </style>


  <br>
    <style media="screen">

        .register-form {
            margin: 20px 0;
        }

        .option-input {
            border-radius: 21px;
            -webkit-appearance: none;
            -moz-appearance: none;
            -ms-appearance: none;
            -o-appearance: none;
            appearance: none;
            position: relative;
            top: 13px;
            right: 0;
            bottom: 0;
            left: 0;
            height: 40px;
            width: 40px;
            transition: all 0.15s ease-out 0s;
            background: #cbd1d8;
            border: none;
            color: #fff;
            cursor: pointer;
            display: inline-block;
            margin-right: 0.5rem;
            outline: none;
            z-index: 1000;
        }

        .option-input:hover {
            background: #9faab7;
        }

        .option-input:checked {
            background: #409ee0;
        }

        .option-input:checked::before {
            height: 40px;
            width: 40px;
            position: absolute;
            content: '✔';
            display: inline-block;
            font-size: 26px;
            text-align: center;
            line-height: 40px;
        }

        .option-input:checked::after {
            -webkit-animation: click-wave 0.65s;
            -moz-animation: click-wave 0.65s;
            animation: click-wave 0.65s;
            background: #40e0d0;
            content: '';
            display: block;
            position: relative;
            z-index: 100;
        }

        .checkmark {
            display: inline-block;
            line-height: 40px;
            /* padding: 15px; */
            color:white;
            width: 49%
            color:white;
        }

        .radio {
            padding-top: 0 !important;
        }

        .form-horizontal {
            padding: 29px;
        }

        @media (max-width: 420px) {
            .checkmark {
                font-size: 3vw;

            }
        }


    </style>
<?php $__env->stopSection(); ?>


















<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>