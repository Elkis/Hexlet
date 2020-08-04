<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function isContinuousSequence(array $arrNumbers)
{
    $length = count ($arrNumbers);
    if ($length > 1) {
        $temp = 0;

        foreach ($arrNumbers as $index => $number) {
            if ($index === 0) {
                $temp = $number;
                continue;
            } else {
                if ($temp === ($number - 1)) {
                    $temp = $number;
                    continue;
                } else {
                    return false;
                }
            }
            $temp = $number;
        }
        return true;
    } elseif ($length === 1) {
        return false;
    } else {
        return false;
    }
}
// END