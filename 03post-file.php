<?php
print_r($_POST);
echo "<br>";
print_r($_FILES);
echo "<br>";
//1.获取上传文件对应的字典
$fileinfo=$_FILES["upfile"];
print_r($fileinfo);
echo "<br>";
//2.获取上传文件的名称
$filename=$fileinfo["name"];
//3.获取上传文件保存的临时路径
$filepath=$fileinfo["tmp_name"];
echo $filename;
echo "<br>";
echo $filepath;
//4.移动临时文件到source
move_uploaded_file($filepath,"source/".$filename);        //默认保存在临时文件，移动上传的文件，拼接字符串用.拼接