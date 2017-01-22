          <div class="breadcrumbs">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-sm-4">
                  <h1>
                    Tulis Lowongan
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
                        Tulis Lowongan
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <!-- PAGE CONTENT BEGINS -->
                <?php
                $atribut= array('class' => 'form-horizontal');
                echo form_open('Lowongan/simpan_lowongan', $atribut); ?>
                  
                <?php if($this->session->flashdata('pesan1')){ ?>

                  <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                    <h5><?php echo $this->session->flashdata('pesan1') ?></h5>
                  </div>
                <?php }elseif($this->session->flashdata('pesan2')){ ?>
                  <div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert"><i class="fa fa-times"></i></button>
                    <h5><?php echo $this->session->flashdata('pesan2') ?></h5>
                  </div>
                <?php } ?>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama Pekerjaan </label>

                    <div class="col-sm-9">
                      
                      <?php 
                        echo form_dropdown('id_pekerjaan', $pekerjaan, '', array('class' => 'form-control', 'required' => true));
                      ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Pendidikan Minimal </label>

                    <div class="col-sm-9">

                          <?php 
                              echo form_dropdown('pendidikan', $pendidikan, '', array('class' => 'form-control','id' => 'pendidikan', 'required' => true));

                          ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-1-1"> Jurusan </label>

                    <div class="col-sm-9">
                     <select name="jurusan" class="form-control" id="jurusan">
                          <option value="0000">- JURUSAN -</option>

                      </select>
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Berlaku dari</label>

                    <div class="col-md-3 col-sm-9">
                      <?php echo form_input('tanggal_awal', '', array( 'id' => 'datepicker1', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'yy-bb-dd'));; ?>
                    </div>

                  </div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-4">Sampai dengan</label>

                    <div class="col-md-3 col-sm-9">
                      
                      <?php echo form_input('tanggal_akhir', '', array( 'id' => 'datepicker2', 'class' => 'form-control', 'required' => 'required', 'placeholder' => 'yy-bb-dd'));; ?>
                      
                    </div>

                  </div>

                  <div class="space-4"></div>

                  <div class="form-group">
                    <label class="col-sm-3 control-label no-padding-right" for="form-field-6">Spesifikasi Pekerjaan</label>

                    <div class="col-sm-9">
                      <?php echo form_textarea('spesifikasi_pekerjaan', '', array(
                                                                          'class' => 'form-control', 
                                                                          'id' => 'spesifikasi', 
                                                                          'required'=> 'required',
                                                                          'placeholder' => 'Spesifikasi')); 
                      ?>
                    </div>
                  </div>

                  <div class="clearfix form-actions">
                    <div class="col-md-offset-3 col-md-9">
                      
                      <?php echo form_submit('simpan', 'Simpan', array('class' => 'btn btn-info')); ?>
                      <?php echo form_reset('reset', 'Reset', array('class' => 'btn btn-default')) ?>

                    </div>
                  </div>
                <?php echo form_close(); ?>

                  <div class="hr hr-24"></div>



                  <div class="space-24"></div>
              
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!--container -->