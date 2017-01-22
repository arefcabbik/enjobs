
    <!--breadcrumbs start-->
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Lowongan Kerja
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="<?php echo base_url()."Home" ?>">
                  Home
                </a>
              </li>

              <li>
                <a href="<?php echo base_url()."Lowongan" ?>">
                  Lowongan Kerja
                </a>
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    

    <div class="container" id="tourpackages-carousel">
        <div class="row">
            <div class="col-md-12 col-xs-12">
              
                <?php echo anchor('Lowongan/posting_lowongan', '<i class="fa fa-pencil"></i>', array('class' => 'btn btn-lg btn-primary pull-left', 'title' => 'Posting Lamaran Baru')); ?>
                 
            </div>
        </div>

        <div class="row">

            <div class="col-md-3 col-sm-12 col-xs-12">
                <?php $this->load->view('template/kategori') ?>
            </div>

            <div class="col-md-9">
                <div class="profile">

                <?php foreach($lowongan->result() as $row): ?>

                
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
                                
                                <div class="team-social-link">
                                    <a href="<?php echo base_url()."Lowongan/detail_lowongan/".$row->id_posting_a ?>" class="btn btn-warning">Lihat Selengkapnya</a>
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

      <div class="row">
          <div class="col-md-12 col-lg-12" id="lowongan">
                <center>
                <ul class="pagination">
                    <li class="pull-right"><?php echo $this->pagination->create_links(); ?></li>
                </ul>
                </center>
            </div>
      </div>
      <!-- End container -->
    </div>


  