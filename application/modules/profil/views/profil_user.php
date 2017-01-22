

<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-sm-4">
          <h1>
            PROFIL
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
              <a href="">
                Profil
              </a>
            </li>
          </ol>
        </div>
      </div>
    </div>
</div>
<div class="container">

  <div class="main-content">

    <!-- Main content -->
    <section class="content">

      
      <div class="row">
        <?php foreach($profil->result() as $row): ?>
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary" style="box-shadow: 0px 2px 8px 0px rgba(100, 100, 50, 0.20)">
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
          <div class="box box-primary" style="box-shadow: 0px 2px 8px 0px rgba(100, 100, 50, 0.20)">
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
          <div class="nav-tabs-custom" style="box-shadow: 0px 2px 8px 0px rgba(100, 100, 50, 0.20)">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Posting Lowongan</a></li>
              <li><a href="#timeline" data-toggle="tab">Posting Lamaran</a></li>
              <!--<li><a href="#settings" data-toggle="tab">Settings</a></li>-->
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
                      <a href="<?php echo base_url()."Lowongan/detail_lowongan/".$row->id_posting ?>" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Komentari</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <?php endforeach ?>
              
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
                <!-- The timeline -->

                      <?php foreach($lamaran->result() as $row): ?>
                      <div class="post">
                        <div class="user-block">
                          <img class="img-circle img-bordered-sm" src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>" alt="user image">
                              <span class="username">
                                <a href="#"><?= $row->nama_user ?></a>
                                
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
                            <a href="<?php echo base_url()."Lamaran/detail_lamaran/".$row->id_posting ?>" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Komentari
                        </ul>

                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
                      </div>
                      <?php endforeach ?>

              </div>
              <!-- /.tab-pane -->
              <!--
              <div class="tab-pane" id="settings">
                <form class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputName" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Experience</label>

                    <div class="col-sm-10">
                      <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputSkills" class="col-sm-2 control-label">Skills</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>-->
              <!-- /.tab-pane -->
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
  <!-- /.content-wrapper -->

  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
</div>

