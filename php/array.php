<?php

//index array
$arr1 = array ("car1","car2","car3");
echo "<pre>";
print_r($arr1);
echo "</pre>";
echo $arr1[0];

//associate array
$arr2 = array(
    'name' => 'hemant',
    'company' => 'rt',
    'age' => 23,
    'contact' => array("1234543","098789"),
    'status' => true,
);
$arr2['test'] = "testing";

echo "<pre>";
print_r($arr2);
echo "</pre>";

$arr3 =[
    1,
    2,
    3,
    4,
    5,
    6,
    7=>[23=>[43,65,98],
    45,
    67],
    8,
    9];

echo "<pre>";
print_r($arr3);
echo "</pre>";
?>