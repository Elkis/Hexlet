<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getSameCount($firstArr, $secondArr)
{
    $unique = 0;
    $temp = [];
    foreach ($firstArr as $first) {
        if (in_array($first, $temp)) {
            continue;
        } else {
            foreach($secondArr as $second) {
                if ($first === $second && (in_array($second, $temp) === false)) {
                    $unique++;
                    $temp[] = $first;
                } else {
                    continue;
                }
            }
        }
    }
    return $unique;
}