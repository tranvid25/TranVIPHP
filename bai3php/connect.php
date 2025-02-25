<?php

$server='localhost';
$user='root';
$pass='';
$database='bai3php';

$connect=new mysqLi($server , $user ,$pass,$database);

if($connect){
    mysqLi_query($connect,"SET NAMES 'utf8'");
    // echo "đã kết nối thành công";
}
else{
    echo "kết nối thất bại";
}


?>