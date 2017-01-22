<!-- Sequence Modern Slider -->
    <div id="da-slider" class="da-slider">

      <div class="da-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <h2>
                <i>Banyak lowongan tersedia</i>
                <br>
                
              </h2>
              
              <a href="<?php echo base_url()."Lowongan" ?>" class="btn btn-info btn-lg da-link">
                Selengkapnya 
              </a>
              <div class="da-img">
                <img src="<?php echo base_url()."assets/img/parallax-slider/images/2.png" ?>" alt="image01" />
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="da-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <h2>
                <i>Tulis lamaran anda sendiri</i>
                <br />
                
              </h2>

              <a href="<?php echo base_url()."Lamaran" ?>" class="btn btn-info btn-lg da-link">
                Selengkapnya
              </a>
                <div class="da-img">
                  <img src="<?php echo base_url()."assets/img/parallax-slider/images/3.png" ?>" alt="image01" />
                </div>
            </div>
          </div>
        </div>
      </div>


      <div class="da-slide">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              
              <h2>
                <i>Daftar jadi anggota</i>
                  </br>
              </h2>

              <a href="<?php echo base_url()."Login/daftar" ?>" class="btn btn-info btn-lg da-link">
                Selengkapnya
              </a>

                <div class="da-img">
                  <img src="<?php echo base_url()."assets/img/parallax-slider/images/1.png" ?>" alt="image01" />
                </div>
            </div>
          </div>
        </div>
      </div>

      <nav class="da-arrows">
        <span class="da-arrows-prev">
        </span>
        <span class="da-arrows-next">
        </span>
      </nav>
    </div>

    <!--
    <div class="container">
      <div class="row mar-b-50">
        <div class="col-md-12">
          <div class="text-center feature-head wow fadeInDown">
            <h1 class="">
              welcome to Njobs
             
            </h1>

          </div>


          <div class="feature-box">
            <div class="col-md-6 col-sm-6 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <a href="">
                <em>
                <img src="<?php echo base_url()."assets/img/1.png" ?>" alt="" width="100" height="100">

                </em>
                <h4>
                  <b>Posting</b>
                </h4>
                </a>              
              </div>
              <p class="col-md-12">
                Posting lamaran atau lowongan anda agar pemilik dan job seeker di seluruh dunia bisa menemukannya
                </p>
            </div>
            <div class="col-md-6 col-sm-6 text-center wow fadeInUp">
              <div class="feature-box-heading">
                <a href="<?php echo base_url()."" ?>">
                <em>
                  <img src="<?php echo base_url()."assets/img/2.png" ?>" alt="" width="100" height="100">
                </em>
                <h4>
                  <b>Temukan Lowongan</b>
                </h4>
                </a>
              </div>
              <p class="col-md-12">
                Cari dan temukan lowongan pekerjaan yang sesuai dengan kemampuan anda.
              </p>
            </div>
            
          </div>

        </div>
      </div>
    </div>-->

    <div id="home-services" style="background: #48cfad">
        <div class="container" >
            <div class="row">
              <div class="col-md-12">
                <h2>
                  Banyak Keuntungan disini
                </h2>
              </div>

              <div class="col-md-4">
                <div class="h-service">
                  <div class="icon-wrap ico-bg round-fifty wow fadeInDown" style="background: #1F93FF">
                    <i class="fa fa-th-list">
                    </i>
                  </div>
                  <div class="h-service-content wow fadeInUp">
                    <h3>
                      Temukan Lowongan
                    </h3>
                    <p class="col-md-12">
                      Ada Lebih dari 10 Lowongan Pekerjaan yang bisa anda temui di Njobs
                      <br>
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="h-service">
                  <div class="icon-wrap ico-bg round-fifty wow fadeInDown" style="background: #FE162C">
                    <i class="fa fa-th-list">
                    </i>
                  </div>
                  <div class="h-service-content wow fadeInUp">
                    <h3>
                      Posting Lamaran
                    </h3>
                    <p class="col-md-12">
                      Bila setiap lowongan yang diposting tidak cocok dengan kemampuan anda, langsung saja posting lamaran anda
                      <br>
                      
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="h-service">
                  <div class="icon-wrap ico-bg round-fifty wow fadeInDown" style="background: #FF912F">
                    <i class="fa fa-users">
                    </i>
                  </div>
                  <div class="h-service-content wow fadeInUp">
                    <h3>
                      Lebih Banyak Koneksi
                    </h3>
                    <p class="col-md-12">
                      Lebih dari 10 anggota terdaftar di Njobs !!
                      <br>
                      
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <!-- /row -->
        </div>
    </div>
    <!-- End container -->

    <!-- service end -->
    <div class="hr">
      <span class="hr-inner"></span>
    </div>

    <div id="lowongan-terbaru" >
      <div class="container" id="tourpackages-carousel">
        <div class="row">
          <div class="profile">
            <!--<h2>
              LOWONGAN TERBARU
            </h2>-->

              <div class="col-md-12">
                <h4 ><a href="<?php echo base_url()."Lowongan" ?>" class="btn  btn-warning">Lihat semua lowongan <i class="glyphicon glyphicon-fast-forward"></i></a></h4>
              </div>
            
          <?php foreach($lowongan->result() as $row): ?>
              
              <div class="col-xs-12 col-sm-6 col-md-3 person">
                      <div class="thumbnail wow fadeInUp">
                        <img src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>"  alt="">
                        <div class="caption">
                          <div style="height:50px">
                          <h3>
                            <b><?php echo $row->nama_pekerjaan_c ?></b>
                          </h3>
                          </div>
                          <h5>
                              <a href="#"><?php echo $row->nama_user_b ?></a>
                          </h5>

                          <h6>
                              <i class="fa fa-map-marker"> </i>
                              Jepara, Jawa Tengah
                            </h6>
                          
                          <div class="team-social-link">
                              <a href="<?php echo base_url()."Lowongan/detail_lowongan/".$row->id_posting ?>" class="btn btn-warning">Lihat Selengkapnya</a>
                            <!--<a href="#" title="Lihat Selengkapnya">
                              <i class="fa fa-eye">
                              </i>
                            </a>

                            <a href="#" title="Sukai">
                              <i class="fa fa-thumbs-up">
                              </i>
                            </a>-->
                          </div>
                        </div>
                      </div>

              </div>

          <?php endforeach ?>
              
          </div>

        </div>

      </div>
    </div>

    <div class="hr">
      <span class="hr-inner"></span>
    </div>

    <div id="lamaran-terbaru">
      <div class="container" id="tourpackages-carousel">

        <div class="row">
          <div class="profile">
            <!--<h2>
              LAMARAN TERBARU
            </h2>-->

              <div class="col-md-12">
                <h4 ><a href="<?php echo base_url()."Lamaran" ?>" class="btn btn-info">Lihat semua lamaran <i class="glyphicon glyphicon-fast-forward"></i></a></h4>
              </div>

          <?php foreach($lamaran->result() as $row): ?>
              
              <div class="col-xs-12 col-sm-6 col-md-3 person">
                      <div class="thumbnail wow fadeInUp">
                        <img src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>"  alt="">
                        <div class="caption">
                          <div style="height:50px">
                          <h3>
                            <b><?php echo $row->nama_pekerjaan_c ?></b>
                          </h3>
                          </div>
                          <h5>
                              <a href="#"><?php echo $row->nama_user_b ?></a>
                          </h5>

                          <h6>
                              <i class="fa fa-map-marker"> </i>
                              Jepara, Jawa Tengah
                            </h6>
                          
                          <div class="team-social-link">
                              <a href="<?php echo base_url()."Lamaran/detail_lamaran/".$row->id_posting ?>" class="btn btn-info">Lihat Selengkapnya</a>
                            <!--<a href="#" title="Lihat Selengkapnya">
                              <i class="fa fa-eye">
                              </i>
                            </a>

                            <a href="#" title="Sukai">
                              <i class="fa fa-thumbs-up">
                              </i>
                            </a>-->
                          </div>
                        </div>
                      </div>
              </div>
          <?php endforeach ?>
          </div>
        </div>

      </div>
    </div>

    <div class="hr">
      <span class="hr-inner"></span>
    </div>


   