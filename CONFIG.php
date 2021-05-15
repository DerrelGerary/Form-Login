<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "login";

$conn = mysqli_connect('localhost', 'root', '', 'login') ;
if (mysqli_connect_errno()){  
    echo 'Koneksi gagal :' . mysqli_connect_error();
}

$db = mysqli_select_db($conn, 'login');
?>
