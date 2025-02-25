<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        

        $err1=$err2=$err3=$msg="";
        $nerr=$nerr1="";
    //   echo $_GET['email']."-----".$_GET['password'];
        //   echo $_POST['email']."----".$_POST['password'];
        // $data=$_REQUEST;
        // echo '<pre>';
        // var_dump($data);
        //viết hàm kiểm tra người dùng đã click vào form chưa?
        //nếu đã click thì biến submit đã tồn tại
        if(isset($_POST['submit'])){
            $x=1;
            //nếu email =rỗng
            if(empty($_POST['email'])){
               $err1="vui lòng nhập email";
               $x=2;
            }
            if(empty($_POST['password'])){
                $err2="vui lòng nhập password";
                $x=3;
            }
            // if(!empty($_POST['email']) && !empty($_POST['password'])){
            if($x==1){
                $msg="Thành công";
            }

        }
        if(isset($_POST['submit1'])){
            if(empty($_POST['number'])){
                $err1="vui lòng nhập số";
            }
            if(!empty($_POST['number'])){
                $number=$_POST["number"];
                if($number%7==0){
                    echo "<p>Số $number chia hết cho 7</p>";                }
                else{
                    echo "<p>Số $number không chia hết cho 7</p>";
                }
            }
        }
        if(isset($_POST['submit2'])){
            $t=1;
            if(empty($_POST['toan'])){
                $err1="vui lòng nhập môn toán";
                $t=2;
            }
            if(empty($_POST['ly'])){
                $err2="vui lòng nhập môn ly";
                $t=3;
            }
            if(empty($_POST['hoa'])){
                $err3="vui lòng nhập môn hoa";
                $t=4;
            }
            if($t==1){
                $toan=$_POST["toan"];
                $ly=$_POST["ly"];
                $hoa=$_POST["hoa"];
                $total=$toan+$ly+$hoa;
                if($total>=15 && !$toan==1||$ly==1||$hoa==1){
                    echo "Bạn đã đậu";
                }
                elseif($toan==1||$ly==1||$hoa==1){
                    echo "Bạn đã rớt vì có điểm liệt";
                }
                else{
                    echo "Bạn đã rớt";
                }
            }


        }





    ?>
    <!-- chú ý 
    -GET:
    +lmaf hiển thị data nhập vào lên url gồm:name và value đã nhập vào
    +k bảo mật vì làm lộ thông tin
    +để lấy data trên url về thì get như sau
    -POST
     + ko lm hiển thị data nhap vao len url
     + bảo mật hơn 
     + láy về thì dùng post nhuư trênn 
     nếu ko lấy get hoặc post thì dùng request
     Request thì trả về 1 mảng gồm các thông tin đã nhập vào gồm nam và value
     mảng muốn xem thì var dump -->
     <p><?php echo $msg;  ?></p>
    <form action="" method="POST">
        <input type="text" name="email">
        <p> <?php echo $err1; ?></p>
         <input type="text" name="password">
         <p> <?php echo $err2; ?></p>
        <button type="submit" name="submit">click</button>
    </form>
    <form action="" method="POST">
        <input type="text" name="number">
        <p><?php echo $err1 ?></p>
        <button type="submit" name="submit1">click</button>
    </form>
    <form action="" method="POST">
        <input type="text" name="toan">
        <p><?php echo $err1;  ?></p>
        <input type="text" name="ly">
        <p><?php echo $err2;  ?></p>
        <input type="text" name="hoa">
        <p><?php echo $err3;  ?></p>
        <button type="submit" name="submit2">nhấn</button>
    </form>
    
</body>
</html>