
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard Njobs
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="fa fa-th-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lowongan</span>
              <span class="info-box-number"><?php echo $lowongan." Postingan" ?></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-th-list"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Lamaran</span>
              <span class="info-box-number"><?php echo $lamaran." Postingan" ?></span> 
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-4 col-sm-6 col-xs-12">
          <div class="col-content" style="height:100%">
            <div class="info-box">
              <span class="info-box-icon bg-green"><i class="fa fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Anggota</span>
                <span class="info-box-number"><?php echo $anggota." User" ?></span>
              </div>
            </div>
          </div>
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
      <div class="row">
        <div class="col-md-12 col-xs-12">
          <div class="box" height="100%">
            
              <div class="alert alert-info alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-ban"></i> Peringatan !</h4>
                Selamat Datang di Halaman Dashboard NJOBS !!!
              </div>
            
          </div>
        </div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->





