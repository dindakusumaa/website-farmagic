<?php
    include 'connect.php';

    $id_fakta = $_POST['id_fakta'];
    $judul = $_POST['judul'];
    $gambar = $_POST['gambar'];
    $isi= $_POST['isi'];
    $id_kategori = $_POST['id_kategori'];

    if (empty($id_fakta)) {
        $sql = 'INSERT INTO fakta VALUE ("'.$id_fakta.'", "'.$judul.'", "'.$gambar.'", "'.$isi.'", "'.$id_kategori.'")';
    } else {
        $sql = 'UPDATE fakta SET id_fakta="'.$id_fakta.'", judul="'.$judul.'", gambar="'.$gambar.'", 
        isi="'.$isi.'", id_kategori="'.$id_kategori.'" WHERE id_fakta="'.$id_fakta.'"';
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php');
    } else {
        echo 'Inserted Failed.';
    }
?>