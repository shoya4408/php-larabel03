<?php
//課題1
function sum($max){
    $result = 0;
    for($i = 1;$i <= $max; $i++ ){
        $result=$i*2;
    }
    return $result;
}
echo sum(100);
"\n";
//課題2
function f($a,$b){
    $result =$a+$b;
    return $result;
}
echo f(1,2);
echo "\n";
//課題３
function a($arr){
    $arr = array(1,3,5,7,9,);
    $result =$arr * $arr;
        echo $result;}
$arr = array(1,3,5,7,9,); 
echo a($arr);
echo "\n";