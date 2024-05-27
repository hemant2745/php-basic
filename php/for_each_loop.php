<?php
$arr=[
    "HTML"=> 2500,
    "CSS" => 2500,
    "JS" => 1500,
    "PHP"=> 4000,
];

echo "<pre>";
print_r($arr);
echo "</pre>";

foreach($arr as $keys => $fees){
    echo "The fees of $keys is $fees</br>";
}


?>