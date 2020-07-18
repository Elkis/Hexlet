<?php

// BEGIN (write your solution here)
function isPalindrome($text) {
    
    $length = strlen($text);
    $flippedText = '';

    if ($length != 0 || $length > 1) {
      for ($i=1; $i <= $length; $i++) {
        $flippedText .= $text[-$i];
      }
    } else {
        return true;
    }
    
    if ($flippedText === $text) {
      return true;
    } else {
      return false;
    }
    

}
isPalindrome('mam');
// END
