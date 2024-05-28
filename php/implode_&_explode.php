<?php

//implode change array into string 
$arr = [
    '1','2','3','4'
];

$str = implode(",",$arr);
echo $str;

//explode chane string into array 
$str = "A,B,C,D,E,F" ;
$arr1 = explode(',', $str,0);
echo "<pre>";
print_r($arr1);

?>