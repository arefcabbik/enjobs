

    <!--breadcrumbs start-->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-4">
                    <h1>Registration</h1>
                </div>
                <div class="col-lg-8 col-sm-8">
                    <ol class="breadcrumb pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Pages</a></li>
                        <li class="active">Registration</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="registration-bg">
        <div class="container">

            
            <?php echo form_open('Profil/daftar_akun', array('class' => 'form-signin wow fadeInUp')); ?>

                <h2 class="form-signin-heading">Daftar Njobs</h2>
                  <center><?php echo $this->session->flashdata('pesan1'); ?></center>
                <div class="login-wrap">
                    <center><h5>Masukkan data diri</h5></center>
                    
                    <?php echo form_input('nama_user', '', array('class' => 'form-control', 'placeholder' => 'Nama Lengkap', 'required' => 'required')); ?>

                    
                    <?php echo form_input('username', '', array('class' => 'form-control', 'placeholder' => 'Username', 'required' => 'required')); ?>
                    
                    
                    <?php echo form_input('email', '', array('type' => 'email', 'class' => 'form-control', 'placeholder' => 'Email', 'required' => 'required')); ?>

                    
                    <?php echo form_password('password', '', array( 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'Password')); ?>
                    

                    <label class="checkbox">
                        
                        <?php echo form_checkbox('setuju', 'setuju' , false, array('required' => true)); ?> Saya menyetujui semua syarat yang berlaku
                    </label>

                    <?php echo form_submit('submit', 'Daftar', array('class' => 'btn btn-lg btn-login btn-block')); ?>

                    <div class="registration">
                        Sudah Punya Akun ?
                        <a class="" href="<?php echo base_url()."Login" ?>">
                            Login disini
                        </a>
                    </div>
                </div>
            <?php echo form_close(); ?>

        </div>
     </div>
    <!--container end-->


  <!-- js placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/hover-dropdown.js"></script>
    <script defer src="js/jquery.flexslider.js"></script>
    <script type="text/javascript" src="assets/bxslider/jquery.bxslider.js"></script>

    <script src="js/jquery.easing.min.js"></script>
    <script src="js/link-hover.js"></script>


     <!--common script for all pages-->
    <script src="js/common-scripts.js"></script>
    <script src="js/wow.min.js"></script>
    <script>
        wow = new WOW(
          {
            boxClass:     'wow',      // default
            animateClass: 'animated', // default
            offset:       0          // default
          }
        )
        wow.init();
    </script>

  </body>
</html>
