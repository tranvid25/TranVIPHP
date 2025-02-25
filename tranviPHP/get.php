<?php
$_GET=array('id'=>'12',
'title' => 'method_get');
$id=$_GET['id'];
echo $id;
echo "<br>";
foreach($_GET as $key=>$val){
    echo '<strong>'.$key .'=>'. $val .'</strong><br/>'; 
};
//kiểm tra sự tồn tại của dữ liệu
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
// phương thức post có tính bảo mật hơn vì dữ liệu bị gửi phải qua
// một form HTML nên nó bị ẩn ,nghĩa là chúng ta ko thể thấy các giá trị đó được

?>