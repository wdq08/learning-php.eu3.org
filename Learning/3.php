<!DOCTYPE html>
<html lang="en">
<head>
    <title>003-Data Compare数据比较</title>
</head>
<body>
/** @noinspection PhpStrictComparisonWithOperandsOfDifferentTypesInspection */<?php
//弱类型数据比较
if (42=="42"){
    print '相等';
}else{
    print '不相等';
}
//强类型数据比较
/** @noinspection PhpStrictComparisonWithOperandsOfDifferentTypesInspection */
if (42==="42"){
    print '相等';
}else{
    print '不相等';
}
//其他数据类型比较(弱类型比较)
if(0==NULL){
    print '相等';
}else{
    print '不相等';
}
echo '0 == false: ';
var_dump(0 == false);
echo '0 === false: ';
var_dump(0 === false);
echo PHP_EOL;
echo '0 == null: ';
var_dump(0 == null);
echo '0 === null: ';
var_dump(0 === null);
echo PHP_EOL;
echo 'false == null: ';
var_dump(false == null);
echo 'false === null: ';
var_dump(false === null);
echo PHP_EOL;
echo '"0" == false: ';
var_dump("0" == false);
echo '"0" === false: ';
var_dump("0" === false);
echo PHP_EOL;
echo '"0" == null: ';
var_dump("0" == null);
echo '"0" === null: ';
var_dump("0" === null);
echo PHP_EOL;
echo '"" == false: ';
var_dump("" == false);
echo '"" === false: ';
var_dump("" === false);
echo PHP_EOL;
echo '"" == null: ';
var_dump("" == null);
echo '"" === null: ';
var_dump("" === null);
?>
</body>
</html>
