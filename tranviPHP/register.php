<?php
session_start();

if(isset($_POST['register'])) {
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) && !empty($password)) {
        $_SESSION['email'] = $email;
        $_SESSION['password'] = password_hash($password, PASSWORD_DEFAULT); // Mã hóa mật khẩu
        echo "Đăng ký thành công!";
    } else {
        echo "Vui lòng nhập thông tin hợp lệ!";
    }
}
?>

<form action="" method="post">
    <input type="text" name="email" placeholder="Nhập email">
    <input type="password" name="password" placeholder="Nhập mật khẩu">
    <button type="submit" name="register">Đăng ký</button>
</form>
