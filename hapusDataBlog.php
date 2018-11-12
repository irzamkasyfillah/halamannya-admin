<?php
  include("koneksi.php");
  $id = $_GET['id'];
  $query = "DELETE FROM data_blog WHERE id='$id'";
  mysqli_query($link, $query);
  header("Location:data-blog.php");
 ?>
