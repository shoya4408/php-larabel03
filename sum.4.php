<?php

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
