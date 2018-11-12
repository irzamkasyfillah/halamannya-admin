 <?php
   if(isset($_POST['submit'])){
     include("koneksi.php");
     $id = $_GET['id'];

     $judul = $_POST['judul'];
     $penulis = $_POST['penulis'];
     $tanggal = $_POST['tanggal'];
     $isi = $_POST['isi'];
     $kategori = $_POST['kategori'];

       $nama_gambar = $_FILES['gambar_baru']['name'];
       $lokasi_gambar = $_FILES['gambar_baru']['tmp_name'];
       $format = $_FILES['gambar_baru']['type'];
       $size = $_FILES['gambar_baru']['size'];
       // if (isset($_POST['gambar_baru'])){
       if ($format == 'image/jpeg' || $format == 'image/png'){
         if ($size < 5000000) {
           move_uploaded_file($lokasi_gambar, 'image/' . $nama_gambar);
           $query = "UPDATE data_blog SET gambar='$nama_gambar' WHERE id='$id'";
           if (mysqli_query($link, $query)) {
             echo "<script>alert('Berhasil ganti gambar!');</script>";
             header("Location:data-blog.php");
           } else {
             echo "<script>alert('Gagal ganti gambar!');</script>";
           }
         } else {
           echo "<script>alert('ukuran gambar melebihi 5 Mb');</script>";
         }
       } else {
         echo "<script>alert('format yang anda masukkan salah');</script>";
       }
     // }
       $query = "UPDATE data_blog SET judul='$judul', penulis='$penulis', tanggal='$tanggal',
       isi='$isi', kategori='$kategori' WHERE id='$id'";

       if (mysqli_query($link, $query)){
         echo"<script>alert('Blog Berhasil disunting!');</script>";
         header("Location:data-blog.php");
       } else {
         echo "<script>alert('Blog gagal disunting !');</script>";
       }
     }
  ?>
