<?php
    
    $servername = "ns01.cloudhost.id";
    $username = "farmagii_root";
    $password = "farmagic_";
    $dbname = "farmagii_db";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully and database connected";
    ?>
?>