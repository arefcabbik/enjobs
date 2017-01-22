			<div class="main-content">
				<div class="main-content-inner">
					<!-- #section:basics/content.breadcrumbs -->
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
					                <a href="<?php echo base_url()."Lowongan" ?>">
					                  Profil
					                </a>
				              	</li>
				            	</ol>
				          	</div>
				        	</div>
				      	</div>
				    </div>

				    <div class=" container">
				    	
						<div class="row">
									<div id="user-profile-3" class="user-profile row">
										<div class="col-sm-offset-1 col-sm-10">
											

											<div class="space"></div>

											<form class="form-horizontal">
												<div class="tabbable">
													<ul class="nav nav-tabs padding-16">
														<li class="active">
															<a data-toggle="tab" href="#edit-basic">
																<i class="green ace-icon fa fa-rss bigger-125"></i>
																<b>Timeline</b>
															</a>
														</li>

													</ul>

													<div class="tab-content profile-edit-tab-content">
														

														<div id="edit-basic" class="tab-pane in active">
															<div class="row ">
																<?php foreach($profil->result() as $row ): ?>
																	<div class="col-xs-12">
																		<!-- PAGE CONTENT BEGINS -->
																		<br/>

																		<div>
																			<div id="user-profile-1" class="user-profile row">
																				<div class="col-xs-12 col-sm-3 center">
																					<div>
																						<!-- #section:pages/profile.picture -->
																						<span class="profile-picture">
																							<img id="avatar"  class="editable img-responsive" style="height:200px; width:200px"
																							alt="Alex's Avatar" src="<?php echo base_url()."assets/img/upload/".$row->foto_profil ?>" />
																						</span>

																						<!-- /section:pages/profile.picture -->
																						<div class="space-4"></div>
																						
																						<div class="btn btn-success" style="width:100%">
																							<b><?php echo strtoupper($row->nama_user) ?></b>
																						</div>
																					</div>
																					
																				</div>

																				<div class="col-xs-12 col-sm-9">
																					

																					<div class="space-12"></div>

																					<!-- #section:pages/profile.info -->
																					<div class="profile-user-info profile-user-info-striped">
																						<div class="profile-info-row">
																							<div class="profile-info-name"> Nama Lengkap</div>

																							<div class="profile-info-value">
																								<span class="editable" id="username"><?php echo strtoupper($row->nama_user) ?></span>
																							</div>
																						</div>

																						<div class="profile-info-row">
																							<div class="profile-info-name"> Lokasi </div>

																							<div class="profile-info-value">
																								<i class="fa fa-map-marker light-orange bigger-110"></i>
																								<span class="editable" id="country">Netherlands</span>
																								<span class="editable" id="city">Amsterdam</span>
																							</div>
																						</div>

																						<div class="profile-info-row">
																							<div class="profile-info-name"> Usia </div>

																							<div class="profile-info-value">
																								<span class="editable" id="age">38</span>
																							</div>
																						</div>

																						<div class="profile-info-row">
																							<div class="profile-info-name"> Tanggal Gabung </div>

																							<div class="profile-info-value">
																								<span class="editable" id="signup"><?php echo $row->tgl_daftar ?></span>
																							</div>
																						</div>

																						<div class="profile-info-row">
																							<div class="profile-info-name"> Terakhir aktif </div>

																							<div class="profile-info-value">
																								<span class="editable" id="login">3 hours ago</span>
																							</div>
																						</div>

																						<div class="profile-info-row">
																							<div class="profile-info-name"> Tentang Saya </div>

																							<div class="profile-info-value">
																								<span class="editable" id="about"><?php echo $row->tentang_saya ?></span>
																							</div>
																						</div>

																					</div>

																					<!-- /section:pages/profile.info -->
																					<div class="space-20"></div>
																					<br/>
																					<div class="widget-box info">
																						<div class="widget-header widget-header-small">
																							<h4 class="widget-title blue smaller">
																								<i class="ace-icon fa fa-rss orange"></i>
																								Aktifitas Terbaru
																							</h4>
																						</div>

																						<div class="widget-body box">
																							<div class="widget-main padding-8">
																								<!-- #section:pages/profile.feed -->
																								<div id="profile-feed-1" class="profile-feed">
																									<div class="profile-activity clearfix">
																										<div>
																											<img class="pull-left" alt="Alex Doe's avatar" src="<?php echo base_url()."assets/img/person_2.png" ?>" />
																											<a class="user" href="#"> Alex Doe </a>
																											changed his profile photo.
																											<a href="#">Take a look</a>

																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												an hour ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<img class="pull-left" alt="Susan Smith's avatar" src="<?php echo base_url()."assets/img/person_2.png" ?>" />
																											<a class="user" href="#"> Susan Smith </a>

																											is now friends with Alex Doe.
																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												2 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<i class="pull-left thumbicon fa fa-check btn-success no-hover"></i>
																											<a class="user" href="#"> Alex Doe </a>
																											joined
																											<a href="#">Country Music</a>

																											group.
																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												5 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<i class="pull-left thumbicon fa fa-picture-o btn-info no-hover"></i>
																											<a class="user" href="#"> Alex Doe </a>
																											uploaded a new photo.
																											<a href="#">Take a look</a>

																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												5 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<img class="pull-left" alt="David Palms's avatar" src="<?php echo base_url()."assets/img/person_2.png" ?>" />
																											<a class="user" href="#"> David Palms </a>

																											left a comment on Alex's wall.
																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												8 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<i class="pull-left thumbicon fa fa-pencil-square-o btn-pink no-hover"></i>
																											<a class="user" href="#"> Alex Doe </a>
																											published a new blog post.
																											<a href="#">Read now</a>

																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												11 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<img class="pull-left" alt="Alex Doe's avatar" src="<?php echo base_url()."assets/img/person_2.png" ?>" />
																											<a class="user" href="#"> Alex Doe </a>

																											upgraded his skills.
																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												12 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
																											<a class="user" href="#"> Alex Doe </a>

																											logged in.
																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												12 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<i class="pull-left thumbicon fa fa-power-off btn-inverse no-hover"></i>
																											<a class="user" href="#"> Alex Doe </a>

																											logged out.
																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												16 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>

																									<div class="profile-activity clearfix">
																										<div>
																											<i class="pull-left thumbicon fa fa-key btn-info no-hover"></i>
																											<a class="user" href="#"> Alex Doe </a>

																											logged in.
																											<div class="time">
																												<i class="ace-icon fa fa-clock-o bigger-110"></i>
																												16 hours ago
																											</div>
																										</div>

																										<div class="tools action-buttons">
																											<a href="#" class="blue">
																												<i class="ace-icon fa fa-pencil bigger-125"></i>
																											</a>

																											<a href="#" class="red">
																												<i class="ace-icon fa fa-times bigger-125"></i>
																											</a>
																										</div>
																									</div>
																								</div>
																								<!-- /section:pages/profile.feed -->
																							</div>
																							<br/>
																							<div class="center">
																								<button type="button" class="btn btn-sm btn-primary btn-white btn-round">
																									<i class="ace-icon fa fa-rss bigger-150 middle orange2"></i>
																									<span class="bigger-110">View more activities</span>

																									<i class="icon-on-right ace-icon fa fa-arrow-right"></i>
																								</button>
																							</div>


																						</div>

																					</div>																				
																				</div>
																			</div>
																		</div>
																		<br/>
																		
																	</div>

																<?php endforeach ?>
															</div>
														</div>

													</div>
												</div>

												
											</form>
										</div><!-- /.span -->
									</div><!-- /.user-profile -->
								</div>

					</div>


				</div>
			</div><!-- /.main-content -->
			<br/>
