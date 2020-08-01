<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function addPrefix(array $arr, $prefix)
{
    $newArray = [];
    $insertPrefix = $prefix . " ";
    
    for ($i = 0, $length = count($arr); $i < $length; $i++) {
        $newArray[] = $insertPrefix . $arr[$i];
    }
    return $newArray;
}
// END