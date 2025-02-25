<?php

//   echo readfile("file.txt");

 $myfile=fopen("file.txt","r") or die ("lổi");
 while(!feof($myfile)){
    echo fgets($myfile);}//mở file
// echo fread($myfile,filesize("file.txt"));//đọc file
 fclose($myfile);//đóng file
// echo fgets($myfile);//đọc 1 dòng trong file thôi

?>