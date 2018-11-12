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
							<a href="#subBlog" data-toggle="collapse" class="collapsed"><i class="lnr lnr-layers"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subBlog" class="collapse">
								<ul class="nav">
									<li><a href="data-blog.php">Data Blog</a></li>
									<li><a href="tambah-blog.php">Tambah Blog</a></li>
								</ul>
							</div>
						</li>
						<li>
							<a href="#subPanti" data-toggle="collapse" class="collapsed"><i class="lnr lnr-database"></i> <span>Data Panti Asuhan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPanti" class="collapse">
								<ul class="nav">
									<li><a href="data-panti.php">Data Panti</a></li>
									<li><a href="tambah-panti.php">Tambah Panti</a></li>
								</ul>
							</div>
						</li>
						<li><a href="data-donatur.php" class="active"><i class="lnr lnr-users"></i> <span>Data Donatur</span></a></li>
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
						<li class="active">Data Donatur</li>
					</ul>
					<h1 class="page-title">Data Donatur</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Donatur Panti Asuhan</h3>
									<form class="navbar-form navbar-right search-form">
										<input type="text" value="" class="form-control" placeholder="Cari Data Donatur...">
										<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<div class="panel-body">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th><center>No.</center></th>
												<th><center>Nama Donatur</center></th>
												<th><center>Nominal Donasi</center></th>
												<th><center>Panti Tujuan</center></th>
												<th><center>Tanggal Donasi</center></th>
												<th><center>Telepon</center></th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><center>1</center></td>
												<td>Donatur A</td>
												<td>Rp.xxxxx</td>
												<td>Panti Asuhan A</td>
												<td>dd/mm/yyyy</td>
												<td>081234567890</td>
											</tr>
											<tr>
												<td><center>1</center></td>
												<td>Donatur A</td>
												<td>Rp.xxxxx</td>
												<td>Panti Asuhan A</td>
												<td>dd/mm/yyyy</td>
												<td>081234567890</td>
											</tr>
											<tr>
												<td><center>1</center></td>
												<td>Donatur A</td>
												<td>Rp.xxxxx</td>
												<td>Panti Asuhan A</td>
												<td>dd/mm/yyyy</td>
												<td>081234567890</td>
											</tr>
										</tbody>
									</table>
									<ul class="pagination navbar-right">
										<li class="disabled"><a href="#"><i class="fa fa-angle-left"></i><span class="sr-only">Previous</span></a></li>
										<li class="active"><a href="#">1</a></li>
										<li><a href="#">2</a></li>
										<li><a href="#">3</a></li>
										<li><a href="#">4</a></li>
										<li><a href="#">5</a></li>
										<li><a href="#"><i class="fa fa-angle-right"></i><span class="sr-only">Next</span></a></li>
									</ul>
								</div>
							</div>
							<!-- END BORDERED TABLE -->
							<!-- POPUP SUNTING -->
							<div class="modal fade" id="sunting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog modal-lg" role="document">
									<div class="modal-content">
										<button type="button" class="close-button" data-dismiss="modal">
											<i class="fa fa-times"></i>
										</button>
										<div class="modal-header">
											<h4 class="modal-title" id="exampleModalLabel">
												<i class="fa fa-pencil"></i> Sunting Blog
											</h4>

										</div>
										<div class="modal-body">
											<form>
												<div class="form-group">
													<label  class="form-control-label">
														ID
													</label>
													<input type="number" class="form-control" id="">
												</div>
												<div class="form-group">
													<label  class="form-control-label">
														Judul
													</label>
													<input type="text" class="form-control" id="">
												</div>
												<div class="form-group">
													<label  class="form-control-label">
														Penulis
													</label>
													<input type="text" class="form-control" id="">
												</div>
												<div class="form-group">
													<label  class="form-control-label">
														Tanggal
													</label>
													<input type="date" class="form-control" id="">
												</div>
												<div class="custom-file">
												    <label for="exampleInputFile">Gambar</label>
												    <input type="file" class="customFile" class="custom-file-input">
									    			<p class="help-block">Pilih gambar untuk thumbnail blog Anda</p>
												</div>
												<div class="form-group">
													<label for="contact-name" class="control-label">Isi</label>
													<textarea class="form-control" style="height: 100px;"></textarea>
												</div>
												<div class="form-group">
													<label  class="form-control-label">
														Kategori
													</label>
													<select class="form-control" name="jual" id="exampleFormControlSelect1">
														<option class="active">--Pilih Salah Satu--</option>
														<option>Berita</option>
														<option>Edukasi</option>
													</select>
												</div>
											</form>
										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-primary">
												Save
											</button>
										</div>
									</div>
								</div>
							</div>
							<!-- END POPUP SUNTING -->
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
