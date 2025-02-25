<?php session_start();
$email=$password=$city="";
$error=[];
if(isset($_POST['form'])){
    $email=trim($_POST['email']);
    $password=trim($_POST['password']);
    $hashed_password=password_hash($password,PASSWORD_DEFAULT);
    $city=trim($_POST['city']);
    if(empty($email)){
        $error['email']="vui lòng nhập email";
    }
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error['email']="Email không hợp lệ";
    }
    if(empty($password)){
        $error['password']="vui lòng nhập password";
    }
    if(empty($city)){
        $error['city']="City không hợp lệ";
    }
    if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL) && !empty($password) && !empty($city)){
       $demo=[
        'email'=>$email,
        'pass'=>$hashed_password,
        'city'=>$city
       ];
       if (!isset($_SESSION['form'])) {
        $_SESSION['form'] = [];
    }
       $_SESSION['form'][]=$demo;
       echo "dữ liệu được lưu vào session";
    }else{
        echo " vui lòng nhập thồn tin hợp lệ";
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
    <form action="form.php" method = "POST">
        <label for="email">Email:</label>
        <input type="text" name="email" > 
        <span style="color:red;"><?= $error['city'] ?? '' ?></span>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password">
        <span style="color:red;"><?= $error['city'] ?? '' ?></span>
        <br>
        <label for="city">City:</label>
        <input type="text" name="city">
        <span style="color:red;"><?= $error['city'] ?? '' ?></span>
      <br>
        <button type="submit" name="form">Click</button>
    </form>
</body>
</html>