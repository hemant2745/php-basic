<?php
$count =0;
for($i=0;$i<=50;$i++){
    if($i%2 == 0){
        continue;
    }
     $count++;
    echo "$i<br/>";
}

echo "------------<br/>";
echo $count;
?>