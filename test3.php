<?php
function a($num){
    return $num*2;
}
echo a(2);
echo "\n";

function b($a,$b){
    return $a+$b;
}
echo b(3,5);
echo "\n";

function product($arr){
    $result = $arr[0]; 
    for ($i = 1; $i < count($arr); $i++) {
            $result *= $arr[$i];
    }
    return $result;
}
echo product(array(1, 3, 5 ,7, 9));
echo "\n";

function max_array($arr){
 $max_number = $arr[0];
 foreach($arr as $a){
 if($max_number<$a){
     $max_number=$a;
 }
 }

 return $max_number;
 }
echo max_array(array(10,18,17,38));
echo "\n";

$text='<p>Test paragraph.</p><!-- Comment --> <a href="#fragment">Other text</a>';
echo strip_tags($text);
echo strip_tags($text,'<p><a>');
echo"\n";
$fruit=array("banana","apple");
array_push($fruit,"grape","pineapple");
print_r($fruit);
echo "\n";
$array1=array("color"=>"red",2,4);
$array2=array(6,8,"color"=>"green","shape"=>"trapezoid",10);
$result=array_merge($array1,$array2);
print_r($result);
echo "\n";
date_default_timezone_set('UTC');
echo date('c',mktime(0,0,0,8,9,2019));
echo "\n";