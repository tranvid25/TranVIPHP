<?php session_start();

if(isset($_SESSION['email'])){
    header('location:admin.php');
}
 if(isset($_POST['dangnhap'])){
    $email=$_POST['email'];
    $password=$_POST['password'];

    if($email=="vit76404@gmail.com" && $password=="12345"){
        $_SESSION['email']=$email;
        $_SESSION['password']=$password;
        header('location:admin.php');// chuyển trang 
    }
    else{
        echo "Tài khoảng hoặc mật khẩu sai";
    }
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
    <form action="" method="post">
     <input type="text" name="email">
     <input type="text" name="password">
      <button type="submit" name="dangnhap">Đăng nhập</button>
    </form>
</body>
</html>