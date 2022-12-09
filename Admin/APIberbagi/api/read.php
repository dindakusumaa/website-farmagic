<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
include_once '../database.php';
include_once '../employees.php';
$database = new Database();

$db = $database->getConnection();
$items = new Cerita($db);
$records = $items->getCerita();
$itemCount = $records->num_rows;
echo json_encode($itemCount);
if($itemCount > 0){
$ceritaArr = array();
$ceritaArr["body"] = array();
$ceritaArr["itemCount"] = $itemCount;
while ($row = $records->fetch_assoc())
{
array_push($ceritaArr["body"], $row);
}
echo json_encode($ceritaArr);
}
else{
http_response_code(404);
echo json_encode(
array("message" => "No record found.")
);
}
?>