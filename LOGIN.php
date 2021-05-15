<?php
session_start();

if (isset($_SESSION['username'])){
    header("location: WELLCOME.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="refresh" content="30">
    <link rel="shorcut icon" href="avatar.png">
    <link rel="stylesheet" type="text/css" href="LOGIN.css">
    <title>SIGN IN</title>
</head>

<body>
    <div class="loginbox">
        <img src="user.png" class="avatar">
        <h1>Login Here</h1>
        <form action="CONN.php" method="post">
            <label>Username</label><br>
            <input type="text" name="username" placeholder="Enter Username" required><br>
            <label>Password</label><br>
            <input type="password" name="password" id="inputpassword" class="form-password" placeholder="Enter Password" required><br>
                <input type="checkbox" onclick="myFunction()"><label id="show">Show Pass</label>
            <input type="submit" name="submit" value="Login"><br>
            <input type="reset" onclick="alert('Your data is reset!')" value="Reset">
        </form>
    </div>
 <script>
        function myFunction() {
            var x = document.getElementById("inputpassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>
</html>