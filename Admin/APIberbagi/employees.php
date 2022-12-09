<?php
class Cerita{
// dbection
private $db;
// Table
private $db_table = "cerita";
// Columns
public $id;
public $name;
public $email;
public $subjectt;
public $message;


// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function getCerita(){
$sqlQuery = "SELECT id, name, email, subjectt, message FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}

// CREATE
public function createCerita(){
// sanitize
$this->name=htmlspecialchars(strip_tags($this->name));
$this->email=htmlspecialchars(strip_tags($this->email));
$this->subjectt=htmlspecialchars(strip_tags($this->subjectt));
$this->message=htmlspecialchars(strip_tags($this->message));
$sqlQuery = "INSERT INTO
". $this->db_table ." SET name = '".$this->name."',
email = '".$this->email."',
subjectt = '".$this->subjectt."',message = '".$this->message."'";
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// UPDATE
public function getSingleCerita(){
$sqlQuery = "SELECT id, name, email, subjectt, message FROM
". $this->db_table ." WHERE id = ".$this->id;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->name = $dataRow['name'];
$this->email = $dataRow['email'];
$this->subjectt = $dataRow['subjectt'];
$this->message = $dataRow['message'];
}

// UPDATE
public function updateCerita(){
$this->name=htmlspecialchars(strip_tags($this->name));
$this->email=htmlspecialchars(strip_tags($this->email));
$this->subjectt=htmlspecialchars(strip_tags($this->subjectt));
$this->message=htmlspecialchars(strip_tags($this->message));
$this->id=htmlspecialchars(strip_tags($this->id));

$sqlQuery = "UPDATE ". $this->db_table ." SET name = '".$this->name."',
email = '".$this->email."',
subjectt = '".$this->subjectt."',message = '".$this->message."'
WHERE id = ".$this->id;

$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// DELETE
function deleteCerita(){
$sqlQuery = "DELETE FROM " . $this->db_table . " WHERE id = ".$this->id;
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}
}
?>