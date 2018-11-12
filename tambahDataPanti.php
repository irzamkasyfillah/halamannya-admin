<?php
  if (isset($_POST['submit'])){
    include("koneksi.php");
    $query = "SELECT * FROM data_panti";
    $hasil = mysqli_query($link, $query);

    $namaPanti = $_POST['nama_panti_asuhan'];
    $alamat = $_POST['alamat'];
    $kecamatan = $_POST['kecamatan'];
    $kelurahan = $_POST['kelurahan'];
    $jumlahAnak = $_POST['jumlah_anak_asuh'];
    $namaPimpinan = $_POST['nama_pimpinan'];
    $statusKepemilikan = $_POST['status_kepemilikan'];
    $telepon = $_POST['telepon'];

    // if (mysqli_num_rows($hasil)==0) {
    //   $query = "INSERT INTO data_panti (id, nama_panti, alamat, kecamatan, kelurahan, jumlah_anak, nama_pimpinan, status_kepemilikan, telepon)
    //   VALUES (1,'$namaPanti', '$alamat', '$kecamatan', '$kelurahan' , $jumlahAnak, '$namaPimpinan', '$statusKepemilikan', '$telepon')";
    //   if (mysqli_query($link, $query)) {
    //     echo $last_id = mysqli_insert_id($link);
    //     echo "data berhasil dimasukkan";
    //   } else {
    //     echo "gagal";
    //   }
    //   header("Location:data-panti.php");
    // } else if (mysqli_num_rows($hasil)>1){
      $query = "INSERT INTO data_panti (nama_panti, alamat, kecamatan, kelurahan, jumlah_anak, nama_pimpinan, status_kepemilikan, telepon)
      VALUES ('$namaPanti', '$alamat', '$kecamatan', '$kelurahan' , $jumlahAnak, '$namaPimpinan', '$statusKepemilikan', '$telepon')";
      if (mysqli_query($link, $query)) {
        echo "data berhasil dimasukkan";
      } else {
        echo "gagal";
      }
      header("Location:data-panti.php");
    // }
  }
?>
