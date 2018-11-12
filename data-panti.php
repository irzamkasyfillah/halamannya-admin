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
							<a href="#subPanti" data-toggle="collapse" class="active"><i class="lnr lnr-database"></i> <span>Data Panti Asuhan</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subPanti" class="collapse in">
								<ul class="nav">
									<li><a href="data-panti.php" class="active">Data Panti</a></li>
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
						<li><a href="#"></i>Data Panti Asuhan</a></li>
						<li class="active">Data Panti</li>
					</ul>
					<h1 class="page-title">Data Panti Asuhan</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Data Panti Asuhan Makassar</h3>
									<form class="navbar-form navbar-right search-form">
										<input type="text" value="" class="form-control" placeholder="Cari Data Panti Asuhan...">
										<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<div class="panel-body">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th><center>No.</center></th>
												<th><center>Nama Panti Asuhan</center></th>
												<th><center>Alamat</center></th>
												<th><center>Kecamatan</center></th>
												<th><center>Kelurahan</center></th>
												<th><center>Jumlah Anak</center></th>
												<th><center>Nama Pimpinan</center></th>
												<th><center>Status Kepemilikian</center></th>
												<th><center>Telepon</center></th>
												<th><center>Action</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
													echo "<tr>";
													include("koneksi.php");
													$query = "SELECT * FROM data_panti";
												  $hasil = mysqli_query($link,$query);
													if (mysqli_num_rows($hasil)>0){
													for ($i=1; $i<mysqli_num_rows($hasil)+1; $i++) {
														$query = "SELECT * FROM data_panti WHERE id=$i";
														$data = mysqli_fetch_assoc($hasil);
														echo "<td>$i</td>";
														echo "<td>" . $data['nama_panti']. "</td>";
														echo "<td>" . $data['alamat']. "</td>";
														echo "<td>" . $data['kecamatan']. "</td>";
														echo "<td>" . $data['kelurahan']. "</td>";
														echo "<td>" . $data['jumlah_anak']. "</td>";
														echo "<td>" . $data['nama_pimpinan']. "</td>";
														echo "<td>" . $data['status_kepemilikan']. "</td>";
														echo "<td>" . $data['telepon']. "</td>";
												?>
														<td>
															<div class="d-flex justify-content-center">
															<a href="suntingDataPanti.php?id=<?php echo $data['id']; ?>" id="action" class="btn btn-warning" ><i class="fa fa-pencil"></i></a>
															<a href="hapusDataPanti.php?id=<?php echo $data['id'];?>" id="action" class="btn btn-danger"><i class="fa fa-trash"></i></a>
															</div>
														</td>
													</tr>
													<?php
													}
												} ?>
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
