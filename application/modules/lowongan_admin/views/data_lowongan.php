  <div class="content-wrapper">  
    <section class="content-header">
      <h1>
        Lowongan
        <small>advanced tables</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#"><i class="fa fa-th-list"></i>Lowongan</a></li>
      </ol>
    </section>

    <section class="content">
      <div class="row">
        <div class="col-lg-12 col-xs-12">

          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>No</th>
                  <th>Id Posting</th>
                  <th>Nama User</th>
                  <th>Nama Pekerjaan</th>
                  <th>Tanggal Posting</th>
                  <th>Opsi</th>
                </tr>
                </thead>
                <tbody>
                <?php 
                  $no=1;
                  foreach($lowongan->result() as $row): 
                ?>
                <tr>
                  <td><?= $no ?></td>
                  <td><?= $row->id_posting ?></td>
                  <td><?= $row->nama_user ?></td>
                  <td><?= strtoupper($row->nama_pekerjaan) ?></td>
                  <td><?= $row->tgl_posting ?></td>
                  <td class="text-center">
                    <?php echo anchor('Lowongan_admin/lihat_lowongan_by_id/'.$row->id_posting, '<i class="fa fa-search"> </i>', array('title' => 'Lihat', 'class' => 'btn btn-success')) ?> 

                    <?php echo anchor('url', '<i class="fa fa-coffee"></i>', array('title' => 'Hapus', 'class' => 'btn btn-warning', 'onClick'=> "javascript: return confirm('Apakah anda yakin menghapus ?')"))?>
                  </td>
                </tr>
                <?php 
                  $no++;
                  endforeach 
                ?>
                </tbody>

                <tfoot>
                <tr>
                  <th>No</th>
                  <th>Id Posting</th>
                  <th>Nama User</th>
                  <th>Nama Pekerjaan</th>
                  <th>Tanggal Posting</th>
                  <th>Opsi</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>



  </div>