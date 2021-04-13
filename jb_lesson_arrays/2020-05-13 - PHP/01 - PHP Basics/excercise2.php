<?php

$num1 = rand(1,300);
$num2 = rand(1,300);

if( $num2 < $num1) {
    $num3 = $num2;
    $num2 = $num1;
    $num1 = $num3;
}

for($i = $num1; $i <= $num2; $i++) {
    echo $i . ", " ;
}
echo "<br>";

// while ($num1 < $num2){
    
// }

 echo $num1 . ' ' . $num2;

// echo ($num2 < $num1 ? $num2 . ' ' . $num1 : $num1 . ' ' . $num2);




?>