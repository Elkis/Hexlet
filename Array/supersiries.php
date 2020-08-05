<?php

namespace App\Superseries;

// BEGIN (write your solution here)
function getSuperSeriesWinner(array $scores)
{   
    $canada = 0;
    $ussr = 0;
    foreach ($scores as $match) {
        $temp = $match[0]<=> $match[1];
        if ($temp === 0) {
            continue;
        } elseif ($temp === 1) {
            $canada++;
        } else {
            $ussr++;
        }
    }
    if ($canada < $ussr) {
        return 'ussr';
    } elseif ($canada > $ussr) {
        return 'canada';
    } else {
        return null;
    }
}
// END