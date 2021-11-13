<!DOCTYPE html>
<html lang="zh">
<head>
    <title>Data Kinds数据类型</title>
</head>
<body>
<?php
//正整数
$num=0;
var_dump($num);
print '<br>';
//负数
$num=-10;
var_dump($num);
print '<br>';
//十六进制
$num=0x8C;
var_dump($num);
print '<br>';
//八进制
$num=047;
var_dump($num);
print '<br>';
//浮点数
$num=9.8;
var_dump($num);
print '<br>';
//指数形式的浮点数
$num=2.4e3;
var_dump($num);
print '<br>';
//浮点数
$num=8E-5;
var_dump($num);
print '<br>';
//布尔值
$bool=true;
var_dump($bool);
print "<br>";
//数组
$array=array(12,23);
var_dump($array);
print '<br>';
//对象
//创建一个对象
class Car{
    var $color;
    function __construct($color="green"){
        $this->color = $color;
    }
    function what_color(){
        return $this->color;
    }
}

function print_vars($obj){
    foreach(get_object_vars($obj) as $prop => $val){
        echo "\t$prop =  $val\n";
    }
}

//实例一个对象
$herbie=new Car("white");

//显示herbie属性
echo "\therbie: Properties\n";
print_vars($herbie);
print '<br>';
print $herbie->what_color();
//空变量
$num=NULL;
var_dump($num);
?>
</body>
</html>
