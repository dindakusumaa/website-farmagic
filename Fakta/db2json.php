<?php
include "connect.php";

$x1 = array(
  "caption"=>"Data Fakta Dalam Grafik",
  "subCaption"=>"Farmmagic",
  "xaxisName"=>"Kategori",
  "yAxisName"=>"Jumlah Fakta",
  "theme"=>"fint");

$x2 = array();
$hsl = mysqli_query($conn,"SELECT
nama_kategori, COUNT(*) as jumlah FROM fakta join kfakta on kfakta.id_kategori = fakta.id_kategori GROUP BY nama_kategori;");

while($row = mysqli_fetch_assoc($hsl)){
  $datum = array("label"=>$row['nama_kategori'],"value"=>$row['jumlah']);
  array_push($x2,$datum);
} 

$x = array(
  "chart"=>$x1,
  "data"=>$x2
);

$y = json_encode($x);
echo $y;
?>