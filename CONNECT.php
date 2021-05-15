<?php
session_start();
include 'CONFIG.php' ;

$username = $_POST['username'];
$password = $_POST['password'];
 
if (!empty($username) && !empty($password)) {
	$sql = mysqli_query($conn, "SELECT * FROM loginform WHERE username='$username' AND password='$password'") ;
	$result = mysqli_num_rows($sql) ;
		if ($result){
			echo "masuk" ;
			echo "klik <a href='home.php'>disini</a> untuk melanjutkan";
		} else {
			echo "username and pass salah" ;
		}
} else {
	echo "berhasil" ;
}
 
?>