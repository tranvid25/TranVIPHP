<?php
 
$cookieName="user";
$cookieValue="Trần Vĩ";

setcookie($cookieName,$cookieValue,time()+(86400),"/");
if(isset($_COOKIE[$cookieName])){
    echo "cookie đã tồn tại".$cookieName;
}
else{
    echo "cookie ".$cookieName . " đã chết ";
}//cách sửa cookie
// chỉ cần -86400 là xóa
?>