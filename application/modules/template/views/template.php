<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Developed By M Abdur Rokib Promy">
    <meta name="author" content="cosmic">
    <meta name="keywords" content="Bootstrap 3, Template, Theme, Responsive, Corporate, Business">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>
      Njobs 
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url()."assets/css/bootstrap.min.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/theme.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/bootstrap-reset.css" ?>" rel="stylesheet">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

    <!--external css-->
    <link href="<?php echo base_url()."assets/font-awesome/css/font-awesome.min.css" ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/flexslider.css" ?>"/>
    <link href="<?php echo base_url()."assets/bxslider/jquery.bxslider.css" ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/animate.css" ?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/owlcarousel/owl.carousel.css" ?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/owlcarousel/owl.theme.css" ?>">

    <link href="<?php echo base_url()."assets/css/superfish.css" ?>" rel="stylesheet" media="screen">
    <!--<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>-->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/datepicker.css" ?>">


    <!-- Custom styles for this template -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/component.css" ?>">
    <link href="<?php echo base_url()."assets/css/style.css" ?>" rel="stylesheet">
    <link href="<?php echo base_url()."assets/css/style-responsive.css" ?>" rel="stylesheet" />
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/AdminLTE.min.css" ?>">
    <link rel="icon" type="image/png" href="<?php echo base_url()."assets/favicon.png" ?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/mixitup.css" ?>">
    <link rel="stylesheet" href="<?php echo base_url()."assets/css/magnific-popup.css" ?>">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/css/parallax-slider/parallax-slider.css" ?>" />
    <script type="text/javascript" src="<?php echo base_url()."assets/js/parallax-slider/modernizr.custom.28468.js" ?>">
    </script>


    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/jquery/develop/themes/base/jquery.ui.all.css" ?>" >
    <script type="text/javascript" src="<?php echo base_url()."assets/jquery/develop/jquery.js" ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/jquery/develop/ui/jquery.ui.core.js" ?>" ></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/jquery/develop/ui/jquery.ui.datepicker.js" ?>" ></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url()."assets/js/datepicker/datepicker3.css" ?>">

    <script type="text/javascript">
            jQuery(function($){
                $("#datepicker1").datepicker({
                    dateFormat:'yy-mm-dd',
                    changeMonth:true,
                    changeYear:true
                });

                $("#datepicker2").datepicker({
                    dateFormat:'yy-mm-dd',
                    changeMonth: true,
                    changeYear: true
                });
            });
    </script>

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js">
    </script>
    <script src="js/respond.min.js">
    </script>
    <![endif]-->
  </head>

  <body>
    <!--header start-->
    <header class="head-section">
      <div class="navbar navbar-default navbar-static-top container">
          <div class="navbar-header">
              <button class="navbar-toggle" data-target=".navbar-collapse" data-toggle="collapse" type="button">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="<?php echo base_url()."Home" ?>">N<span>jobs</span></a>
          </div>
          <div class="navbar-collapse collapse">
              <ul class="nav navbar-nav pull-left">
                  <li class="dropdown">
                      <a href="<?php echo base_Url()."Home" ?>">Home 
                      </a>
                      
                  </li>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#">Konten <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">
                          <li>
                              <a href="<?php echo base_url()."Lowongan" ?>">Cari Lowongan</a>
                          </li>
                          <li>
                              <a href="<?php echo base_url()."Lamaran" ?>">Cari Lamaran</a>
                          </li>
                          
                      </ul>
                  </li>


                <?php if($this->session->userdata('username')== false){ ?>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Login <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu" id="form-login">
                                    <br/>
                                    <li><h4>Login Disini</h4></li>
                                    <?php echo form_open('Login/proses_login'); ?>
                                    <li>
                                            <div class="form-group">

                                                <div class="input-group">
                                                  <div class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                  </div>

                                                    <?php 
                                                       $email= array(
                                                                    'name' => 'email',
                                                                    'type' => 'email',
                                                                    'placeholder' => 'Email',
                                                                    'class' => 'form-control',
                                                                    'required' => 'required'
                                                            );
                                                        echo form_input($email); 
                                                    ?>
                                                </div>
                                                
                                            </div>

                                            <div class="form-group">
                                                <div class="input-group">
                                                  <div class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                  </div>
                                                    <?php 
                                                        $pass= array(
                                                                    'name' => 'password',
                                                                    'type' => 'password',
                                                                    'placeholder' => 'Password',
                                                                    'class' => 'form-control',
                                                                    'required' => 'required'
                                                            );
                                                        echo form_input($pass);
                                                    ?>
                                                </div>
                                                
                                            </div>

                                            <div class="form-group">                                               
                                               <center> 
                                                  <?php echo form_submit('submit', 'Login', array( 'class' => 'btn btn-lg btn-info')); ?>
                                                  <a href="<?php echo base_url()."Login/daftar" ?>" class="btn btn-lg btn-default">DAFTAR</a>
                                               </center>                                          
                                                
                                            </div>
                                            <br/>
                                        
                                    </li>
                                    <?php echo form_close(); ?>
                      </ul>                          
                  </li>

                <?php }else{ ?>
                  <li class="dropdown">
                      <a class="dropdown-toggle" data-close-others="false" data-delay="0" data-hover=
                      "dropdown" data-toggle="dropdown" href="#"><i class="fa fa-user"></i> <?php echo $this->session->userdata('nama_user') ?></i> <i class="fa fa-angle-down"></i>
                      </a>
                      <ul class="dropdown-menu">   
                              
                              <?php if($this->session->userdata('level')== '0'){ ?>  
                                <li>
                                    <a href="<?php echo base_url()."Dashboard/" ?>">Dashboard  <i class="fa fa-user"></i></a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url()."Profil/" ?>">Lihat Profil  <i class="fa fa-user"></i></a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url()."Login/logout" ?>">Logout  <i class="fa fa-sign-out"></i></a>                                  
                                </li> 
                              <?php }else{ ?>  
                                <li>
                                    <a href="<?php echo base_url()."Profil/" ?>">Lihat Profil  <i class="fa fa-user"></i></a>
                                </li>

                                <li>
                                    <a href="<?php echo base_url()."Login/logout" ?>">Logout  <i class="fa fa-sign-out"></i></a>                                  
                                </li> 
                              <?php } ?>                      
                      </ul>
                  </li>
                  

                <?php } ?>

              </ul>
              <ul class="nav navbar-nav pull-right">
                <li>
                    <?php echo form_open('url'); ?>
                    <input class="form-control search" placeholder="Cari" type="text">
                    <?php echo form_close(); ?>
                </li>
              </ul>
          </div>
      </div>
    </header>

    <!--header end-->

    <?php echo $contents ?>

    <!--container end-->

    <!--footer start-->
    <footer class="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4 address wow fadeInUp" data-wow-duration="2s" data-wow-delay=".1s">
            <h1>
              contact info
            </h1>
            <address>
              <p><i class="fa fa-home pr-10"></i>Pringtulis Nalumsari</p>
              <p><i class="fa fa-globe pr-10"></i>Jepara, Indonesia </p>
              <p><i class="fa fa-mobile pr-10"></i>Mobile : (6289) 652378083 </p>
              <p><i class="fa fa-phone pr-10"></i>Phone : (0291) 456-7890 </p>
              <p><i class="fa fa-envelope pr-10"></i>Email :   <a href="javascript:;">njobs@gmail.com</a></p>
            </address>
          </div>
          <div class="col-lg-4 col-sm-4 wow fadeInUp" data-wow-duration="2s" data-wow-delay=".3s">
            <h1>latest tweet</h1>
              <div class="tweet-box">
                <i class="fa fa-twitter"></i>
                <em>
                  Please follow
                  <a href="javascript:;">@example</a>
                  for all future updates of us!
                  <a href="javascript:;">twitter.com/acme</a>
                </em>
              </div>
              <div class="tweet-box">
                <i class="fa fa-twitter"></i>
                <em>
                  Please follow
                  <a href="javascript:;">@example</a>
                  for all future updates of us!
                  <a href="javascript:;">twitter.com/acme</a>
                </em>
              </div>
              <div class="tweet-box">
                <i class="fa fa-twitter"></i>
                <em>
                  Please follow
                  <a href="javascript:;">@example</a>
                  for all future updates of us!
                  <a href="javascript:;">twitter.com/acme</a>
                </em>
              </div>
          </div>
          <div class="col-lg-4 col-sm-4">
            <div class="page-footer wow fadeInUp" data-wow-duration="2s" data-wow-delay=".5s">
              <h1>
                Our Company
              </h1>
              <ul class="page-footer-list">
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="about.html">About Us</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="faq.html">Support</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="service.html">Service</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="privacy-policy.html">Privacy Policy</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="career.html">We are Hiring</a>
                </li>
                <li>
                  <i class="fa fa-angle-right"></i>
                  <a href="terms.html">Term & condition</a>
                </li>
              </ul>
            </div>
          </div>

        </div>
      </div>
    </footer>
    <!-- footer end -->
    <!--small footer start -->
    <footer class="footer-small">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-sm-6 pull-right">
                    <ul class="social-link-footer list-unstyled">
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".1s"><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".2s"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".3s"><a href="#"><i class="fa fa-dribbble"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".4s"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".5s"><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".6s"><a href="#"><i class="fa fa-skype"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".7s"><a href="#"><i class="fa fa-github"></i></a></li>
                        <li class="wow flipInX" data-wow-duration="2s" data-wow-delay=".8s"><a href="#"><i class="fa fa-youtube"></i></a></li>
                    </ul>
                </div>
                <div class="col-md-4">
                  <div class="copyright">
                    <p>&copy; Copyright Njobs - Theme Acme by cosmic.  </p>
                  </div>
                </div>
            </div>
        </div>
    </footer>
    <!--small footer end-->

    <!-- js placed at the end of the document so the pages load faster
<script src="js/jquery.js">
</script>
-->
    <script src="<?php echo base_url()."assets/js/jquery-2.1.1.min.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/bootstrap.min.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/hover-dropdown.js" ?>"></script>
    <script defer src="<?php echo base_url()."assets/js/jquery.flexslider.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/bxslider/jquery.bxslider.js" ?>"></script>

    <script type="text/javascript" src="<?php echo base_url()."assets/js/jquery.parallax-1.1.3.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/wow.min.js" ?>"></script>
    <script src="<?php echo base_url()."assets/owlcarousel/owl.carousel.js" ?>"></script>

    <script src="<?php echo base_url()."assets/js/jquery.easing.min.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/link-hover.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/superfish.js" ?>"></script>
    <script type="text/javascript" src="<?php echo base_url()."assets/js/parallax-slider/jquery.cslider.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/mixitup.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/jquery.easing.min.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/link-hover.js" ?>"></script>
    <script src="<?php echo base_url()."assets/js/tinymce/tinymce.min.js" ?>"></script>
    <script src="<?php echo base_url()."assets/jquery/js/jquery-ui.js" ?>"></script>

    <!--common script for all pages-->
    <script src="<?php echo base_url()."assets/js/common-scripts.js" ?>"></script>

    <script src="<?php echo base_url()."assets/js/jquery.magnific-popup.js" ?>"></script>
    <script type="text/javascript">
      $(function(){

        $('#da-slider').cslider({
          autoplay    : true,
          bgincrement : 100
        });

      });
    </script>

    <!--common script for all pages-->
    <script src="<?php echo base_url()."assets/js/common-scripts.js" ?>">
    </script>

    <!--
    <script type="text/javascript">
      jQuery(document).ready(function() {


        $('.bxslider1').bxSlider({
          minSlides: 5,
          maxSlides: 6,
          slideWidth: 360,
          slideMargin: 2,
          moveSlides: 1,
          responsive: true,
          nextSelector: '#slider-next',
          prevSelector: '#slider-prev',
          nextText: 'Onward →',
          prevText: '← Go back'
        });

      });
    </script>-->

    <script type="text/javascript">
      $('.image-caption a').tooltip();

      $(function () {

          var filterList = {

              init: function () {

                  // MixItUp plugin
                  // http://mixitup.io
                  $('#portfoliolist-three').mixitup({
                      targetSelector: '.portfolio',
                      filterSelector: '.filter',
                      effects: ['fade'],
                      easing: 'snap',
                      // call the hover effect
                      onMixEnd: filterList.hoverEffect()
                  });

              },

              hoverEffect: function () {
                  $("[rel='tooltip']").tooltip();
                  // Simple parallax effect
                  $('#portfoliolist-three .portfolio .portfolio-hover').hover(
                  function(){
                      $(this).find('.image-caption').slideDown(250); //.fadeIn(250)
                  },
                  function(){
                      $(this).find('.image-caption').slideUp(250); //.fadeOut(205)
                  }
              );
              }

          };
          // Run the show!
          filterList.init();
      });

      $(document).ready(function($) {
         $('.magnefig').each(function(){
              $(this).magnificPopup({
                      type:'image',
                      removalDelay: 300,
                      mainClass: 'mfp-fade'
                 })
          });
      });
    </script>

    <script type="text/javascript">
      $('a.info').tooltip();

      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });

      $(document).ready(function($) {

        $("#owl-demo").owlCarousel({
          items : 4
        });

      });

      jQuery(document).ready(function($){
        jQuery('ul.superfish').superfish();
      });

      new WOW().init();
    </script>

    <script>

      wow = new WOW(
        {
          boxClass:     'wow',      // default
          animateClass: 'animated', // default
          offset:       0          // default
        }
      )
        wow.init();


      $(window).load(function() {
        $('.flexslider').flexslider({
          animation: "slide",
          start: function(slider) {
            $('body').removeClass('loading');
          }
        });
      });




      $(window).scroll(function() {
        $('#skillz').each(function(){
          var imagePos = $(this).offset().top;
          var viewportheight = window.innerHeight;

          var topOfWindow = $(window).scrollTop();
          if (imagePos < topOfWindow+viewportheight) {
            $('.skill_bar').fadeIn('slow');
            $('.skill_one').animate({
              width:'60%'}
                                    , 2000);
            $('.skill_two').animate({
              width:'90%'}
                                    , 2000);
            $('.skill_three').animate({
              width:'70%'}
                                      , 1000);
            $('.skill_four').animate({
              width:'55%'}
                                     , 1000);
            $('.skill_bar_progress p').fadeIn('slow',function(){

            });
          }
        });
      });
    </script>

    <!--<script type="text/javascript">
        tinymce.init({
          selector: "textarea"
        })
    </script>-->

    <script>
        $(".container").on("change", "#pendidikan", function(){
          var id_pendidikan= $(this).val();

          $.ajax({
            url: '<?php echo base_url(); ?>/Lowongan/add_jurusan_ajax',
            type: 'post',
            data: 'id_pendidikan'+id_pendidikan,
            success:function(msg){
              var url= "<?php echo base_url(); ?>/Lowongan/add_jurusan_ajax/"+id_pendidikan;
              $("#jurusan").load(url);
            }
          });
        });

        $(".container").on("change", "#provinsi", function(){
          var id_prov= $(this).val();
          
          $.ajax({
            url: '<?php echo base_url(); ?>/Profil/add_ajax_kabupaten',
            type: 'post',
            data: 'provinsi_id'+id_prov,
            success:function(msg){
              var url= "<?php echo base_url(); ?>/Profil/add_ajax_kabupaten/"+id_prov;
              $("#kabupaten").load(url);
            }
          });
        });

        $(".container").on("change", "#kabupaten", function(){
          var id_kab= $(this).val();
          
          $.ajax({
            url: '<?php echo base_url(); ?>/Profil/add_ajax_kecamatan',
            type: 'post',
            data: 'kabupaten_id'+id_kab,
            success:function(msg){
              var url= "<?php echo base_url(); ?>/Profil/add_ajax_kecamatan/"+id_kab;
              $("#kecamatan").load(url);
            }
          });
        });

        $(".container").on("change", "#kecamatan", function(){
          var id_kec= $(this).val();
          
          $.ajax({
            url: '<?php echo base_url(); ?>/Profil/add_ajax_desa',
            type: 'post',
            data: 'kecamatan_id'+id_kec,
            success:function(msg){
              var url= "<?php echo base_url(); ?>/Profil/add_ajax_desa/"+id_kec;
              $("#desa").load(url);
            }
          });
        });

    </script>

    <!--
    <script>

        $(".container").on("change", "#kategori", function(){
          var id_pekerjaan= $(this).attr("id");
          alert("Halo");

          $.ajax({
            url: '<?php echo base_url(); ?>/Lowongan/tampil_lowongan_by_kategori',
            type: 'post',
            data: 'id_pekerjaan'+id_pekerjaan,
            success:function(msg){
              var url= "<?php echo base_url(); ?>/Lowongan/tampil_lowongan_by_kategori/"+id_pekerjaan;
              $("#tourpackages-carousel").load(url);
            }
          })
        })
    </script>
    -->
    

</body>
</html>



