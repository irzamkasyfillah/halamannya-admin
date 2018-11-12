<?php
  if (isset($_POST['submit'])) {
    include("koneksi.php");
    $query = "SELECT * FROM data_blog";
    $hasil = mysqli_query($link, $query);
    // $baris = mysqli_num_rows($hasil);

    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $tanggal = $_POST['tanggal'];
    $isi = $_POST['isi'];
    $kategori = $_POST['kategori'];

    $nama_gambar = $_FILES['gambar']['name'];
    $lokasi_gambar = $_FILES['gambar']['tmp_name'];
    $format = $_FILES['gambar']['type'];
    $size = $_FILES['gambar']['size'];

    if ($format == 'image/jpeg' || $format == 'image/png'){
      if ($size < 5000000) {
        move_uploaded_file($lokasi_gambar, 'image/' . $nama_gambar);
        $query = "INSERT INTO data_blog (judul,penulis,tanggal,gambar,isi,kategori)
        VALUES ('$judul', '$penulis', '$tanggal', '$nama_gambar' ,  '$isi', '$kategori')";

        if (mysqli_query($link, $query)){
          echo"<script>alert('Blog Berhasil diupload !');</script>";
          header("Location:data-blog.php");
        } else {
          echo "<script>alert('Blog gagal diupload !');</script>";
        }
      } else {
        echo "<script>alert('ukuran gambar melebihi 5 Mb');</script>";
      }
    } else {
      // echo "format yang anda masukkan salah";
      echo "<script>alert('format yang anda masukkan salah');</script>";
    }

    // $query = "INSERT INTO data_blog SET judul='$judul', penulis='$penulis',
    // tanggal=$tanggal, gambar=$gambar, isi='$isi', kategori='$kategori'";
  }
?>
