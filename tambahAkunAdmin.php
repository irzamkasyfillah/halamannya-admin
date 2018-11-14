<?php
  if (isset($_POST['submit'])) {
    include("koneksi.php");

    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $konfirmasi_pass = $_POST['konfirmasi_password'];

    $query = "INSERT INTO akun_admin (nama, username, email, password)
    VALUES ('$nama', '$username', '$email', '$password')";

    if (mysqli_query($link, $query)) {
      echo "<script>alert('Berhasil tambah akun admin');</script>";
      header("Location:login-admin.php");
    }
  }
 ?>
