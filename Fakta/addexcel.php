<?php
include 'connect.php';
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;

$reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();

$spreadsheet = $reader->load("import.xlsx");

$data=$spreadsheet->getSheet(0)->toArray();

#print_r($data);

#$kon = mysqli_connect("localhost","root","","fakta_menarik");

$N = count($data);
#print($N);

for($i=2; $i<$N; $i++){
    #echo $data[$i][0];

    $sql = "INSERT INTO `fakta` (`id_fakta`, `judul`, `gambar`, `isi`, `id_kategori`) 
    VALUES ('".$data[$i][0]."', '".$data[$i][1]."', '".$data[$i][2]."', '".$data[$i][3]."', '".$data[$i][4]."')";

    mysqli_query($conn, $sql);
}

header('Location: index.php');
?>