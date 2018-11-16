<?php
  if (isset($_POST['submit'])) {
    include("koneksi.php");
    session_start();
    $id = $_GET['id'];

    $pass = $_POST['password'];
    $pass_baru = $_POST['password_baru'];
    $konfirmasi_pass_baru = $_POST['konfirmasi_password_baru'];
    $username = $_SESSION['username'];
    $pw = $_SESSION['password'];

    if ($pass == $pw) {
      $query = "UPDATE akun_admin SET password='$pass_baru' WHERE username='$id'";
      if (mysqli_query($link, $query)) {
        echo "<script>alert('Berhasil ganti password');</script>";
        $_SESSION['password'] = $pass_baru;
        header("Location:index.php");
      } else {
        echo "<script>alert('Gagal ganti password! Password lama tidak benar');</script>";
      }
    }
  }
 ?>
