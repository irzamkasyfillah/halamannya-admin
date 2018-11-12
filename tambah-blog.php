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
    <link href="assets/vendor/summernote/summernote.css" rel="stylesheet">
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
	<!-- ICONS -->
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="assets/img/favicon.png">
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
				<form class="navbar-form navbar-left search-form">
					<input type="text" value="" class="form-control" placeholder="Search dashboard...">
					<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
				</form>
				<div id="navbar-menu">
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o"></i> <span>Admin</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
							<ul class="dropdown-menu">
								<li><a href="masuk.html"><i class="lnr lnr-exit"></i> <span>Logout</span></a></li>
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
							<a href="#subBlog" data-toggle="collapse" class="active" aria-expanded="true"><i class="lnr lnr-layers"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subBlog" class="collapse in">
								<ul class="nav">
									<li><a href="data-blog.php" >Data Blog</a></li>
									<li><a href="tambah-blog.php" class="active">Tambah Blog</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPanti" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Data Panti Asuhan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPanti" class="collapse ">
								<ul class="nav">
									<li><a href="data-panti.php">Data Panti</a></li>
									<li><a href="tambah-panti.php">Tambah Panti</a></li>
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
						<li><a href="#"></i>Blog</a></li>
						<li class="active">Tambah Blog</li>
					</ul>
					<h1 class="page-title">Tambah Blog</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- BLOG FORM -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Form Penulisan Blog</h3>
								</div>
								<div class="panel-body">
									<form action="tambahDataBlog.php" method="post" enctype="multipart/form-data">
										<div class="form-group">
											<label for="contact-name" class="control-label">Judul</label>
											<input name="judul" type="text" class="form-control" id="contact-name" placeholder="Judul Blog">
										</div>
										<div class="form-group">
											<label for="contact-name" class="control-label">Penulis</label>
											<input name="penulis" type="text" class="form-control" id="contact-name" placeholder="Penulis">
										</div>
										<div class="input-group">
											<label for="contact-date" class="control-label">Tanggal Penulisan</label>
											<input name="tanggal" type="date" class="form-control" id="contact-date" value="">
										</div>
										<br>
										<div class="form-group">
											<label for="contact-name" class="control-label">Isi</label>
											<textarea name="isi" class="summernote" style="height: 100px;"></textarea>
										</div>
										<div class="custom-file">
										    <label for="exampleInputFile">Gambar</label>
										    <input name="gambar" type="file" class="customFile" class="custom-file-input">
										    <p class="help-block">Pilih gambar untuk thumbnail blog Anda</p>
										</div>
										<div class="form-group">
											<label  class="control-label">Kategori</label>
											<select name="kategori" class="form-control" name="jual" id="exampleFormControlSelect1">
												<option class="active">--Pilih Salah Satu--</option>
												<option value="Berita" >Berita</option>
												<option value="Edukasi" >Edukasi</option>
											</select>
										</div>
										<button name="submit" type="submit" class="post btn btn-primary"><i class="fa fa-share-square-o"></i>POST</button>
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
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
    <!-- summernote -->
    <script src="assets/vendor/summernote/summernote.js"></script>
    <script>
      $('.summernote').summernote({
        height: 200,
        focus: true,
        onpaste: function() {
          alert('You have pasted something to the editor');
        }
      });
    </script>
</body>

</html>
