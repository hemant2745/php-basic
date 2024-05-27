<?php
$sum=0;
$i =1;
while($i<10){
    $sum+=$i;
    if($sum < 10){
        break;
    }
    echo $i."<br/>";
    $i++;
}
echo "--------------<br/>";
echo "sum $sum <br/>";
echo"---------------<br/>";
echo "loop ends";
?>