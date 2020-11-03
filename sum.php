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
echo "\n";
//課題2
function f($a,$b){
    $result =$a+$b;
    return $result;
}
echo f(1,2);
echo "\n";
//課題３
$arr = array(1,3,5,7,9,);
function num($arr){
    $result = 1;
    foreach ($arr as $r)
         $result *= $r;
         return $result;
    }
     echo num($arr);
echo "\n";
//課題４
$arr = array(22,25,55,50,18);
 function max_array($arr){
     $max_number = $arr[0];
     foreach($arr as $a){
         if($max_number <= $a){
             $max_number = $a;
         }
     }
     return $max_number;
 }
 echo max_array($arr);
 echo "\n";
 //課題５
 $string= '<a href="https://tech-boost.jp/students/users">tech boost</a>';
 $result = strip_tags($string);
 echo $result;
 echo"\n";
 
 $array = ["apple","lemon","peach"];
 $arraylength = array_push($array,"grape","pinaple");
 echo $arraylength;"\n";
 print_r($array);"\n";
 
 $array1 = [1, 2, 3, 4, 5];
$array2 = [6, 7, 8, 9, 10];
$array3 = [11, 12, 13, 14, 15];
$array = array_merge($array1, $array2, $array3);
print_r($array);"\n";

echo "現在のUnixタイムスタンプ：".time();

$timestamp = mktime(0, 0, 0, 11, 3, 2020);
echo $timestamp;"\n";

echo date('y/m/d');