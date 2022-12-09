<?php
    $hostname = 'localhost'; //127.0.0.1
    $username = 'farmagii_root';
    $password = 'farmagic_';
    $dbname = 'farmagii_db';

    $conn = mysqli_connect($hostname, $username, $password, $dbname) or die('Connection Failed.');
?>