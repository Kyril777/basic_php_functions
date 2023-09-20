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


// 
