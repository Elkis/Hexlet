<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getSameParity(array $arr)
{   
    if (empty($arr)) {
        return $arr;
    }
    $flag = false;
    if ($arr[0] % 2 === 0) {
        $flag = true;
    }

    $newArr = [];
    foreach ($arr as $number) {
        if (($number % 2 === 0) === $flag) {
            $newArr[] = $number;
        }
    }
    return $newArr;
}
// END