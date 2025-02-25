<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //bài1
     for($i=0;$i<101;$i++){
        if($i%2==0){
            echo "$i là sỗ chẵn <br>";
        }
     };
     //bài 2 tìm phần tử lớn nhất trong mảng
     $array=[1,23,32,5,43];
     $max_value=$array[0];

     for($i=0;$i<count($array);$i++){
           if($array[$i]>$max_value){
              $max_value=$array[$i];//nó sẽ gán giá trị vào nếu có số nào đó nhỏ hơn số đang gán thì in ra số lớn nhát
           }
           if($array[$i]==$max_value){
            echo "[$array[$i]]";
           }else{
            echo "$array[$i]";
           }
     };
     //bài3 in ra các ký tự của chuỗi
     $name="Nguyễn Văn Cường";
     for($i=0;$i<strlen($name);$i++){
        echo $name[i]."<br>";
     };
     //bài4
     $n=5;
     $total=0;
     for($i=0;$i<$n;$i++){
         $total+=1/$i;
         echo $total."<br>";
     };
    //bài5
    $b=5;
    $x=4;
    for($i=0;$i<$b;$i++){
        $total=$x*2*$i;
        echo "<br>".$total;
    };
    //bài 6
    for($i=1;$i<100;$i+=2){
        echo $i."<br>";
    };
    //bài7

    $students = array(
        array('name' => 'Nguyễn Văn Cường 1', 'email' => 'thehalfheart1@gmail.com', 'age' => '29'),
        array('name' => 'Nguyễn Văn Cường 2', 'email' => 'thehalfheart2@gmail.com', 'age' => '29'),
        array('name' => 'Nguyễn Văn Cường 3', 'email' => 'thehalfheart3@gmail.com', 'age' => '29'),
        array('name' => 'Nguyễn Văn Cường 4', 'email' => 'thehalfheart4@gmail.com', 'age' => '29'),
        array('name' => 'Nguyễn Văn Cường 5', 'email' => 'thehalfheart5@gmail.com', 'age' => '29'),
        array('name' => 'Nguyễn Văn Cường 6', 'email' => 'thehalfheart6@gmail.com', 'age' => '29')
    );

    

    
    ?>



   <table>
    <thead>
        <tr>
            <th>name</th>
            <th>email</th>
            <th>Age</th>
        </tr>
    </thead>
    <tbody>
        <?php
        
          for($i=0;$i<count($students);$i++){
              
        ?>
        <tr>
            <td><?php echo $students[$i]['name']; ?></td>
            <td><?php echo $students[$i]['email']; ?></td>
            <td><?php echo $students[$i]['age']; ?></td>
        </tr>  
        <?php }  ?>

       



    </tbody>
   </table>
</body>
</html>