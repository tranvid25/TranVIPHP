<h1>Làm chủ mảng trong php</h1>
<?php
// 2 cách tạo ra mảng
// cách1
 $list_student=array();
 //cách 2
 $list_student1=['cuong','jam','Vi'];
 //có thể tự set key cho mảng
//  $list_student=[1=>'cuong',3=>'vi'];
 // xuaastr một mảng thì dùng print_r
 //thêm phần tủ mởi vào mảng
//  $list_student[]="Minh anh";
$list_student1[10]="Minh anh";
echo "<br>";
// cập nhật phần tử trong mảng
$list_student1[1]="Phan van cương";
//foreach
foreach($list_student as $student){
    echo $student."<br>";
    
}
print_r($list_student1);
//xóa phần tử trong mảng
unset($list_student1[1]);
// chuyển tất cả các key trong mảng thành chữ hoa
$array=array('chuthuong'=>"hello");
$array=array_change_key_case($array,CASE_UPPER);
var_dump($array);

$array1=array(
    "Hoang"=>"31",
    "Nam"=>"41",
    "Minh"=>"39",
    "Hoa"=>"40"
);
//BÀI 1:
//SẮP XẾP THEO GIÁ TRỊ TĂNG DẦN
$value_up=$array1;
asort($value_up);
foreach($value_up as $x =>$x_value){
    echo "Value = ".$x_value;
    echo "<br>";
};
$key_up=$array1;
ksort($key_up);
foreach($key_up as $k =>$k_key){
    echo "Key = ".$k;
    echo "<br>";
}
$key_down=$array1;
krsort($key_down);
foreach($key_down as $k1=> $k1_keydown){
    echo "key=".$k1;
    echo "<br>";
}
$value_down=$array1;
arsort($value_down);
foreach($value_down as $vd =>$vd_v){
    echo "Value=".$vd_v;
    echo "<br>";
}

//bài 2

$array2=array('A' => 'Blue', 'B' => 'Green', 'C' => 'Red')
$lowercase_values=array_map('strtolower',$array2);
print_r($lowercase_values)
$uppercase_values=array_map('strtoupper',$array2);
print_r($uppercase_values);
//bài3
$string="78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73, 68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";
$array3=explode(",",$string);
$average=array_sum($array3)/count($array3);
echo " giá trị trung bình ". number_format($average,2) . "<br>";

sort($array3);
$min_values=array_slice($array3,0,5);
echo "5 phần tủ nhỏ nhất:" . implode(",",$min_values) . "<br>";
rsort($array3);
$max_values=array_slice($array3,0,5);
echo "5 phần tử lờn nhất: " . implode(",",$max_values) ."<br>";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>làm chủ mảng</h1>
    <p>Danh sasch sinh viên</p>
    <ul>
        <?php
           foreach($list_student1 as $student){
        ?>
             <li><?php echo $student ?></li>
        <?php

           }
          ?> 
    </ul>
</body>
</html>