<!-- //Cú pháp tổng quát khai báo hàm trong PHP -->
<?php

 $number=12;
  function kiem_tra_sochan($number){
    if($number%2==0){
        return true;
    }
    else{
        return false;
    }
  }

  echo kiem_tra_sochan($number);

  function tinhtong($a,$b){
    return $a+$b;
  };
  echo "<br>";
  echo tinhtong(2,3);

  $so1=12;
  $so2=13;
  echo tinhtong($so1,$so2);
 
  //nếu c không đc truyền vào thì chỉ tính tổng 2 số thôi
  //Biến toàn cục
  $bien_toan_cuc=12;
  function kiemtra()
{
    $bien_cuc_bo=13;
    global $bientoancuc;
    if($bien_cuc_bo%$bien_toan_cuc){
        return true;
    }
    else{
        return false;
    }
}

//biến tĩnh
function bien_tinh(){
    static $a=0;
    $a++;
    echo $a;
}
bien_tinh();
bien_tinh();
bien_tinh();

//các cách gọi hàm trong php
$a=1;
function tang_len_1($a){
    return $a+1;
}
//xuất giá trị trả về của hàm
echo tang_len_1($a);
echo "<br>";
echo $a;
//bài tập 1
$mang=array(321,312,3,4,5,45,56,5,7,6,787,8,7,2);
function kiemtra_mang($mang){
    foreach($mang as $timmang){
        if($timmang==321){
            echo " có số 321 trong mảng";
            break;
        }
        else{
            echo "Không có";
        }
    };
};
echo kiemtra_mang($mang);

//bài tập 2
$mang1=range(1,100);
$vi_tri=[];//mảng lưu vị trí các số chia ht cho 3
foreach($mang1 as $index){
    if($index%3==0){
        $vi_tri[]=$index;
    }
};
echo "các vị trí chia ht cho 3 trong mảng ". implode(",",$vi_tri);
echo "<br>";
//dùng implode để kết nối các phần tử thành chuỗi
//bài3
function so_lon_nhat($a1,$b1,$c1){
    if($a1>$b1&&$a1>$c1){
        echo "$a1 là số lớn nhất";
    }
    elseif($b1>$a1&&$b1>$c1){
        echo "$b1 là số lớn nhất";
    }else{
        echo "$c1 là số lớn nhất";
    }
};
echo so_lon_nhat(10,5,20);
echo "<br>";

//bài4
echo "Các số chia hết cho 40 trong khoảng 1 đến 1000: ";

for ($i = 1; $i <= 1000; $i++) {
    if ($i % 40 == 0) {
        echo $i . ", ";
    }
}



?>