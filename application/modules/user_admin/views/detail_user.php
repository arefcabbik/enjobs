

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <<li><a href="#"><i class="fa fa-users"></i>Pengguna</a></li>
        <li class="active"><i class="fa fa-user"></i>Data Pengguna</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      
      <div class="row">
        <?php foreach($profil->result() as $row): ?>
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
            <?php if($row->foto_profil != ""){ ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>" alt="User profile picture">
            <?php }else{ ?>
              <img class="profile-user-img img-responsive img-circle" src="<?php echo base_url()."assets/img/upload/no-photo1.png" ?>" alt="User profile picture">
            <?php } ?>
              <h3 class="profile-username text-center"><?php echo $row->nama_user ?></h3>


              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Followers</b> <a class="pull-right">1,322</a>
                </li>
                <li class="list-group-item">
                  <b>Following</b> <a class="pull-right">543</a>
                </li>
                <li class="list-group-item">
                  <b>Friends</b> <a class="pull-right">13,287</a>
                </li>
              </ul>

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Tentang Saya</strong>

              <p class="text-muted">
                <?php echo $row->tentang_saya ?>
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Lokasi</strong>

              <p class="text-muted"><?php echo $row->nama_kabupaten.", ". $row->nama_provinsi ?></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <?php endforeach ?>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Posting Lowongan</a></li>
              <li><a href="#timeline" data-toggle="tab">Posting Lamaran</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->

                <?php foreach($lowongan->result() as $row): ?>
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>" alt="user image">
                        <span class="username">
                          <a href="#"><?= $row->nama_user ?></a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description"><?= $row->tgl_posting ?></span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    <?= $row->spesifikasi_pekerjaan ?>
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
              <?php endforeach ?>
              
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <?php foreach($lamaran->result() as $row): ?>
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>" alt="user image">
                              <span class="username">
                                <a href="#"><?= $row->nama_user ?></a>
                                <a href="<?php echo base_url()."Hapus/".$row->id_posting ?>" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                              </span>
                          <span class="description"><?= $row->tgl_posting ?></span>
                        </div>
                        <!-- /.user-block -->
                        <p>
                          <?= $row->spesifikasi ?>
                        </p>
                        <ul class="list-inline">
                          <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                          <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                          </li>
                          <li class="pull-right">
                            <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                              (5)</a></li>
                        </ul>

                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
                      </div>
                      <?php endforeach ?>
              </div>
 
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      

    </section>
    <!-- /.content -->
  </div>

  <div class="control-sidebar-bg"></div>


