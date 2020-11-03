<?php
//課題１
$name = "tokita";
if($name == "tokita"){
  echo "私はtokitaです。";
} else {
  echo "私はtokitaではありません。";
}
echo "\n";
//課題２
$total =0;
for($i =1;$i <=10000;$i++){
  $total += $i;
}
echo $total;
echo "\n";
//課題3
$fruits = array("apple","banana","grape","peach","lemon");
foreach($fruits as $fruits){
  echo "要素は" . $fruits;
  echo "\n";
}
"\n";
//課題4
/* for文の始めの値を定義する */
$start = 1;
/* for文の終わりの値を定義する */
$end = 100;

for($i = $start; $i <= $end; $i++){

  // 5で割り切れたら{}内を実行する
  if($i % 5 == 0)
   echo "$i"."\n";
  }