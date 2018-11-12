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
							<a href="#subBlog" data-toggle="collapse" class="active" aria-expanded="true"><i class="lnr lnr-layers"></i> <span>Blog</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
							<div id="subBlog" class="collapse in">
								<ul class="nav">
									<li><a href="data-blog.php" class="active">Data Blog</a></li>
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
						<li><a href="#"></i>Blog</a></li>
						<li class="active">Data Blog</li>
					</ul>
					<h1 class="page-title">Data Blog</h1>
					<div class="row">
						<div class="col-md-12">
							<!-- BORDERED TABLE -->
							<div class="panel">
								<div class="panel-heading">
									<h3 class="panel-title">Daftar Blog</h3>
									<form class="navbar-form navbar-right search-form">
										<input type="text" value="" class="form-control" placeholder="Search Blog...">
										<button type="button" class="btn btn-default"><i class="fa fa-search"></i></button>
									</form>
								</div>
								<div class="panel-body">
									<table class="table table-bordered table-striped">
										<thead>
											<tr>
												<th><center>ID</center></th>
												<th><center>Judul</center></th>
												<th><center>Penulis</center></th>
												<th><center>Tanggal</center></th>
												<th><center>Gambar</center></th>
												<th><center>Isi</center></th>
												<th><center>Kategori</center></th>
												<th><center>Action</center></th>
											</tr>
										</thead>
										<tbody>
											<?php
											include("koneksi.php");
											$query = "SELECT * FROM data_blog";
											$hasil = mysqli_query($link, $query);
											if (mysqli_num_rows($hasil)>0) {
												$i = 1;
												while	($data = mysqli_fetch_assoc($hasil)) {
													echo "<tr>";
													echo "<td>$i</td>";
													echo "<td>" . $data['judul'] . "</td>";
													echo "<td>" . $data['penulis'] . "</td>";
													echo "<td>" . $data['tanggal'] . "</td>";
													echo "<td><img src='image/" . $data['gambar'] . "' align='center' width='200px' height='200px'></td>";
													echo "<td>" . $data['isi'] . "</td>" ;
													echo "<td>" . $data['kategori'] . "</td>";
													echo "<td>";
													?>
															<a href="" class="btn btn-primary"><i class="fa fa-eye"></i>Lihat&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>
															<br>
															<br>
															<a href="" type="button" data-toggle="modal" data-target="#sunting<?php echo $data['id']; ?>" class="btn btn-warning"><i class="fa fa-pencil"></i>Sunting</a>
															<br>
															<br>
															<a href="hapusDataBlog.php?id=<?php echo $data['id']; ?>" class="btn btn-danger"><i class="fa fa-times"></i>Hapus&nbsp;&nbsp;&nbsp;</a>
														</td>
													</tr>
													<!-- POPUP SUNTING -->
													<div class="modal fade" id="sunting<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
																	<form action="" method="post">
																		<!-- <div class="form-group">
																			<label  class="form-control-label">
																				ID
																			</label>
																			<input type="number" class="form-control" id="">
																		</div> -->
																		<div class="form-group">
																			<label  class="form-control-label">
																				Judul
																			</label>
																			<input name="judul_baru" type="text" class="form-control" id="">
																		</div>
																		<div class="form-group">
																			<label  class="form-control-label">
																				Penulis
																			</label>
																			<input name="penulis_baru" type="text" class="form-control" id="">
																		</div>
																		<div class="form-group">
																			<label  class="form-control-label">
																				Tanggal
																			</label>
																			<input name="tanggal_baru" type="date" class="form-control" id="">
																		</div>
																		<div class="custom-file">
																				<label for="exampleInputFile">Gambar</label>
																				<input name="gambar_baru" type="file" class="customFile" class="custom-file-input">
																				<p class="help-block">Pilih gambar untuk thumbnail blog Anda</p>
																		</div>
																		<div class="form-group">
																			<label for="contact-name" class="control-label">Isi</label>
																			<textarea name="isi_baru" class="form-control" style="height: 100px;"></textarea>
																		</div>
																		<div class="form-group">
																			<label  class="form-control-label">
																				Kategori
																			</label>
																			<select name="kategori_baru"class="form-control" name="jual" id="exampleFormControlSelect1">
																				<option class="active">--Pilih Salah Satu--</option>
																				<option value="Berita">Berita</option>
																				<option value="Edukasi">Edukasi</option>
																			</select>
																		</div>
																		<div class="modal-footer">
																			<button name="submit_baru" type="button" class="btn btn-primary">
																				Save
																			</button>
																		</div>
																	</form>
																</div>
															</div>
														</div>
													</div>
													<!-- END POPUP SUNTING -->
												<?php
													$i++;}
												}
												?>
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
