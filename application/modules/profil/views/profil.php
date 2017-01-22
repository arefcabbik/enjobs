
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
			              <br/>
			              <?php echo $row->tentang_saya ?>

			              <hr>

			              <strong><i class="fa fa-map-marker margin-r-5"></i> Lokasi</strong>
			              <br>
			              <?php echo $row->nama_kabupaten." ". $row->nama_provinsi ?>

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
			              <li><a href="#settings" data-toggle="tab">Edit Profil</a></li>
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
			                          
			                           <?php echo anchor('Lowongan/hapus_lowongan/'.$row->id_posting, '<i class="fa fa-times"></i>', array('title' => 'Hapus', 'class' => 'pull-right btn-box-tool', 'onClick'=> "javascript: return confirm('Apakah anda yakin menghapus ?')"))?>
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
			                    <li><a href="#" class="link-black text-sm"><i class="fa fa-edit margin-r-5"></i> Edit</a>
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

			                      <?php foreach($lamaran->result() as $row): 

			                      ?>
			                      <div class="post">
			                        <div class="user-block">
			                          <img class="img-circle img-bordered-sm" src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>" alt="user image">
			                              <span class="username">
			                                <a href="#"><?= $row->nama_user ?></a>
			                                <?php echo anchor('Lamaran/hapus_lamaran/'.$row->id_posting, '<i class="fa fa-times"></i>', array('title' => 'Hapus', 'class' => 'pull-right btn-box-tool', 'onClick'=> "javascript: return confirm('Apakah anda yakin menghapus ?')"))?>
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
			                          <li><a href="#" class="link-black text-sm"><i class="fa fa-edit margin-r-5"></i> Edit</a>
			                          </li>
			                          <li class="pull-right">
			                            <a href="<?php echo base_url()."Lamaran/detail_lamaran/".$row->id_posting ?>" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Komentari</a></li>
			                        </ul>

			                        <input class="form-control input-sm" type="text" placeholder="Type a comment">
			                      </div>
			                      <?php endforeach ?>

			              </div>
			              <!-- /.tab-pane -->
			            
			              <div class="tab-pane" id="settings">
			                <div class="space"></div>
								<div class="row">
						    		<div class=" alert alert-default col-sm-offset-0 col-sm-10">
							    		<?= $this->session->flashdata('pesan'); ?>
										
										<?php echo form_open('Profil/upload_foto', array('enctype' => 'multipart/form-data')); ?>
										<div class="form-group">

											<div class="col-xs-12 col-sm-12">															
												<input type="hidden" name="id_user" value="<?php echo $this->session->userdata('id_user'); ?>">
												<input type="file" name="filefoto" class="btn btn-lg btn-default"/>
					
											</div>
											<br/>

											<div class="col-xs-12 col-sm-2"><br/>
												<?php echo form_submit('upload', 'Ganti Foto', array('class' => 'btn btn-primary')); ?>
											</div>
											<br/>
											
										</div>
										<?php echo form_close(); ?>
									</div>
						    	</div>										
																			
																				

								<?php foreach($profil->result() as $row): ?>
								
									<div id="edit-basic">
										<?php 

											echo form_open('Profil/update_profil', array('class' => 'form-horizontal')); 
										?>
																						
																						
										<div class="form-group">
																								
											<label class="col-sm-3 control-label no-padding-right" for="form-field-username">Username</label>

											<div class="col-sm-8">
												<?php echo form_input('username', $row->username, array('class' => 'form-control', 'required' => 'required')); ?>
											</div>

										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-first">Name</label>

											<div class="col-sm-8">
																										
												<?php echo form_input('nama_user', $row->nama_user, array('class' => 'form-control', 'required' => 'required')); ?>
											</div>
																								
										</div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-date">Lahir</label>

											<div class="col-sm-4">
												<div class="input-medium">
													<div class="input-group">
																										
														<?php echo form_input('tgl_lahir', $row->tgl_lahir, array('class' => 'form-control', 'id' => 'datepicker1')); ?>
														<span class="input-group-addon">
															<i class="ace-icon fa fa-calendar"></i>
														</span>
													</div>
												</div>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-comment">Tentang Saya</label>

											<div class="col-sm-8">
												<?php echo form_textarea('tentang_saya', $row->tentang_saya, array('class' => 'form-control')); ?>
											</div>

										</div>

																						<br/>
										<div class="space"></div>
										<h4 class="header blue bolder smaller">Contact</h4>
										<hr/>
										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Email</label>

											<div class="col-sm-8">
												<span class="input-icon input-icon-right">
													<?php echo form_input('email', $row->email, array('class' => 'form-control', 'required' => 'required')); ?>
																									
												</span>
											</div>
										</div>

										<div class="space-4"></div>

										<div class="form-group">
											<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Website</label>

											<div class="col-sm-8">
												<span class="input-icon input-icon-right">
													<?php echo form_input('website', $row->website, array('class' => 'form-control')); ?>
																									
												</span>
											</div>
										</div>

																						<div class="space-4"></div>

																						<div class="form-group">
																							<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Phone</label>

																							<div class="col-sm-5">
																								<span class="input-icon input-icon-right">
																									<?php echo form_input('telepon', '', array('class' => 'form-control')); ?>
																									
																								</span>
																							</div>
																						</div>

																						<br/>
																						<div class="space"></div>
																						<h4 class="header blue bolder smaller">Alamat</h4>
																						<hr/>
																						<div class="form-group">
																							<label class="col-sm-3 control-label no-padding-right" for="form-field-email">Provinsi</label>

																							<div class="col-md-5 col-sm-7 col-xs-12">
																									<?php

																										echo form_dropdown('provinsi', $provinsi, $row->provinsi, array('class' => 'form-control', 'id' => 'provinsi')); 
																									?>																			
																							</div>
																						</div>

																						<div class="space-4"></div>

																						<div class="form-group">
																							<label class="col-sm-3 control-label no-padding-right" for="form-field-website">Kabupaten</label>

																							<div class="col-md-5 col-sm-7 col-xs-12">
																								
																								<select name="kabupaten" class="form-control" id="kabupaten" >
																									<option value="<?php echo $row->id ?>"><?php echo $row->nama_kabupaten ?></option>
																								</select><!--
																								<select name="kabupaten" class="form-control" id="kabupaten">
																									<option><?php echo $row->nama_kabupaten ?></option>
																								</select>	-->
																								
																							</div>
																						</div>
																						<!--
																						<div class="space-4"></div>

																						<div class="form-group">
																							<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Kecamatan</label>

																							<div class="col-md-5 col-sm-7 col-xs-12">
																								<select name="kecamatan" class="form-control" id="kecamatan">
																									<option><?php echo $row->nama_kecamatan ?></option>
																								</select>																															
																							</div>
																						</div>

																						<div class="space-4"></div>

																						<div class="form-group">
																							<label class="col-sm-3 control-label no-padding-right" for="form-field-phone">Desa</label>

																							<div class="col-md-5 col-sm-7 col-xs-12">																
																								<select name="desa" class="form-control" id="desa">
																									<option><?php echo $row->nama_desa ?></option>
																								</select>																	
																							</div>
																						</div>-->

																						<div class="clearfix ">
																							<div class="col-md-offset-3 col-md-9">
																								<button class="btn btn-primary" type="submit">
																									<i class="ace-icon fa fa-check bigger-110"></i>
																									Save
																								</button>

																								&nbsp; &nbsp;
																								<button class="btn" type="reset">
																									<i class="ace-icon fa fa-undo bigger-110"></i>
																									Reset
																								</button>
																							</div>
																						</div>
																						
																						
									</div>
									<br/>
																					
								
								<?php endforeach ?>
								<?php echo form_close(); ?>
																			
			              </div>
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


			  <!-- Control Sidebar -->
			  
			  <!-- /.control-sidebar -->
			  <!-- Add the sidebar's background. This div must be placed
			       immediately after the control sidebar -->
			</div>




			
