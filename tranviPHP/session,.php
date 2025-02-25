<?php session_start();

if(isset($_POST['save-session']))
{
   $_SESSION['name']=$_POST['username'];
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
    <h1>
        <?php
        if(isset($_SESSION['name'])){
            echo "Tên đăng nhâp là: ". $_SESSION['name'];
        }
        


        ?>
    </h1>
    <form action="" method="post">
        <input type="text" name="username">
        <input type="submit" name="save-session" value = "lưu sesion">
        
    </form>
    <form action="" method="post">
        <input type="submit" name="destroy-session" value="Xóa session">
    </form>
    <?php
    if(isset($_POST['destroy-session'])){
        //xóa session name
        session_destroy();
    }

    ?>

</body>
</html>