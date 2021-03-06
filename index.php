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
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
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
							<a href="index.php" data-toggle="collapse" class="active"><i class="lnr lnr-home"></i> <span>Dashboards</span></a>
						</li>
						<li>
							<a href="#subBlog" data-toggle="collapse" class="collapsed"><i class="lnr lnr-layers"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subBlog" class="collapse ">
								<ul class="nav">
									<li><a href="data-blog.php">Data Blog</a></li>
									<li><a href="tambah-blog.php">Tambah Blog</a></li>
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
						<li class="active">Dashboards</li>
					</ul>
					<h1 class="page-title">Dashboard</h1>
					<div class="row">
						<div class="col-md-12">
							<div class="">
								<div class="alert alert-info alert-dismissible" role="alert">
									Selamat datang, <b>Superadmin INFERNITY</b>!<br>
									<b>Kata sandi yang anda gunakan</b> adalah <b>kata sandi awal</b> dan <b>perlu diubah terlebih dahulu</b> untuk <b>kenyamanan dan keamanan</b> akun yang anda gunakan. Jika anda ingin mengubah kata sandi silahkan klik <a href="" data-toggle="modal" data-target="#ganti-pass"><i>Ganti Kata Sandi</i></a>.
								</div>
								<!-- POPUP GANTI PASSWORD -->
								<div class="modal fade" id="ganti-pass" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<button type="button" class="close-button" data-dismiss="modal">
												<i class="fa fa-times"></i>
											</button>
											<div class="modal-header">
												<h4 class="modal-title" id="exampleModalLabel">
													<i class="fa fa-lock"></i> Ganti Password
												</h4>
											</div>
											<div class="modal-body">
												<?php $username = $_SESSION['username']; ?>
												<form action="ganti_password.php?id=<?php echo $username; ?>" method="post">
													<div class="form-group">
														<label  class="form-control-label">
															Password Lama
														</label>
														<input name="password" type="password" class="form-control" id="">
													</div>
													<div class="form-group">
														<label class="form-control-label">
															Password Baru
														</label>
														<input name="password_baru" type="password" class="form-control" id="">
													</div>
													<div class="form-group">
														<label class="form-control-label">
															Konfirmasi Password
														</label>
														<input name="konfirmasi_password_baru" type="password" class="form-control" id="">
													</div>
													<div class="modal-footer">
														<button name="submit" type="submit" class="btn btn-primary">
															Simpan
														</button>
													</div>
												</form>
											</div>
										</div>
									</div>
								</div>
								<!-- END POPUP GANTI PASSWORD -->
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<!-- WEEKLY VISITS -->
							<div class="panel panel-solid-blue">
								<div class="panel-heading">
									<h3 class="panel-title">Weekly Visits</h3>
								</div>
								<div class="panel-body no-padding">
									<div class="panel-content-wrapper">
										<div style="height: 250px;" id="visit-chart"></div>
									</div>
									<div class="padding-25">
										<div class="row">
											<div class="col-sm-6">
												<div id="tour-visits" class="visits-metric text-center">
													<span class="title">Visits</span>
													<span class="value">13,754</span>
													<span class="change text-success">37,15%</span>
												</div>
											</div>
											<div class="col-sm-6">
												<div class="visits-metric text-center">
													<span class="title">Page Views</span>
													<span class="value">23,473</span>
													<span class="change text-success">12,35%</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<!-- END WEEKLY VISITS -->
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6">
									<div class="widget widget-mini-bar">
										<span style="font-size: 14px;">
					                 	<i class="fa fa-home text-primary mb-2 fa-2x"></i><br>
					                  	<h4>Jumlah Panti Asuhan</h4>
					                	</span>
					                <hr width="80%">
													<?php
													include("koneksi.php");
													$query = "SELECT * FROM data_panti";
													$hasil = mysqli_query($link, $query);

													 ?>
					                <h2 class="text-primary mb-2 fa-2x"><?php echo mysqli_num_rows($hasil); ?></h2>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget widget-mini-bar">
										<span style="font-size: 14px;">
					                 	<i class="fa fa-child text-primary mb-2 fa-2x"></i><br>
					                  	<h4>Jumlah Anak Panti</h4>
					                	</span>
					                <hr width="80%">
													<?php
													$jumlah = 0;
													while($data = mysqli_fetch_assoc($hasil)){
														$jumlah += $data['jumlah_anak'];
													}
													 ?>
					                <h2 class="text-primary mb-2 fa-2x"><?php echo $jumlah; ?></h2>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="widget widget-mini-bar">
										<span style="font-size: 14px;">
					                 	<i class="fa fa-users text-primary mb-2 fa-2x"></i><br>
					                  	<h4>Jumlah Donatur</h4>
					                	</span>
					                <hr width="80%">
					                <h2 class="text-primary mb-2 fa-2x">104</h2>
									</div>
								</div>
								<div class="col-md-6">
									<div class="widget widget-mini-bar">
										<span style="font-size: 14px;">
					                 	<i class="fa fa-money text-primary mb-2 fa-2x"></i><br>
					                  	<h4>Total Donasi</h4>
					                	</span>
					                <hr width="80%">
					                <h2 class="text-primary mb-2 fa-2x">102.100.500</h2>
									</div>
								</div>
							</div>
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
	<script src="assets/vendor/Flot/jquery.flot.js"></script>
	<script src="assets/vendor/Flot/jquery.flot.resize.js"></script>
	<script src="assets/vendor/Flot/jquery.flot.time.js"></script>
	<script src="assets/vendor/flot.tooltip/jquery.flot.tooltip.js"></script>
	<script src="assets/scripts/klorofilpro-common.js"></script>

	<script>
	$(function() {

		// visit chart
		var plot, visit;

		visit = [
			[gt(2013, 1, 1), 200],
			[gt(2013, 2, 1), 300],
			[gt(2013, 3, 1), 360],
			[gt(2013, 4, 1), 340],
			[gt(2013, 5, 1), 440],
			[gt(2013, 6, 1), 600],
			[gt(2013, 7, 1), 1050]
		];

		plot = $.plot($('#visit-chart'), [{
				data: visit,
				label: "Visits"
			}],

			{
				series: {
					lines: {
						show: true,
						lineWidth: 2,
						fill: false
					},
					points: {
						show: true,
						lineWidth: 3,
						fill: true,
						fillColor: "#fff"
					},
					shadowSize: 0
				},
				grid: {
					hoverable: true,
					clickable: true,
					borderWidth: 0,
					tickColor: "#fff",

				},
				colors: ["#fff"],
				xaxis: {
					mode: "time",
					timezone: "browser",
					minTickSize: [1, "day"],
					timeformat: "%a",
					font: {
						color: "#fff"
					},
					tickColor: "transparent",
					autoscaleMargin: 0.02
				},
				yaxis: {
					font: {
						color: "#fff"
					},
					tickColor: "transparent",
					ticks: 8,
				},
				legend: {
					show: false
				},
				tooltip: {
					show: true,
					cssClass: 'flotTip-blue',
					content: '%s: %y'
				}
			}
		);

		// get day function
		function gt(y, m, d) {
			return new Date(y, m - 1, d).getTime();
		}
	});
	</script>
</body>

</html>
