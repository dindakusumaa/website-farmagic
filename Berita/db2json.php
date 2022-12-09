<?php
include "connect.php";
/*
{
    "chart":{
        "caption":"Revenue Bulanan",
        "subCaption":"INF Mart",
        "xaxisName":"Bulan",
        "yAxisName":"Revenue(ribu Rp.)",
        "theme":"fint"
    },
    "data":[
        {"label":"Jan","value":"1000"},
        {"label":"Feb","value":"2000"},
        {"label":"Mar","value":"1500"},
        {"label":"Apr","value":"2500"},
        {"label":"May","value":"4500"}
    ]
}*/

$x1 = array(
    "caption"=>"Data Berita Dalam Grafik",
    "subCaption"=>"Farmagic",
    "xaxisName"=>"Kategori",
    "yAxisName"=>"Jumlah Berita",
    "theme"=>"fint");

  $x2 = array();
  $hsl = mysqli_query($conn,"SELECT
  nama_kategori, 
  COUNT(*) as jumlah
FROM
  berita join kberita on kberita.id_kategori = berita.id_kategori
GROUP BY nama_kategori;");

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