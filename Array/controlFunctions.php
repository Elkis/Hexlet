<?php

namespace App\Arrays;

// BEGIN (write your solution here)
function getTotalAmount(array $wallet, string $currency)
{
    $ammount = 0;
    foreach ($wallet as $money) {
        if (strpos($money, $currency) !== false) {
            $arrmoney = explode(" ", $money);
            $ammount += intval($arrmoney[1]);
        }
    }
    return $ammount;
}
// END