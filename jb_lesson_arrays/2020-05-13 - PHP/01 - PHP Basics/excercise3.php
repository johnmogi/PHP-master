<?php

//  $arr = array(1,2);
 // echo count($arr); // acts as length
$num1 = rand(0,10);
$num2 = rand(0,10);

if($num2<$num1){

    $num3 = $num2;
    $num2 = $num1;
    $num1 = $num3; 

}
$arr = [];

for ($i=0; $i < $num2 ; $i++) { 

}
echo $num1, $num2;

// for($i = 0; $i < count($arr); $i++) {
//     echo $arr[$i] . ", ";
// }



?>  