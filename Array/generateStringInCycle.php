<?php

namespace App\Strings;

// BEGIN (write your solution here)
function buildDefinitionList(array $values)
{   
    if (empty($values)) {
        return "";
    }
    $result = [];
    foreach ($values as $definition) {
        $result[] = "<dt>{$definition[0]}</dt><dd>{$definition[1]}</dd>";
    }
    $concatinateValue = implode("", $result);
    $result = "<dl>{$concatinateValue}</dl>";
    return $result;
}
// END
