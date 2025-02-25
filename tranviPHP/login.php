<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    session_start();
    
    $email = $password = "";
    $errors = [];
    
    if(isset($_POST['login'])) {
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);
        
        if(empty($email)) {
            $errors['email'] = "Vui lòng nhập email.";
        } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = "Email không hợp lệ.";
        }
        
        if(empty($password)) {
            $errors['password'] = "Vui lòng nhập password.";
        }
        
        if(empty($errors)) {
            if(isset($_SESSION['email']) && isset($_SESSION['password'])) {
                if($_SESSION['email'] === $email && password_verify($password, $_SESSION['password'])) {
                    echo "Login thành công!";
                } else {
                    echo "Login thất bại! Email hoặc mật khẩu không đúng.";
                }
            } else {
                echo "Không có tài khoản nào được đăng ký.";
            }
        }
    }
    ?>
    
    <form action="" method="post">
        <label for="email">Email:</label>
        <input type="text" name="email" value="<?= htmlspecialchars($email) ?>">
        <span style="color:red;"> <?= $errors['email'] ?? '' ?> </span>
        <br>
        
        <label for="password">Password:</label>
        <input type="password" name="password">
        <span style="color:red;"> <?= $errors['password'] ?? '' ?> </span>
        <br>
        
        <button type="submit" name="login">Login</button>
    </form>
</body>
</html>
