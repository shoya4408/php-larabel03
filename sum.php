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