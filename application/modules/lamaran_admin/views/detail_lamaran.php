

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Detail Lamaran
      </h1>
      <ol class="breadcrumb">
        <li><a href="#">Dashboar</a></li>
        <li><a href=""><i class="fa fa-th-list"></i>Lamaran</a></li>
        <li class="active"><a href="">Detail Lamaran</a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      
      <div class="row">

        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab">Posting Lowongan</a></li>
            </ul>
            <div class="tab-content">
              <div class="active tab-pane" id="activity">
                <!-- Post -->

                <?php foreach($lamaran->result() as $row): ?>
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
                    <?= $row->spesifikasi ?>
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Komentar (<?php echo $hitung_komentar ?>)
                        </a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
              <?php endforeach ?>
              
              </div>
              <!-- /.tab-pane -->
              <div class="tab-pane" id="timeline">
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


