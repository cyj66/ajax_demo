<?php
////1.定义字典保存商品信息
//$products=array("nz"=>array("title"=>"甜美女装","des"=>"人见人爱花见花开甜美系列","image"=>"source/1.jpg"),
//"bb"=>array("title"=>"奢华包包","des"=>"送女友送情人送学妹，一送一准系列","image"=>"source/2.jpg"),
//"tx"=>array("title"=>"键盘拖鞋","des"=>"程序员专属拖鞋，尽显屌丝气质","image"=>"source/3.jpg"));
////2.获取前端传递的参数name
//$name=$_GET["name"];
//// echo $name;
////3.进而获得对应的字典
//$product=$products[$name];
//// print_r($product);
////4.将小字典的内容取出来返回给前端
//echo $product["title"];
//echo "|";
//echo $product["des"];
//echo "|";
//echo $product["image"];
//header("content-type:text/xml;charset=utf-8");
//echo file_get_contents("10like8case.xml");
echo file_get_contents("10ajaxtest.txt");

?>