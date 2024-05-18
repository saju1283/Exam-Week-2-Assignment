<?php
function countVowels($string) {  
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
  
    for ($i = 0; $i < strlen($string); $i++) {
        if (in_array($string[$i], $vowels)) {
            $count++;
        }
    }

    return $count;
}

function reverseString($string) {
   return strrev($string);
}

$strings = ["Hello", "World", "PHP", "Programming"];

foreach ($strings as $string) {
    $vowelCount = countVowels($string);
    $reversedString = reverseString($string);

    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedString"."<br/>";
}
?>
