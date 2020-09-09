<?php
//执行结果中有中文，必须在php文件顶部加上以下这句
//header("content-type:text/html;charset=utf-8");
//如果php文件中需要返回XML数据，也需要如此设置
header("content-type:text/xml;charset=utf-8");    //改成xml
echo file_get_contents("info.xml");   //返回文件内容