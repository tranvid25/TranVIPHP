<?php

echo "WELLCOME TO PHP TRAN VI";

$color ="màu đỏ";
switch($color){
    case "màu đỏ";
       echo "đúng";
       break;
    case "màu đen";
       echo"đây là màu đen";
       break;   
}
for($i=0;$i<5;$i++){
    echo $i . "-----";
};
// các số giảm dần
for($i=9;$i>=0;$i--){
    echo $i . "======";
};
//vòng lặp for lồng nhau
for($i=1;$i<10;$i++){
    echo " Bảng cửu chương $i:<br>";
    for($j=1;$j<11;$j++){
        echo "$i * $j =" .($i*$j) ."<br>";
    }
    echo "<br>";//xuống dòng giữa các bảng
   
    }
// in ra các số chẵn từ 0->100
for($i=0;$i<101;$i++){
    if($i%2==0){
        echo "$i là số chẵn";
       
    }
    else{
        echo "$i là số lẻ";
    }
    echo "<br>";
}  
//vòng lặp for tính tổng

for($i=1;$i<10;$i++){
   echo "<br>" . 1/$i ;
}
$total=0;
$x=3;
for($i=1;$i<10;$i++){
    $total+=$x*2*$i;
    echo "<br>" . $total;
}


?>