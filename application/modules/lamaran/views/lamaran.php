
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              CARI LAMARAN
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="#">
                  Home
                </a>
              </li>

              <li class="active">
                  Lamaran Kerja
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container" id="tourpackages-carousel">

      <div class="row">
        <div class="col-md-12 col-xs-12">
            <?php 
                    if($this->session->userdata('username')== false){ 
                        echo anchor('Login', '<i class="fa fa-pencil"></i>', array( 'onClick'=> "return confirm('Silahkan Login Untuk Posting Lamaran !!')",'class' => 'btn btn-lg btn-primary pull-left', 'title' => 'Posting Lamaran Baru'));
                    }else{
                        echo anchor('Lamaran/posting_lamaran', '<i class="fa fa-pencil"></i>', array('class' => 'btn btn-lg btn-primary pull-left', 'title' => 'Posting Lamaran Baru')); 
                    }
            ?>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 col-sm-12 col-xs-12">
          <?php $this->load->view('kategori') ?>
        </div>

        <div class="col-md-9 col-sm-12 col-xs-12">
          <div class="profile">
            <?php foreach($lamaran->result() as $row): ?>
                
                <div class="col-xs-12 col-sm-6 col-md-4 person">
                        <div class="thumbnail wow fadeInUp">
                          <img src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>"  alt="">
                          <div class="caption">
                            <div>
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
        
        <!-- End row -->
      </div>

      <div class="row">
          <div class="col-md-12 col-xs-12" >
            <center>
                <ul class="pagination">
                    <li ><?php echo $this->pagination->create_links(); ?></li>
                </ul>
            </center>
          </div>
      </div>
      <!-- End container -->
    </div>


  