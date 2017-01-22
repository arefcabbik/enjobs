
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
                <a href="#">
                  Home
                </a>
              </li>

              <li class="active">
                  Lowongan Kerja
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <div class="container" id="tourpackages-carousel">
        <div class="row" >
            <div class="col-md-12 col-xs-12">
                <?php if($this->session->userdata('username')== false){ 
                        echo anchor('Login', '<i class="fa fa-pencil"></i>', array( 'onClick'=> "return confirm('Silahkan Login Untuk Posting Lowongan !!')",'class' => 'btn btn-lg btn-primary pull-left', 'title' => 'Posting Lamaran Baru'));
                    }else{
                        echo anchor('Lowongan/posting_lowongan', '<i class="fa fa-pencil"></i>', array('class' => 'btn btn-lg btn-primary pull-left', 'title' => 'Posting Lamaran Baru')); 
                    }
                ?>
            </div>
        </div>

        <div class="row">

            <div class="col-md-3 col-sm-12 col-xs-12">
                <!--<br/>
                <ul class="list-group">
                    <li class="list-group-item">
                        <h4><b>Kategori</b></h4>
                    </li>
                    
                    <div class="panel-body">
                        <?php 
                            echo form_open('Lowongan/tampil_lowongan_by_kategori/', array('clas' => 'form-horizontal'));
                            ?>
                            <label class="control-label col-md-9">
                                <?php 
                                echo form_dropdown('kategori', $kategori,'', array('class' => 'form-control', 'id' => 'kategori')); 
                               
                                ?>
                            </label>

                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-warning pull-left"><i class="fa fa-search"></i></button>
                            </div>
                            <?php
                            echo form_close(); 
                         ?>
                    </div>
                </ul>

                <ul class="list-group">
                    <li class="list-group-item">
                        <h4><b>Kota</b></h4>
                    </li>
                    
                    <div class="panel-body">
                        <?php 
                            echo form_open('Lowongan/tampil_lowongan_by_kategori/', array('clas' => 'form-horizontal'));
                            ?>
                            <label class="control-label col-md-9">
                                <?php 
                                echo form_dropdown('kategori', $kategori,'', array('class' => 'form-control', 'id' => 'kategori')); 
                               
                                ?>
                            </label>

                            <div class="form-group col-md-2">
                                <button type="submit" class="btn btn-warning pull-left"><i class="fa fa-search"></i></button>
                            </div>
                            <?php
                            echo form_close(); 
                         ?>
                    </div>
                </ul>-->
                <?php $this->load->view('kategori') ?>
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12">
                <div class="profile" id="tampil_lowongan">

                    <?php foreach($lowongan->result() as $row): 
                    ?>
                
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

        <div class="row">
            <div class="col-md-12 col-lg-12" id="lowongan">
                <center>
                    <ul class="pagination">
                        <li class="pull-right"><?php echo $this->pagination->create_links(); ?></li>
                    </ul>
                </center>
            </div>
        </div>
    </div>
    <div id="tampil">
        
    </div>

    


  