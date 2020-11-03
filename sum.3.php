<?php

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
