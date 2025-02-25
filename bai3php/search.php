<?php
  if(isset($_POST['submit'])){
    $name=$_POST['name'];
    if($name=="thương"){
        echo"đã tìm thấy tên";
        echo date("d/m/y");
        echo date("H:i:sa");
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
        <input type="text" name="name">
        <button type="submit" name="submit">Gửi</button>
    </form>
</body>
</html>