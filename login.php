<?php
session_start();
include_once("database.php");

$_SESSION['status'] = "";

if ($_SESSION['status'] == "login") {
    header("location:home.php");
}

if (isset($_POST["masuk"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (cek_login($username, $password)) {
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "login";

        if ($_SESSION['role'] == "admin") {
            header("location:home.php");
        } else {
            header("location:daftarbrg.php");
        }
    } else {
        header("location:login.php?msg=gagal");
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body style="font-family: 'Arial', sans-serif; background-color: #f4f4f4; display: flex; align-items: center; justify-content: center; height: 100vh; margin: 0;">

    <form method="post" action="" style="background-color: #ffffff; padding: 50px; border-radius: 30px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); text-align: center; position: relative;">

        <img src="image/chest.png" alt="Logo" style="width: 100px; margin-bottom: 20px; position: absolute; top: -50px; left: 50%; transform: translateX(-50%);">

        <h2 style="color: #333; margin-bottom: 25px;">Login</h2>

        <label for="username" style="display: block; text-align: left; margin-bottom: 8px;">Username:</label>
        <input type="text" id="username" name="username" required style="width: 100%; padding: 10px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #a7a7a7;">

        <label for="password" style="display: block; text-align: left; margin-bottom: 8px;">Password:</label>
        <input type="password" id="password" name="password" required style="width: 100%; padding: 10px; margin-bottom: 15px; box-sizing: border-box; border: 1px solid #a7a7a7;">

        <div style="text-align: center; margin-bottom: 15px;">
            <a href="#" style="color: #871ea7; text-decoration: none;">Forgot Password?</a>
        </div>

        <br>

        <input type="submit" name= "masuk" value="Login" style="background-color: #871ea7; color: #fff; cursor: pointer; padding: 10px 20px; border: none;">

    </form>
</body>
</html>
