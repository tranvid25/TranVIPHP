<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php // Xử Lý Upload
  
  // Nếu người dùng click Upload
  if (isset($_POST['uploadclick']))
  {
    

      // Nếu người dùng có chọn file để upload

      if (!empty($_FILES['avatar']['name']))
      {
        // var_dump($_FILES['avatar']) => xem co gi trong nay
          // Nếu file upload không bị lỗi,
          // Tức là thuộc tính error > 0
          if ($_FILES['avatar']['error'] > 0)
          {
              echo 'File Upload Bị Lỗi';
          }
         
          else {
            $allowed_types=['png','jpg','jpeg'];//các đuôi file hợp lệ
            $file_ext=pathinfo($_FILES['avatar']['name'],PATHINFO_EXTENSION);//lấy đuôi file
            if(!in_array(strtolower($file_ext),$allowed_types)){
                echo 'Chỉ được upload file hình ảnh(PNG,JPG,JPEG)';
            }
            else{
                if(move_uploaded_file($_FILES['avatar']['tmp_name'], './upload/'.$_FILES['avatar']['name'])){
                    echo 'File uploaded thành công!';
                }else{
                    echo 'Upload thất bại';
                }
            }
              // move_uploaded_file: hàm upload fil     
          }
      }
      else{
          echo 'Bạn chưa chọn file upload';
      }
  }
?>
<form method="post" action="" enctype="multipart/form-data">
      <input type="file" name="avatar"/>
      <input type="submit" name="uploadclick" value="Upload"/>
  </form>

</body>
</html>