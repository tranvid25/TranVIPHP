<?php
session_start();

if(!isset($_SESSION['email'] && $_SESSION['password'])){
    header('location:login.php');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>admin</h1>
    <a href="logout.php">
        <button type="submit" name="dangxuat">Đăng xuất</button>
    </a>
</body>
</html>