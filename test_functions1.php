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


// Check to see if a certain value falls betweem the range of 25 to 75.
function check_value($value) 
{
   return $value >= 25 && $value <= 75;
}

var_dump(check_value(76)); // Output: false
var_dump(check_value(1)); // Output: false
var_dump(check_value(50)); // Output: true
var_dump(check_value(25)); // Output: true 
var_dump(check_value(75)); // Output: true


// Find out the maximum value in a set of three integers.
function test($x, $y, $z){
  $max = max($x, max($y, $z));
  return $max;
}

echo test(22, 42, 16); // Output: 42
echo test(38, 54, 80); // Output: 80
echo test(5, 3, 7); // Output: 7
echo test(-9, -1, -13); // Output: -1


// Check to see if a last name contains two a's.
function test($s) {
	$lname = strtolower($s);
	$ctr = 0;
	for ($i = 0; $i < strlen($lname); $i++) {
		if (substr($lname, $i, 1) == 'a') {
            $ctr++;
        }
    }
	return $ctr == 2;
}

var_dump(test("Haan")); // Output: true
var_dump(test("Olsen")); // Output: false
var_dump(test("Zazz")); // Output: true
var_dump(test("Aasen")); // Output: false


// Find out if the last digits of two integers are the same value.
function last_digits($int1, $int2) {
  return abs($int1 % 10) == abs($int2 % 10);
}

var_dump(last_digits(975, 64)); // Output: false
var_dump(last_digits(340, 90)); // Output: true
var_dump(last_digits(1, 127)); // Output: false
var_dump(last_digits(15, 55)); // Output: true


// Find out which two values are close to zero.
function close_to_zero($a, $b) {
   $n = 0;
   $abs_val1 = abs($a - $n);
   $abs_val2 = abs($b - $n);
   return $abs_val1 == $abs_val2 ? "Both are equally close to zero." : ($abs_val1 < $abs_val2 ? $a : $b);
}

echo close_to_zero(56, -56); // Output: Both are equally close to zero.
echo close_to_zero(-1, -2); // Output: -1
echo close_to_zero(25, 6); // Output: 6
echo close_to_zero(-4, 3); // Output: 3


// Find out if an array is ordered from low to high.
function ascending_values($values){ 
       for ($i = 0; $i < sizeof($values) - 1; $i++){
             if ($values[$i + 1] < $values[$i]) 
             return false;
          }
        return true;
    }  
    
var_dump(ascending_values([2, 3, 5, 7, 11])); // Output: true
var_dump(ascending_values([6, 6, 5, 4])); // Output: false
var_dump(ascending_values([10, 10, 10, 11])); // Output: true
var_dump(ascending_values([2, 4, 6, 8, 10, 9])); // Output: false


// Find how many names in an array has a specific length.
function name_length($name, $length){ 
	$counter = 0;
        for ( $i = 0;  $i < sizeof($name);  $i++){
                if (strlen($name[$i]) ==  $length)  $counter++;
            }
            return  $counter;
    }
    

echo name_length(["Jones", "Lean", "Monica", "Bret", "Carlos"], 4); // Output: 2


// Extract a number of odd numbers out of an integer.
function extract_odds($nums, $count) { 
      $evens = [$count];
        $j = 0;

        for ($i = 0; $j < $count; $i++) {
                if ($nums[$i] % 2 != 0) {
                    $evens[$j] = $nums[$i];
                    $j++;
                }
            }
            return $evens;
    }
    
$result = extract_odds([1, 2, 3, 4, 5, 6, 7, 8, 9, 10], 4);
echo implode(",", $result); // Outpit: 1, 3, 5, 7


// Add three integers. Remove duplicates from the sum.
function add_unique_numbers($x, $y, $z){
   if ($x == $y && $y == $z) return 0;
            if ($x == $y) return $z;
            if ($x == $z) return $y;
            if ($y == $z) return $x;
            return $x + $y + $z;
}
echo (add_unique_numbers(2, 3, 5))."\n"; // Output: 10
echo (add_unique_numbers(2, 2, 12))."\n"; // Output: 12
echo (add_unique_numbers(10, 10, 10))."\n"; // Output: 0
echo (add_unique_numbers(4, 7, 10))."\n"; // Output: 21
