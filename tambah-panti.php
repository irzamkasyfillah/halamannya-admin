<!doctype html>
<html lang="en">

<head>
	<title>Admin | INFERNITY</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
	<!-- VENDOR CSS -->
	<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="assets/vendor/linearicons/style.css">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.min.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/logo-minified-dark.png">
</head>

<body>
	<!-- WRAPPER -->
	<div id="wrapper">
		<!-- NAVBAR -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="brand">
				<a href="index.php"><img src="assets/img/logo-infernity-text.png" alt="INFERNITY Logo" class="img-responsive logo"></a>
			</div>
			<div class="container-fluid">
				<div id="tour-fullwidth" class="navbar-btn">
					<button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
				</div>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o"></i> <span><?php 	session_start(); echo $_SESSION['username']; ?></span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="logout-admin.php"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<!-- END NAVBAR -->
		<!-- LEFT SIDEBAR -->
		<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">
						<li>
							<a href="index.php"><i class="lnr lnr-home"></i> <span>Dashboards</span></a>
						</li>
						<li>
							<a href="#subBlog" data-toggle="collapse" class="collapsed"><i class="lnr lnr-layers"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subBlog" class="collapse">
								<ul class="nav">
									<li><a href="data-blog.php">Data Blog</a></li>
									<li><a href="tambah-blog.php">Tambah Blog</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPanti" data-toggle="collapse" class="active"><i class="lnr lnr-database"></i> <span>Data Panti Asuhan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPanti" class="collapse in">
								<ul class="nav">
									<li><a href="data-panti.php" >Data Panti</a></li>
									<li><a href="tambah-panti.php" class="active">Tambah Panti</a></li>
								</ul>
							</div>
						</li>
						<li><a href="data-donatur.php"><i class="lnr lnr-users"></i> <span>Data Donatur</span></a></li>
					</ul>
				</nav>
			</div>
		</div>
		<!-- END LEFT SIDEBAR -->
		<!-- MAIN -->
		<div class="main">
			<!-- MAIN CONTENT -->
			<div class="main-content">
				<div class="container-fluid">
					<ul class="breadcrumb">
						<li><a href="#"><i class="fa fa-home"></i> Home</a></li>
						<li><a href="#"></i>Data Panti Asuhan</a></li>
						<li class="active">Tambah Panti</li>
					</ul>
					<h1 class="page-title">Tambah Panti</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- BLOG FORM -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Tambah Data Panti Asuhan</h3>
								</div>
								<div class="panel-body">
									<form action="tambahDataPanti.php" method="post">
										<div class="form-group">
											<label for="contact-name" class="control-label">Nama Panti Asuhan</label>
											<input name="nama_panti_asuhan" type="text" class="form-control" id="contact-name" placeholder="Nama Panti Asuhan">
										</div>
										<div class="form-group">
											<label for="contact-name" class="control-label">Alamat</label>
											<input name="alamat" type="text" class="form-control" id="contact-name" placeholder="ex. Jl. xxxxx">
										</div>
										<div class="form-group">
											<label  class="control-label">Kecamatan</label>
											<select name="kecamatan" class="form-control" id="exampleFormControlSelect1">
												<option class="active">--Pilih Salah Satu--</option>
												<option value="Kecamatan A">Kecamatan A</option>
												<option value="Kecamatan B">Kecamatan B</option>
											</select>
										</div>
										<div class="form-group">
											<label  class="control-label">Kelurahan</label>
											<select name="kelurahan" class="form-control" id="exampleFormControlSelect1">
												<option class="active">--Pilih Salah Satu--</option>
												<option value="Kelurahan A">Kelurahan A</option>
												<option value="Kelurahan B">Kelurahan B</option>
											</select>
										</div>
										<div class="form-group">
											<label for="contact-name" class="control-label">Jumlah Anak Asuh</label>
											<input name="jumlah_anak_asuh" type="text" class="form-control" id="contact-name" placeholder="contoh: 100">
										</div>
										<div class="form-group">
											<label for="contact-name" class="control-label">Nama Pimpinan</label>
											<input name="nama_pimpinan" type="text" class="form-control" id="contact-name" placeholder="Nama Pimpinan">
										</div>
										<div class="form-group">
											<label  class="control-label">Status Kepemilikan</label>
											<select name="status_kepemilikan" class="form-control" id="exampleFormControlSelect1">
												<option class="active">--Pilih Salah Satu--</option>
												<option value="Milik Organisasi">Milik Organisasi</option>
												<option value="Milik Yayasan">Milik Yayasan</option>
												<option value="Milik Individu">Milik Individu</option>
											</select>
										</div>
										<div class="form-group">
											<label for="contact-name" class="control-label">No. Telepon/HP</label>
											<input name="telepon" type="text" class="form-control" id="contact-name" placeholder="ex. 08xxxxxxxx">
										</div>
										<button name="submit" type="submit" class="post btn btn-primary"><i class="fa fa-save"></i>SIMPAN</button>
									</form>
								</div>
							</div>
							<!-- END BLOG FORM -->
						</div>
					</div>
				</div>
			</div>
			<!-- END MAIN CONTENT -->
		</div>
		<!-- END MAIN -->
		<div class="clearfix"></div>

	</div>
	<!-- END WRAPPER -->
	<!-- Javascript -->
	<script src="assets/vendor/jquery/jquery.min.js"></script>
	<script src="assets/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="assets/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
	<script src="assets/scripts/klorofilpro-common.js"></script>
</body>

</html>
