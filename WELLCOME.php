<?php
session_start(); 
if( ! isset($_SESSION['username'])){ 
  header("location: LOGIN.php");
}
?>
<html>
<head>
    <link rel="shorcut icon" href="avatar.png">
    <link rel="stylesheet" type="text/css" href="WELLCOME.css">
    <title>Halaman Setelah Login</title>
</head>
<body>
<div class="loginbox">
    <img src="user.png" class="avatar">
    <h1>Wellcome <?php echo $_SESSION['username']; ?></h1>
    <h4>Anda berhasil login</h4>
    <a href="LOGOUT.php"><button>Logout</button></a>
</body>
</html>