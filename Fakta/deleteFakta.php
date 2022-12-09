<?php
    include 'connect.php';

    $sql = 'DELETE FROM fakta WHERE id_fakta = "'.$_GET['id_fakta'].'"';

    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: index.php');
    }   else {
        echo 'Gagal menghapus data.';
    }
?>
