<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
include_once '../database.php';
include_once '../employees.php';
$database = new Database();
$db = $database->getConnection();
$item = new Slide($db);


$item->judul = $_GET['judul'];
$item->deskripsi = $_GET['deskripsi'];
$item->gambar = $_GET['gambar'];
if($item->createSlide()){
echo 'Slide created successfully.';
} else{
echo 'Slide could not be created.';
}
?>