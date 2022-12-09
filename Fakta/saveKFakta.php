<?php
    include 'connect.php';

    $id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];

    if (empty($id_kategori)) {
        $sql = 'INSERT INTO kfakta VALUE ("'.$id_kategori.'", "'.$nama_kategori.'")';
    } else {
        $sql = 'UPDATE kfakta SET id_kategori="'.$id_kategori.'", nama_kategori="'.$nama_kategori.'" WHERE id_kategori="'.$id_kategori.'"';
    }

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: kfakta.php');
    } else {
        echo 'Inserted Failed.';
    }
?>