<?php

namespace App\Arrays;

function apply(array $arr, $operationName, $index = null, $value = null)
{
    // BEGIN (write your solution here)
    if ($operationName === 'reset') {
        $arr = [];
    }
    if ($operationName === 'remove') {
        unset($arr[$index]);
    }
    if ($operationName === 'change') {
        $arr[$index] = $value;
    }
    return $arr;
    // END
}