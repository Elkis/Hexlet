<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function calculateAverage(array $arr)
{
    $length = count($arr);
    $sum = 0;

    if ($length === 0) {
        return null;
    }

    foreach ($arr as $number) {
        $sum += $number;
    }

    return $sum / $length;
}
// END