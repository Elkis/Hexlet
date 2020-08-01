<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function swap(array $arr, int $index)
{
   $length = count($arr);
   if ($index === 0 || $index >= ($length - 1)) {
       return $arr;
   } else {
       $before = $index - 1;
       $after = $index + 1;
       $temp = $arr[$before];
       $arr[$before] = $arr[$after];
       $arr[$after] = $temp;
       return $arr;
   }
}
// END