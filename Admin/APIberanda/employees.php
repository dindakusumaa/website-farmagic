<?php
class Slide{
// dbection
private $db;
// Table
private $db_table = "slide";
// Columns
public $id;
public $judul;
public $deskripsi;
public $gambar;


// Db dbection
public function __construct($db){
$this->db = $db;
}

// GET ALL
public function getSlide(){
$sqlQuery = "SELECT id, judul, deskripsi, gambar FROM " . $this->db_table . "";
$this->result = $this->db->query($sqlQuery);
return $this->result;
}

// CREATE
public function createSlide(){
// sanitize
$this->judul=htmlspecialchars(strip_tags($this->judul));
$this->deskripsi=htmlspecialchars(strip_tags($this->deskripsi));
$this->gambar=htmlspecialchars(strip_tags($this->gambar));
$sqlQuery = "INSERT INTO
". $this->db_table ." SET judul = '".$this->judul."',
deskripsi = '".$this->deskripsi."',
gambar = '".$this->gambar."'";
$this->db->query($sqlQuery);
if($this->db->affected_rows > 0){
return true;
}
return false;
}

// UPDATE
public function getSingleSlide(){
$sqlQuery = "SELECT id, judul, deskripsi, gambar FROM
". $this->db_table ." WHERE id = ".$this->id;
$record = $this->db->query($sqlQuery);
$dataRow=$record->fetch_assoc();
$this->judul = $dataRow['judul'];
$this->deskripsi = $dataRow['deskripsi'];
$this->gambar = $dataRow['gambar'];
}

// UPDATE
public function updateSlide(){
$this->judul=htmlspecialchars(strip_tags($this->judul));
$this->deskripsi=htmlspecialchars(strip_tags($this->deskripsi));
$this->gambar=htmlspecialchars(strip_tags($this->gambar));
$this->id=htmlspecialchars(strip_tags($this->id));

$sqlQuery = "UPDATE ". $this->db_table ." SET judul = '".$this->judul."',
deskripsi = '".$this->deskripsi."',
gambar = '".$this->gambar."'
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