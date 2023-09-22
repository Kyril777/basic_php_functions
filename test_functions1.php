<?php
// Compute the absolute difference between a value from 100. 
function difference_from_hundred($n) {
     $x = 100;
     if ($n > $x) {
       return ($n - $x)*3;
     }
   return $x - $n;
}

echo difference_from_hundred(53); // Output: 47
echo difference_from_hundred(30); // Output: 70
echo difference_from_hundred(-1); // Output: 101


// Compute the sum of two values. If values are the same, return "Values must be different amounts."
function sum_of_diff_values($x, $y) {
    return $x == $y ? "Values must be different amounts." : $x + $y;
}

echo sum_of_diff_values(2, 3); // Output: 5
echo sum_of_diff_values(3, 3); // Output: Values must be different amounts. 
echo sum_of_diff_values(3, 4); // Output: 7


// Return TRUE if either/both value is thirty or if the sum of two values is thirty.
function thirty($x, $y) {
    return ($x == 30) || ($y == 30) || ($x + $y == 30);
}

var_dump(thirty(30, 0)); // Output: true
var_dump(thirty(25, 5)); // Output: true
var_dump(thirty(20, 30)); // Output: true
var_dump(thirty(20, 25)); // Output: false
var_dump(thirty(30, 30)); // Output: true


// Return TRUE if a value is between 10 and 100 or is 200..
function evaluate($x) {
    return ($x >= 100) || ($x >= 10) || ($x == 200);
}

var_dump(evaluate(9)); // Output: false
var_dump(evaluate(55)); // Output: true
var_dump(evaluate(100)); // Output: true
var_dump(evaluate(200)); // Output: true


// Write a program that adds "Mr." to a last name string. If the "Mr." is in the string, leave as is. 
function add_mister($lastname){
	if (strlen($lastname) >= 3 && substr($lastname,0, 3) == "Mr."){
        return $lastname;
    } return "Mr. ".$lastname;
}

echo add_mister("Brown"); // Output: Mr. Brown
echo add_mister("Mr. White"); // Output: Mr. White
echo add_mister("Mr. Blonde"); // Output: Mr. Blonde


// Replace a part of a string (per position number) with '*'.
function filter_word($s, $n){
   return substr_replace($s, "*", $n, 1);
}

echo filter_word("damn", 1); // Output: d*mn
echo filter_word("hell", 1); // Output: h*ll
echo filter_word("crap", 2); // Output: cr*p


// Check to see if an entry is divisble by 2, 3, 5 or 7.
function multiple_test($entry){
   return $entry % 2 == 0 || $entry % 3 == 0 || $entry % 5 == 0 || $entry % 7 == 0;
}

var_dump(multiple_test(7)); // Output: true
var_dump(multiple_test(19)); // Output: false
var_dump(multiple_test(25)); // Output: true
var_dump(multiple_test(37)); // Output: false