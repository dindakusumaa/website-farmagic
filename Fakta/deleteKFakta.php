<?php
    include 'connect.php';

    $sql = 'DELETE FROM kfakta WHERE id_kategori = "'.$_GET['id_kategori'].'"';

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php');    
    }   else {
        echo 'Gagal menghapus data.';
    }
?>