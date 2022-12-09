<?php
  $host = "localhost";
  $user = "farmagii_root";
  $pass = "farmagic_";
  $name = "farmagii_db";

  $koneksi = mysqli_connect($host,$user,$pass) or die("koneksi gagal");
  mysqli_select_db($koneksi,$name) or die("no one");
 ?>
