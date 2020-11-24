<?php


    $apr = filter_input(INPUT_GET, 'apr', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $termLength = filter_input(INPUT_GET, 'termLength', FILTER_SANITIZE_NUMBER_FLOAT);
    $amount = filter_input(INPUT_GET, 'amount', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);

    $r = $apr/100 / 12;
    $n = $termLength * 12;

    $p = $amount;
    $top = $r * pow($r+1, $n);
    $bottom = pow($r+1, $n)-1; 
    $mortgage = $top/$bottom;
    $mortgage = round($p * $mortgage, 2);
    include 'result.php';

?>