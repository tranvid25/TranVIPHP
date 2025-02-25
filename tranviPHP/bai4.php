<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $err1=$err2=$err3=$err4=$err5=$err6="";
    if (isset($_POST['submit'])) {
        $errors = [];
        $monHoc = ["toan1", "ly1", "hoa1", "anh1", "van1", "su1"];
        $diem = [];
    
        foreach ($monHoc as $mon) {
            if (empty($_POST[$mon])) {
                $errors[$mon] = "Vui lòng nhập điểm môn " . ucfirst($mon);
            } elseif (!is_numeric($_POST[$mon]) || $_POST[$mon] < 0 || $_POST[$mon] > 10) {
                $errors[$mon] = "Điểm của môn " . ucfirst($mon) . " phải từ 0 đến 10";
            } else {
                $diem[$mon] = (float) $_POST[$mon];
            }
        }
    
        if (empty($errors)) {
            // Kiểm tra nếu có môn nào dưới 4 điểm thì xếp loại yếu
            if (min($diem) < 4) {
                echo "Học sinh yếu";
            } else {
                $dtb = array_sum($diem) / count($diem);
                if ($dtb < 5) {
                    echo "Học sinh yếu";
                } elseif ($dtb >= 5 && $dtb < 6.5) {
                    echo "Học sinh trung bình";
                } elseif ($dtb >= 6.5 && $dtb < 8) {
                    echo "Học sinh khá";
                } else {
                    echo "Học sinh giỏi";
                }
            }
        }
    }
    ?>
    
    <form action="" method="POST">
        <input type="text" name="toan1" placeholder="Toán">
        <span style="color:red;"><?php echo $err1; ?></span><br>
    
        <input type="text" name="ly1" placeholder="Lý">
        <span style="color:red;"><?php echo $err2; ?></span><br>
    
        <input type="text" name="hoa1" placeholder="Hóa">
        <span style="color:red;"><?php echo $err3; ?></span><br>
    
        <input type="text" name="anh1" placeholder="Tiếng Anh">
        <span style="color:red;"><?php echo $err4; ?></span><br>
    
        <input type="text" name="van1" placeholder="Văn">
        <span style="color:red;"><?php echo $err5; ?></span><br>
    
        <input type="text" name="su1" placeholder="Lịch Sử">
        <span style="color:red;"><?php echo $err6; ?></span><br>
    
        <button type="submit" name="submit">Click</button>
    </form>
</body>
</html>