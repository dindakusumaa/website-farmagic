<?php
include 'connect.php';

$username = $_POST['username'];
$email = $_POST['email'];
$nama= $_POST["nama"];
$password = md5($_POST['password']);

 $sql = 'INSERT INTO pengguna VALUES ("' . $username . '","' . $nama . '", "' . $email . '", "' . $password . '")';
    
$result = mysqli_query($conn, $sql);

if ($result) {
    header('Location: formlogin.php');
} else {
    echo 'Insert Failed';
}
?>