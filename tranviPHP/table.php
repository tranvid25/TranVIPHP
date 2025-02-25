<?php session_start();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>hiển thị dữ liệu được lưu trong session</h2>
    <table>
        <thead>
        <th>Email</th>
        <th>Password</th>
        <th>City</th>
        </thead>
        <tbody>
        <?php
         if (isset($_SESSION['form']) && !empty($_SESSION['form']))
           foreach($_SESSION['form'] as $entry){
        ?>
        <tr>
            <td><?php echo $entry['email'];  ?></td>
            <td><?php echo $entry['pass']; ?></td>
            <td><?php echo $entry['city']; ?></td>
        </tr>
        <?php  } ?>
        </tbody>
       
    </table>
</body>
</html>