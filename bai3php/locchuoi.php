<?php
$name="tran vi";
echo $name;
$locchuoi=filter_var($name,FILTER_SANITIZE_STRING);
//loc số nguyên
$songuyen=345;
if(!filter_var($songuyen , FILTER_VALIDATE_INT) == false){
    echo "đay là số nguyên";
}
// loc ip
$ip="127.0.0.1";
if(!filter_var($ip , FILTER_VALIDATE_IP)== false){
    echo "đây là ip";
}
//lọc email
$email="vit76404@gmail.com";
$gmail=filter_var($email,FILTER_SANITIZE_EMAIL);
if(!filter_var($gmail , FILTER_VALIDATE_EMAIL)== false){
    echo " đây là email";
}
// lọc url
include("nai1.php");
// gọi từ file kia qa file này
?>