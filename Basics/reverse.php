<?php

namespace App\Number;

// BEGIN (write your solution here)
function reverse(int $number) {
    $str = strval($number);
    $rev = strrev($str);
    if ($number < 0) {
      $rev = $rev[-1] . $rev;
    }
    $int = intval($rev);
    return $int;
   
}
// END
reverse(-37);