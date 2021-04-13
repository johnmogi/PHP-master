<?php

$randomNumber = rand(0,100);
echo $randomNumber;

// if ($randomNumber >= 60){
//     echo " just great, you've passed";
// } else{
//     echo " too bad, you've flunked";
// }

echo ($randomNumber >= 60 ? " just great, you've passed" :  " too bad, you've flunked");


?>