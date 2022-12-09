<?php include 'connect.php';

$id_berita = $_POST['id_berita'];
$judul = $_POST ['judul'];
$isi = $_POST['isi'];
$sql = "UPDATE berita SET judul = '$judul', isi= '$isi' WHERE id_berita = $id_berita ";
$result = mysqli_query($conn, $sql);
if($result){
    header('Location:./formadd.php');
}else{
    echo 'Updated Failed';
}
?>