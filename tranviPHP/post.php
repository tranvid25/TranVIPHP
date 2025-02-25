<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      if(isset($_POST['submit'])){
        echo 'tên đăng nhập là: '.$_POST['username'];
        echo '<br>';
        echo 'Mật khẩu là: '.$_POST['password'];
      }
    

    ?>
    <form action="" method="POST">
        <input type="text" name="username"value="">
        <input type="text" name="password" value="">
        <button type='submit' name='submit'>Click</button>
    </form>
</body>
</html>