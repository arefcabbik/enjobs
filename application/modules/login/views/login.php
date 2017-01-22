
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Login</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Features</a></li>
                        <li class="active">Login</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="login-bg">
        <div class="container">
            <div class="form-wrapper">
            
            <?php echo form_open('Login/proses_login_dashboard', array('class' => 'form-signin wow fadeInUp')) ?>
            <h2 class="form-signin-heading">sign in now</h2>
            <div class="login-wrap">
                
                <?php echo form_input('email', '', array('placeholder' => 'Email', 'class' => 'form-control', 'required' => 'required', 'type' => 'email')); ?>
                <?php echo form_password('password', '', array('placeholder' => 'Password', 'class' => 'form-control', 'required' => 'required', 'type' => 'password')); ?>
                
                
                <label class="checkbox">
                    <input type="checkbox" value="remember-me"> Remember me
                    <span class="pull-right">
                        <a data-toggle="modal" href="#myModal"> Forgot Password?</a>

                    </span>
                </label>

                <?php echo form_submit('submit', 'Login', array('class' => 'btn btn-lg btn-login btn-block')); ?>
                <?php echo form_close() ?>
                <center><h5>or you can sign in via social network</h5></center>
                <div class="login-social-link">
                    <a href="index.html" class="facebook">
                        <i class="fa fa-facebook"></i>
                        Facebook
                    </a>
                    <a href="index.html" class="twitter">
                        <i class="fa fa-twitter"></i>
                        Twitter
                    </a>
                </div>
                <div class="registration">
                    Belum Punya Akun?
                    <a class="" href="<?php echo base_url()."Login/daftar" ?>">
                        Daftar Sekarang
                    </a>
                </div>

            </div>

              <!-- Modal -->
              <div aria-hidden="true" aria-labelledby="myModal" role="dialog" tabindex="-1" id="myModal" class="modal fade">
                  <div class="modal-dialog">
                      <div class="modal-content">
                          <div class="modal-header">
                              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                              <h4 class="modal-title">Forgot Password ?</h4>
                          </div>
                          <div class="modal-body">
                              <p>Enter your e-mail address below to reset your password.</p>
                              <input type="text" name="email" placeholder="Email" autocomplete="off" class="form-control placeholder-no-fix">

                          </div>
                          <div class="modal-footer">
                              <button data-dismiss="modal" class="btn btn-default" type="button">Cancel</button>
                              <button class="btn btn-success" type="button">Submit</button>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- modal -->

          
          </div>
        </div>
    </div>
    <!--container end-->
