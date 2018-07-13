<!doctype html>
<html lang="en">

<!-- Mirrored from demos.creative-tim.com/paper-bootstrap-wizard/wizard-create-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jul 2018 11:45:52 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png" />
	<link rel="icon" type="image/png" href="assets/img/favicon.png" />
	<title>Pendaftaran IT Telkom Purwokerto</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

	<!-- Canonical SEO -->
    <link rel="canonical" href="https://www.creative-tim.com/product/paper-bootstrap-wizard"/>

	<!-- CSS Files -->
    <link href="{{url('assetsform/css/bootstrap.min.css')}}" rel="stylesheet" />
	<link href="{{url('assetsform/css/paper-bootstrap-wizard.css')}}" rel="stylesheet" />

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="{{url('assetsform/css/demo.css')}}" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="../../netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="{{url('assetsform/css/themify-icons.css')}}" rel="stylesheet">
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'../../www.googletagmanager.com/gtm5445.html?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-NKDMSK6');</script>
	<!-- End Google Tag Manager -->
	</head>

	<body>
	<!-- End Google Tag Manager (noscript) -->
	<div class="full-width" style="">
	    <!--   Creative Tim Branding   -->
			<div class="navheader">
				s
			</div>
	    <!--   Big container   -->
	    <div class="container">
	        <div class="row">
		        <div class="col-sm-8 col-sm-offset-2">

		            <!--      Wizard container        -->
		            <div class="wizard-container" id="formpage">
		                <div class="card wizard-card" data-color="red" id="wizardProfile">
		                    <form action="/pendaftaran" method="post" enctype="multipart/form-data">
													{{csrf_field()}}
		                <!--        You can switch " data-color="orange" "  with one of the next bright colors: "blue", "green", "orange", "red", "azure"          -->

		                    	<div class="wizard-header text-center">
		                        	<h3 class="wizard-title">Pendaftaran IT Telkom</h3>
									<p class="category">Isi data dengan benar</p>
		                    	</div>

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="2" style="width: 21%;"></div>
									</div>
									<ul>
			                            <li>
											<a href="#about" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-user"></i>
												</div>
												Data Siswa
											</a>
										</li>
			                            <li>
											<a href="#ortu" data-toggle="tab">
												<div class="icon-circle">
													<i class="ti-settings"></i>
												</div>
												Data Orang Tua
											</a>
										</li>

										<li>
				<a href="#prodi" data-toggle="tab">
					<div class="icon-circle">
						<i class="ti-notepad"></i>
					</div>
					Jurusan / Prodi
				</a>
			</li>

			                        </ul>
								</div>
		                        <div class="tab-content">
		                            <div class="tab-pane" id="about">
		                            	<div class="row">
											<h5 class="info-text"> Biodata Siswa.</h5>
											<div class="col-sm-4 col-sm-offset-1">
												<div class="picture-container">
													<div class="picture">
														<img src="{{url('assetsform/img/default-avatar.jpg')}}" class="picture-src" id="wizardPicturePreview" title="" />
														<input type="file" id="wizard-picture" name="image" required>
													</div>
													<h6>Choose Picture</h6>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="form-group">
													<label>First Name <small>(required)</small></label>
													<input name="firstname" type="text" class="form-control" placeholder="First Name...">
												</div>
												<div class="form-group">
													<label>Last Name <small>(required)</small></label>
													<input name="lastname" type="text" class="form-control" placeholder="Last Name...">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Jenis Kelamin <small>(required)</small></label><br>
													<select class="form-control" name="jk" required>
														<option value="">-jenis kelamin-</option>
														<option value="L">Laki-Laki</option>
														<option value="P">Perempuan</option>
													</select>
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Agama <small>(required)</small></label><br>
													<select class="form-control" name="agama" required>
														<option value="">-agama-</option>
														<option value="Islam">Islam</option>
														<option value="Budha">Budha</option>
														<option value="Hindu">Hindu</option>
														<option value="Katolik">Katolik</option>
														<option value="Protestan">Protestan</option>
														<option value="Konghucu">Konghucu</option>
													</select>
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Email <small>(required)</small></label>
													<input name="email" type="email" class="form-control" placeholder="Email">
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Nomor Handphone <small>(required)</small></label>
													<input name="nomor_siswa" type="number" class="form-control" placeholder="Nomor Handphone" required>
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Alamat <small>(required)</small></label>
													<textarea name="alamat" class="form-control" rows="8" cols="80" required></textarea>
												</div>
											</div>
											<div class="col-sm-10 col-sm-offset-1">
												<div class="form-group">
													<label>Kode Pos <small>(required)</small></label>
													<input name="kode_pos" type="number" class="form-control" placeholder="Kode Pos" required>
												</div>
											</div>
										</div>
		                            </div>
		                            <div class="tab-pane" id="ortu">
		                                <h5 class="info-text"> Ayah</h5>
		                                <div class="row">
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nama <small>(required)</small></label>
																					<input name="nama_ayah" type="text" class="form-control" placeholder="Email">
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nomor Handphone <small>(required)</small></label>
																					<input name="nomor_ayah" type="number" class="form-control" placeholder="Nomor Handphone" required>
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Alamat <small>(required)</small></label>
																					<textarea name="alamat_ayah" class="form-control" rows="8" cols="80" required></textarea>
																				</div>
																			</div>
		                                </div>
																		<h5 class="info-text"> Ibu</h5>
		                                <div class="row">
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nama <small>(required)</small></label>
																					<input name="nama_ibu" type="text" class="form-control" placeholder="Email">
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nomor Handphone <small>(required)</small></label>
																					<input name="nomor_ibu" type="number" class="form-control" placeholder="Nomor Handphone" required>
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Alamat <small>(required)</small></label>
																					<textarea name="alamat_ibu" class="form-control" rows="8" cols="80" required></textarea>
																				</div>
																			</div>
		                                </div>
																		<h5 class="info-text">Wali</h5>
																		<h6 class="info-text">Kosongkan jika tidak ada</h6>
		                                <div class="row">
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nama <small>(required)</small></label>
																					<input name="nama_wali" type="text" class="form-control" placeholder="Email">
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Nomor Handphone <small>(required)</small></label>
																					<input name="nomor_wali" type="number" class="form-control" placeholder="Nomor Handphone" >
																				</div>
																			</div>
																			<div class="col-sm-10 col-sm-offset-1">
																				<div class="form-group">
																					<label>Alamat <small>(required)</small></label>
																					<textarea name="alamat_wali" class="form-control" rows="8" cols="80" ></textarea>
																				</div>
																			</div>
		                                </div>
		                            </div>
		                            <div class="tab-pane" id="prodi">
		                                <div class="row">
		                                    <div class="col-sm-12">
		                                        <h5 class="info-text"> Jenjang dan Prodi </h5>
		                                    </div>
																				@foreach($data as $yu)
																				<div class="col-sm-4">
																						<div class="choice" data-toggle="wizard-radio">
																								<input type="radio" name="jenjang_id" value="{{$yu->id}}">
																								<div class="card card-radio card-hover-effect">
																										<i class="ti-book"></i>
													<p>{{$yu->jenjang['jenis']}} - {{$yu->nama_prodi}}</p>
																								</div>
																						</div>
																				</div>
																				@endforeach
		                                </div>
		                            </div>
		                        </div>
		                        <div class="wizard-footer">
		                            <div class="pull-right">
		                                <input type='button' class='btn btn-next btn-fill btn-warning btn-wd' name='next' value='Next' />
		                                <input type='submit' class='btn btn-finish btn-fill btn-warning btn-wd' name='finish' value='Finish' />
		                            </div>

		                            <div class="pull-left">
		                                <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Previous' />
		                            </div>
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	    	</div><!-- end row -->
		</div> <!--  big container -->
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="{{url('assetsform/js/jquery-2.2.4.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assetsform/js/bootstrap.min.js')}}" type="text/javascript"></script>
	<script src="{{url('assetsform/js/jquery.bootstrap.wizard.js')}}" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="{{url('assetsform/js/demo.js')}}" type="text/javascript"></script>
	<script src="{{url('assetsform/js/paper-bootstrap-wizard.js')}}" type="text/javascript"></script>

	<!--  More information about jquery.validate here: https://jqueryvalidation.org/	 -->
	<script src="{{url('assetsform/js/jquery.validate.min.js')}}" type="text/javascript"></script>


<!-- Mirrored from demos.creative-tim.com/paper-bootstrap-wizard/wizard-create-profile.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 08 Jul 2018 11:45:52 GMT -->
</html>
