<?php
include "connect.php";
require 'vendor/autoload.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet; 
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

// Creates New Spreadsheet 
$spreadsheet = new Spreadsheet(); 
  
// Retrieve the current active worksheet 
$sheet = $spreadsheet->getActiveSheet();

$column_header=["id_fakta","judul","gambar","isi","id_kategori"];
$j=1;
foreach($column_header as $x_value) {
    $sheet->setCellValueByColumnAndRow($j,1,$x_value);
    $j=$j+1;
}

// Ambil Data dari DB
$kon = mysqli_connect("localhost","root","","fakta_menarik");
$sql = "SELECT * FROM fakta";
$data = mysqli_query($kon, $sql);

$i = 2; //baris
while($rcrd = mysqli_fetch_row($data)){
    //print_r($rcrd);
    $sheet->setCellValueByColumnAndRow(1,$i,$rcrd[0]);
    $sheet->setCellValueByColumnAndRow(2,$i,$rcrd[1]);
    $sheet->setCellValueByColumnAndRow(3,$i,$rcrd[2]);
    $sheet->setCellValueByColumnAndRow(4,$i,$rcrd[3]);
    $sheet->setCellValueByColumnAndRow(5,$i,$rcrd[4]);
    $i++;
}

// Write an .xlsx file  
$writer = new Xlsx($spreadsheet); 
  
// Save .xlsx file to the files directory 
$writer->save('ekpor_db.xlsx'); 

header('Location: index.php');
?>