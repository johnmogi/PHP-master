<?php

function getSum($arr) {
    $sum = 0;
    foreach($arr as $value) {
        $sum += $value;
    }
    return $sum;
}

function getAvg($arr) {
    return getSum($arr) / count($arr);
}

