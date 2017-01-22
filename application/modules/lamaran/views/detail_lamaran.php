
    <div class="breadcrumbs">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-4">
            <h1>
              Detail Lamaran
            </h1>
          </div>
          <div class="col-lg-8 col-sm-8">
            <ol class="breadcrumb pull-right">
              <li>
                <a href="#">
                  Home
                </a>
              </li>
              <li>
                <a href="#">
                  Lowongan
                </a>
              </li>
              <li class="active">
                Detail Lowongan
              </li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!--breadcrumbs end-->

    <!--container start-->
    <div class="container">
      <?php 
        foreach($lamaran->result() as $row): 
          $id_posting_a= $row->id_posting_a;
      ?>
      <div class="row">
        <!--blog start-->
        <div class="col-lg-9">
          <div class="blog-item">
            <div class="row">
              <div class="col-lg-2 col-sm-2">
                <div class="date-wrap">
                  <span class="date">
                    11
                  </span>
                  <span class="month">
                    January
                  </span>
                </div>

              </div>
              <div class="col-lg-10 col-sm-10">


                <div class="blog-img gs">
                  <img src="<?php echo base_url()."assets/img/".$row->foto_profil ?>" height="555" alt=""/>
                </div>

              </div>
            </div>
            <div class="row">
              <div class="col-lg-2 col-sm-2 text-right">
                <div class="author">
                  By<br/>
                  <?php if($this->session->userdata('id_user') == $row->id_user){
                      echo anchor('Profil/', $row->nama_user, 'attributes');
                    }else{
                      echo anchor('Profil/lihat/'.$row->id_user_a, $row->nama_user, 'attributes');
                      } ?>
                  <!--
                  <a href="<?php echo base_url()."Profil/lihat/".$row->id_user ?>">
                    <?php echo $row->nama_user ?>
                  </a>-->
                </div>

              </div>
              <div class="col-lg-10 col-sm-10">
                <h1>
                  <a href="blog_detail.html" style="margin-left:20px">
                    <?php echo strtoupper($row->nama_pekerjaan) ?>
                  </a>
                </h1>

                <blockquote>

                  <h4>
                    <b>Pendidikan :  </b>
                  </h4>
                  <p><?php echo strtoupper($row->nama_pendidikan) ?></p>
                  
                  <h4>
                    <b>Jurusan :  </b>
                  </h4>
                  <p><?php 
                       
                          echo strtoupper($row->nama_jurusan);
                        
                    ?>
                  </p>
                  
                  <h4>
                  <b>Spesifikasi : </b>
                  </h4>
                  
                  <p>
                    <?php echo $row->spesifikasi ?>
                  </p>
                  <small>
                    
                      <?php echo $row->nama_user ?>
                    
                  </small>
                </blockquote>
                <?php endforeach ?>

                <div class="media">
                  <h3>
                    <b>Komentar  </b><badge class="badge badge-lg"><?php echo $hitung_komentar ?></badge>
                  </h3>
                  <hr>
                  <?php 
                    $no=1;
                    foreach($komentar->result() as $row): 
                  ?>
                  <a class="pull-left" href="javascript:;">
                    <img class="media-object" src="<?php echo base_url()."assets/img/upload/".$row->foto_profil_a ?>" alt="">
                  </a>
                  <div class="media-body">
                    <h4 class="media-heading">
                      <?php echo $row->nama_user_a ?>
                      <span>
                        |
                      </span>
                      <span>
                        <?php echo $row->tanggal_c ?>
                      </span>
                      <span class="pull-right">
                        <?php echo $no ?>
                      </span>
                    </h4>
                    <p>
                      <?php echo $row->komentar_c ?>
                    </p>
                    <a href="javascript:;">
                      Reply
                    </a>
                    <hr>
                    
                  </div>
                  <?php 
                    $no++;
                    endforeach 
                  ?>
                </div>
                
                <div class="post-comment">
                  <h3 class="skills">
                    Komentari
                  </h3>
                  
                  <?php echo form_open('Komentar/simpan_komentar_lamaran', array('class' => 'form-horizontal')); ?> 
                    <?php if($this->session->flashdata('pesan1')){ ?>

                  <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                    <h5><?php echo $this->session->flashdata('pesan1') ?></h5>
                  </div>
                  <?php } ?>
                
                    <div class="form-group">
                      <div class="col-lg-12">
                        <?php echo form_hidden('id_posting',  $id_posting_a); ?>
                        <?php echo form_hidden('oleh',  $this->session->userdata('id_user')); ?>
                        <?php echo form_textarea('komentar', '', array('class' => 'form-control', 'placeholder' => 'Komentar', 'required' => 'required')); ?>
                      </div>
                    </div>
                    <p>
                      <button type="submit" class="btn btn-warning">
                        Post Comment
                      </button>
                    <?php echo form_close(); ?>
                </div>

              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-3">
          <div class="blog-side-item">
            <div class="search-row">
              <input type="text" class="form-control" placeholder="Search here">
            </div>

            <div class="blog-post">
              <h3>
                Terbaru
              </h3>
              <?php foreach($terbaru->result() as $row): ?>
              <div class="media">
                <a class="pull-left gs" href="javascript:;">
                  <img class=" " src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>" height="70" alt="">
                </a>
                <div class="media-body">
                  <h5 class="media-heading">
                    <small>
                      <?php echo anchor('Lowongan/detail_lowongan/'.$row->id_posting, $row->nama_user_b, 'attributes'); ?>
                    </small>
                  </h5>
                  
                    <?php echo anchor('Lowongan/detail_lowongan/'.$row->id_posting, strtoupper($row->nama_pekerjaan_c), 'attributes'); ?><br/>
                  
                  
                    <?php echo $row->tgl_posting ?>
                  
                </div>
              </div>
              <br/>
              <hr/>
            <?php endforeach ?>
              
            </div>

            <div class="archive">
              <h3>
                Archive
              </h3>
              <ul class="list-unstyled">
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    May 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    April 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    March 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    February 2014
                  </a>
                </li>
                <li>
                  <a href="javascript:;">
                    <i class="fa fa-angle-double-right pr-10">
                    </i>
                    January 2014
                  </a>
                </li>
              </ul>
            </div>

          </div>
        </div>

      </div>
      
    </div>
  
