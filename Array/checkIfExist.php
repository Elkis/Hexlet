<?php 

namespace App\Arrays;

// BEGIN (write your solution here)
function get(array $arr, $index, $value = null)
{
    if (array_key_exists($index, $arr)) {
        return $arr[$index];
    } else {
        return $value;
    }
}
// END