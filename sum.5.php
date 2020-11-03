<?php

 //課題５
 //strip_tags
 $string= '<a href="https://tech-boost.jp/students/users">tech boost</a>';
 $result = strip_tags($string);
 echo $result;
 echo"\n";
 //array_push
 $array = ["apple","lemon","peach"];
 $arraylength = array_push($array,"grape","pinaple");
 echo $arraylength;"\n";
 print_r($array);"\n";
 //array_marge
 $array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];
$array3 = [11, 12, 13, 14, 15];
$array = array_merge($array1, $array2, $array3);
print_r($array);"\n";
//time
echo "現在のUnixタイムスタンプ：".time();
//mktime
$timestamp = mktime(0, 0, 0, 11, 3, 2020);
echo $timestamp;"\n";
//date
echo date('y/m/d');