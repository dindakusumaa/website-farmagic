<?php
    include 'connect.php';

    $sql = 'DELETE FROM berita WHERE id_berita = "'.$_GET['id_berita'].'"';

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: formadd.php');    
    }   else {
        echo 'Gagal menghapus data.';
    }
?>
