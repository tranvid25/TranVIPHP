<?php
//việc xử lý chuỗi rất quan trọng
echo "Nam nói\"Cậu ấy đang ăn tối\" ";
// các hàm xử lý chuỗi hay sử dụng
// addcslashes hàm này sẽ thêm dấu gạch chéo(\)đằng trước những ký tự trong chuỗi
// mỗi dấu gạch cho mỗi từ
echo (addcslashes('hello.net','a..z'));
echo '<br>';

//hàm explode chuyển chuỗi string thành một mảng
$str='hello everyon today i feel so good';
$x=explode(' ',$str);
var_dump($x);
// implode hàm này ngược với explode nó chuyển một mảng thành chuỗi
echo implode(' ',array(
    'siuu',
    'siu1',
    'siu2'
));

//ord($string)
// hàm này trả về mã ASCII của ký tự đầu tiên trong chuỗi

echo ord('Cd');

//strlen hàm này đêm số ký tự của chuỗi
echo strlen('hello.net');
//str_word_count đếm số từ chuỗi
echo str_word_count('hello các bạn');
//str_replace hàm này tìm kiếm và thay thế chuỗi
$str1='hello xin chào các bạn';
$str2=str_replace('hello','hello.net',$str1);
echo $str2;
// để thay thế nhiều chuỗi t cs thể dùng mảng
$str3=str_replace(array('hello','xin chào'),array('hello.net','Hello'),$str2);
echo $str3;
//md5 hàm này mã hóa chuỗi thành dãy có 30 ký tự
echo "<br>";
echo md5('hello.net');
//sha1 hàm này mã hóa chuỗi thành dãy 40kys tự
echo sha1('ga con');

//htmlentities chuyển các thể html sang thực thể của chúng
echo "<br>";
echo htmlentities('<b>hello</b>');

$str4 = '&lt;a href=&quot;https://www.w3schools.com&quot;&gt;w3schools.com&lt;/a&gt;';
echo html_entity_decode($str4);

//strip_tags hàm này bỏ các thẻ html trong chuỗi
echo strip_tags('<b>freestyle</b>','b');
//substr hàm này lấy 1 chuỗi con trong chuỗi $str bắt đầu từ ký tự start và chiều dài
echo substr('hello',0,5);
//strstr tách 1 chuỗi từ ký tư cho trước đến ht chuỗi
echo strstr('xin chào các bạn','các');
//strpos tìm vị trí của chuỗi trả về false nếu k tìm thấy
echo strpos('hello các bạn','các');

//strtolow chuyển sang chữ thuwofng 
//str to upper chuyển sang chữ hoa
//ucfirst chuyyeern chữu cái đầu tiên thành hoa
echo (ucfirst("bài tập"));
//ucwords chuyển từ đầu tiên trong chuỗi sang hóa
echo (ucwords("bài tập"));
echo "<br>";
//trim xóa ký tự nằm ở đầu và cuối chuỗi
echo trim('hello.ne', 'e');
//json_decode dùng để chuyển chuỗi dạng json sang các đối tuowjng mảng hoặc object
// nếu là true thì chuỗi json sẽ thành 1 mảng
$jsonobj='{"peter":35,"Ben":37}';
var_dump(json_decode($jsonobj,true));
//chuyển một mảng hoặc chuỗi thành json
$cars = array("Volvo", "BMW", "Toyota");

echo json_encode($cars);

echo "<br>";
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);

echo json_encode($age);
 ?>