<?php
session_start() ;
include 'CONFIG.php' ;

if (isset($_POST["submit"])){
    $username = $_POST['username'];
    $password = $_POST['password'];
 
    $database = mysqli_query($conn, "SELECT * FROM loginform WHERE username = '$username' and password = '$password'");
    $result = mysqli_num_rows($database);
    
    if($result > 0){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;

        setcookie($_SESSION['username'], $_SESSION['password'], time() + (86400 * 30), "/");
        
        echo "<script>alert('Login Success'); document.location.href = 'WELLCOME.php';</script>";
    }else{
        echo "<script>alert('Username or Password is Wrong!'); document.location.href = 'LOGIN.php';</script>";
    }

}
?>