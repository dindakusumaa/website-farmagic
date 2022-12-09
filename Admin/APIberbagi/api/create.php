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
$item = new Cerita($db);


$item->name = $_GET['name'];
$item->email = $_GET['email'];
$item->subjectt = $_GET['subjectt'];
$item->message = $_GET['message'];
if($item->createCerita()){
echo 'Cerita created successfully.';
} else{
echo 'Cerita could not be created.';
}
?>