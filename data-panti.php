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
									<div class="table-responsive">
										<table class="table table-bordered table-striped">
											<thead>
												<tr>
													<th><center>No.</center></th>
													<th><center>Nama Panti Asuhan</center></th>
													<th><center>Alamat</center></th>
													<th><center>Kecamatan</center></th>
													<th><center>Kelurahan</center></th>
													<th><center>Jumlah Asuhan</center></th>
													<th><center>Nama Pimpinan</center></th>
													<th><center>Status Kepemilikian</center></th>
													<th><center>Telepon</center></th>
													<th><center>Donasi Diterima</center></th>
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
															echo "<td>Rp.0</td>";
													?>
															<td>
																<div class="d-flex justify-content-center">
																<a href="" id="action" class="btn btn-warning" data-toggle="modal" data-target="#sunting<?php echo $data['id']; ?>" ><i class="fa fa-pencil"></i></a>
																<a href="" id="action" class="btn btn-danger" data-toggle="modal" data-target="#hapus<?php echo $data['id']; ?>"><i class="fa fa-trash"></i></a>
																</div>
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
																			<i class="fa fa-pencil"></i> Sunting Data Panti Asuhan
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-sunting">
																		<form action="updateDataPanti.php?id=<?php echo $data['id'];?>" method="post">
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Nama Panti Asuhan</label>
																				<input name="nama_panti_asuhan" value="<?php echo $data['nama_panti']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Panti Asuhan">
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Alamat</label>
																				<input name="alamat" value="<?php echo $data['alamat']; ?>" type="text" class="form-control" id="contact-name" placeholder="ex. Jl. xxxxx">
																			</div>
																			<div class="form-group">
																				<label  class="control-label">Kecamatan</label>
																				<select name="kecamatan" class="form-control" id="exampleFormControlSelect1">
																					<option class="active" value="<?php echo $data['kecamatan']; ?>"><?php echo $data['kecamatan']; ?></option>
																					<option value="Kecamatan A" >Kecamatan A</option>
																					<option value="Kecamatan B" >Kecamatan B</option>
																				</select>
																			</div>
																			<div class="form-group">
																				<label  class="control-label">Kelurahan</label>
																				<select name="kelurahan" class="form-control" id="exampleFormControlSelect1">
																					<option class="active" value="<?php echo $data['kelurahan']; ?>"><?php echo $data['kecamatan']?></option>
																					<option value="Kelurahan B" >Kelurahan A</option>
																					<option value="Kelurahan B" >Kelurahan B</option>
																				</select>
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Jumlah Anak Asuh</label>
																				<input name="jumlah_anak_asuh" value="<?php echo $data['jumlah_anak']; ?>" type="text" class="form-control" id="contact-name" placeholder="contoh: 100">
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">Nama Pimpinan</label>
																				<input name="nama_pimpinan" value="<?php echo $data['nama_pimpinan']; ?>" type="text" class="form-control" id="contact-name" placeholder="Nama Pimpinan">
																			</div>
																			<div class="form-group">
																				<label  class="control-label">Status Kepemilikan</label>
																				<select name="status_kepemilikan" class="form-control" id="exampleFormControlSelect1">
																					<option class="active" value="<?php echo $data['status_kepemilikan']; ?>"><?php echo $data['status_kepemilikan']; ?></option>
																					<option value="Milik Organisasi" >Milik Organisasi</option>
																					<option value="Milik Yayasan" >Milik Yayasan</option>
																					<option value="Milik Individu" >Milik Individu</option>
																				</select>
																			</div>
																			<div class="form-group">
																				<label for="contact-name" class="control-label">No. Telepon/HP</label>
																				<input name="telepon" value="<?php echo $data['telepon']; ?>" type="text" class="form-control" id="contact-name" placeholder="ex. 08xxxxxxxx">
																			</div>
																			<div class="modal-footer">
																				<!-- data-dismiss="modal" data-toggle="modal" data-target="#berhasil-sunting" -->
																				<button name="submit" type="submit" class="btn btn-primary">
																					Simpan
																				</button>
																			</div>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<!-- END POPUP SUNTING -->
														<!-- POPUP BERHASIL SUNTING -->
														<div class="modal fade" id="berhasil-sunting" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document" id="modal-info">
																<div class="modal-content">
																	<button type="button" class="close-button" data-dismiss="modal">
																		<i class="fa fa-times"></i>
																	</button>
																	<div class="modal-header">
																		<h4 class="modal-title" id="exampleModalLabel">
																			<i class="fa fa-pencil"></i> Sunting Data Panti Asuhan
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-info">
																		<div class="alert alert-info alert-dismissible" role="alert">
																			Data panti asuhan berhasil disunting
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- END POPUP BERHASIL SUNTING -->
														<!-- POPUP HAPUS -->
														<div class="modal fade" id="hapus<?php echo $data['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document" id="modal-small">
																<div class="modal-content">
																	<button type="button" class="close-button" data-dismiss="modal">
																		<i class="fa fa-times"></i>
																	</button>
																	<div class="modal-header">
																		<h4 class="modal-title" id="exampleModalLabel">
																			<i class="fa fa-trash"></i> Hapus Data Panti Asuhan
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-hapus">
																		<p class="text-center">Yakin ingin menghapus data panti asuhan?</p>
																		<div class="text-center">
																			<!-- data-dismiss="modal" data-toggle="modal" data-target="#berhasil-hapus" -->
																			<a href="hapusDataPanti.php?id=<?php echo $data['id'] ?>" type="button" class="btn btn-primary" style="margin-right: 40px" >Ya</a>
																			<button type="button" class="btn btn-danger" data-dismiss="modal">Tidak</button>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- END POPUP HAPUS -->
														<!-- POPUP BERHASIL HAPUS -->
														<div class="modal fade" id="berhasil-hapus" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
															<div class="modal-dialog modal-lg" role="document" id="modal-info">
																<div class="modal-content">
																	<button type="button" class="close-button" data-dismiss="modal">
																		<i class="fa fa-times"></i>
																	</button>
																	<div class="modal-header">
																		<h4 class="modal-title" id="exampleModalLabel">
																			<i class="fa fa-trash"></i> Hapus Data Panti Asuhan
																		</h4>
																	</div>
																	<div class="modal-body" id="popup-info">
																		<div class="alert alert-info alert-dismissible" role="alert">
																			Data panti asuhan berhasil dihapus
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!-- END POPUP BERHASIL HAPUS -->
														<?php
														}
													} ?>
											</tbody>
										</table>
									</div>
									<div class="text-center">
										<ul class="pagination">
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
