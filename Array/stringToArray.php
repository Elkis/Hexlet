<?php

namespace App\Strings;

// BEGIN (write your solution here)
function makeCensored(string $sentence,array $censoredWords)
{
    $arr = explode(" ", $sentence);
    foreach ($arr as $index => $word) {
        foreach ($censoredWords as $censore) {
            if ($word === $censore) {
                $arr[$index]= "$#%!";
            }
        }
    }
    return implode(" ", $arr);
}
// END
