<?php

namespace App\Strings;

// BEGIN (write your solution here)
function countUniqChars($str)
{
    if (strlen($str) > 0) {
        $arr = str_split($str);
        $unique = [];
        foreach($arr as $index => $letter) {
            if (in_array($letter, $unique) === false) {
                $unique[] = $letter;
            }
        }
        return count($unique);
    } else {
        return 0;
    }
    
}
// END