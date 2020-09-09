<?php
//一、后端编写的代码不能直接运行，只能放到服务器对应的文件夹下，通过服务器运行
$num=10;    //定义变量，js中为var num=10;
echo $num;  //输出打印，js中为console.log();
echo "<br>";  //输出换行

//二、定义集合:
//1.数组
$arr=array(1,3,5); //定义数组，js中为var arr=[1,3,5];
print_r($arr);    //集合输出
echo "<br>";
echo $arr[1];     //集合中的元素输出
echo "<br>";
//2.字典（对象）
$dict=array("name"=>"cyj","age"=>"20");  //定义字典，js中为var dict={"name":"cyj","age":"20"};
print_r($dict);
echo "<br>";
echo $dict["name"];
echo "<br>";

//三、各种语句
//1.if
$age=18;
if($age>=18)
{
    echo "成年人";
}
else
{
    echo "未成年人";
}
echo "<br>";
//2.三目
$res=($age>=18)?"yes":"no";
echo $res;
echo "<br>";
//3.switch
switch($age)
{
    case 0:
        echo "0";
        break;
    case 18:
        echo "18";
        break;
    default:
        echo "其他";
        break;
}
echo "<br>";
//4.for
for($i=0;$i<count($arr);$i++)    //count()
{
    echo $arr[$i];
    echo "<h1>循环间隔</h1>";
}
//5.while
$index=0;
while($index<count($arr))
{
    echo $arr[$index];
    echo "<h3>循环间隔</h3>";
    $index++;
}
?>
