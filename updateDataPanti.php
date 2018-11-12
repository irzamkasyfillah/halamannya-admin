<?php
  if (isset($_POST['submit'])){
    include("koneksi.php");
    $id = $_GET['id'];
    $namaPanti = $_POST['nama_panti_asuhan'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $jumlahAnak = $_POST['jumlah_anak_asuh'];
    $namaPimpinan = $_POST['nama_pimpinan'];
    $statusKepemilikan = $_POST['status_kepemilikan'];
    $telepon = $_POST['telepon'];

    $query = "UPDATE data_panti SET nama_panti='$namaPanti', alamat='$alamat', kecamatan='$kecamatan',
    kelurahan='$kelurahan', jumlah_anak='$jumlahAnak', nama_pimpinan='$namaPimpinan',
    status_kepemilikan='$statusKepemilikan', telepon='$telepon' WHERE id=$id";
    if (mysqli_query($link, $query)) {
      echo "<script>alert('Data panti asuhan berhasil disunting');</script>";
      header("Location:data-panti.php");
    } else {
      echo "<script>alert('Data panti asuhan gagal disunting');</script>";
      header("Location:suntingDataPanti.php");
    }
  }
?>
