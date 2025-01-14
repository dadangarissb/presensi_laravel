<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sistem Informasi Pendataan Koperasi</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">

	<link rel="stylesheet" href="<?php echo base_url('assets2/css/bootstrap.min.css') ?>"/>
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/font-awesome.min.css') ?>"/>

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="<?php echo base_url('assets2/css/bootstrap-theme.css') ?>" media="screen" />

	<link rel="stylesheet" href="<?php echo base_url('assets2/css/main.css')?>" />

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
<!-- 				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a> -->
			</div>
			<div class="navbar-collapse collapse">
				<!-- <ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="sidebar-left.html">Left Sidebar</a></li>
							<li><a href="sidebar-right.html">Right Sidebar</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Contact</a></li>
					<li class="active"><a class="btn" href="signin.html">SIGN IN / SIGN UP</a></li>
				</ul> -->
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

<!-- 		<ol class="breadcrumb">
			<li><a href="index.html">Home</a></li>
			<li class="active">Registration</li>
		</ol> -->

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title" align="center">Panduan Pendaftaran UMKM</h1>
				</header>
				
				<div class="col-md-2">
				</div>
				<div class="col-md-8">
					<div class="panel panel-default">
						<div class="panel-body">
							<!-- <h3 class="thin text-center">Pendaftaran UMKM</h3> -->
							<p align="center" style="font-size:12pt">Berikut ini adalah panduan pendaftaran Usaha Mikro Kecil Menengah pada Sistem Informasi Pendataan UMKM Dinas Koperasi dan UMKM Kota Surakarta </p>
							<hr>

							<ol style="font-size:12pt">
								<li>Pilih Menu Login / Daftar Pada halaman awal</li>
								<a><img src="<?php echo base_url('assets2/images/langkah1.jpg') ?>"></a>
								<br>
								<br>
								<br>
								<li>Kemudian pilih menu daftar 'Disini'</li>
								<a><img src="<?php echo base_url('assets2/images/langkah2.jpg') ?>"></a>
								<br>
								<br>
								<br>
								<li>Masukan data pada formulir pendaftaran</li>
								<br>
								<li>Klik Tombol Submit</li>
								<a><img src="<?php echo base_url('assets2/images/langkah3.jpg') ?>"></a>
								<br>
								<br>
								<br>
								<li>Kemudian Login dengan email dan password pada form login</li>
								<a><img src="<?php echo base_url('assets2/images/langkahlogin.jpg') ?>"></a>
								<br>
								<li>Lengkapi data yang masih kosong</li>
								<li>Selesai</li>
							</ol>

							<br>
							<?php 
								echo anchor(site_url('C_user/'),'Kembali','class="btn btn-warning btn-flat"'); 
							?>
						</div>
					</div>

				</div>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	<footer id="footer" class="top-space">

		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
						</div>
					</div>

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, D3 Teknik Informatika UNS. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>





	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>