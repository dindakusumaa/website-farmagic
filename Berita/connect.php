<?php
    session_start();

    $hostname = "localhost";
    $user = "farmagii_root";
    $password = "farmagic_";
    $dbname ="farmagii_db";
    $conn = mysqli_connect($hostname,$user,$password,$dbname) or die('connection failed');
    
?>