<?php
$name="翔太";
if($name="翔太"){
    echo "私は翔太です";
}else{
    echo "翔太ではありません";
    
}
echo "\n";
$total=0;
echo $total;
for($i=1;$i<=10000;$i++){
$total+=$i;
}
echo$total;
echo "\n";

$fruits=array("apple","pineapple","lemon","melon","grape");
foreach($fruits as $fruit){
    echo $fruit;
    echo "\n";
}
echo "\n";

$start = 1;
$end = 100;

for($i = $start; $i <= $end; $i++){
  if($i % 5 == 0){
    echo $i ."\n";
  }
}

