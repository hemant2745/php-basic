<?php
$x = array(
    "car1", 
    "car2", 
    "car3", 
    "car4", 
    "car5", 
    "car6", 
);
echo "<pre>";
print_r($x);
echo "</pre>";

$y = array(
    "car7", 
    "car8", 
    "car9", 
    "car10", 
    "car11",
    "car12", 
);
echo "<pre>";
print_r($y);
echo "</pre>";

$z = array($x,$y);
echo "<pre>";
print_r($z);
echo "</pre>";




// var_dump(is_array($car));
// echo array_search('car4', $car);

// echo "<pre>";
// print_r($car);
// echo "</pre>";

// echo "<pre>";
// print_r(array_slice($car,2));
// echo "</pre>";

// echo "<pre>";
// print_r(array_chunk($car,2));
// echo "</pre>";

// echo "<pre>";
// print_r(array_pop($car));
// echo "</pre>";

// array_push($car, "car7");
// echo "<pre>";
// print_r($car);
// echo "</pre>";


// echo "<pre>";
// print_r(array_keys($car));
// echo "</pre>";
?>