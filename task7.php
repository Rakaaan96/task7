<?php

function isPalindrome($string) {
    // Remove spaces and punctuation, and convert to lowercase
    $string = preg_replace("/[^a-zA-Z0-9]/", "", strtolower($string));

    // Reverse the string
    $reversed = strrev($string);

    // Compare the original and reversed strings
    return $string === $reversed;
}

$string1 = "A man, a plan, a canal: Panama";
$string2 = "Hello, World!";
$string3 = "racecar";

echo "Is \"$string1\" a palindrome? " . (isPalindrome($string1) ? "Yes" : "No") . "\n";
echo "Is \"$string2\" a palindrome? " . (isPalindrome($string2) ? "Yes" : "No") . "\n";
echo "Is \"$string3\" a palindrome? " . (isPalindrome($string3) ? "Yes" : "No") . "\n";