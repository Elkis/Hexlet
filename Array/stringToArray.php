<?php

namespace App\Strings;

// BEGIN (write your solution here)
function makeCensored(string $sentence, $censoredWords)
{
    $arr = explode(" ", $sentence);
    $newArray = [];
    if (count($censoredWords) === 1) {
        foreach ($arr as $word) {
            $word === $censoredWords[0] ? $newArray[] = "$#%!" : $newArray[] = $word;
        }
    } elseif (count($censoredWords) === 2) {
        foreach ($arr as $word) {
            $word === $censoredWords[0] || $word === $censoredWords[1] ? $newArray[] = "$#%!" : $newArray[] = $word;
        }
    } else {
        return "I cant'hold more censore ... yet"
    }
    
    return implode(" ", $newArray);
}
// END