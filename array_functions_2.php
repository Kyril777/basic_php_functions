<?php
// Array_pad() function pads array to the specified length with a value.
$input = array(7, 11, 13);

// Use array_pad() to turn $input array into 5 values padded towards the end with the '9' value.
$result1 = array_pad($input, 5, 9);
print_r($result1);
// result is array(7, 11, 13, 9, 9)

// Use array_pad() to turn $input array into 7 values padded in the beginning with the '0' value.
$result2 = array_pad($input, -7, 0);
print_r($result2);
// result is array(0, 0, 0, 0, 7, 11, 13)


// The array_pop() function removes the last element of the array.
// Use array_pop() to remove the last album in an array. Also, print out the removed element.
$albums = array("Tommy", "A Quick One", "The Who Sell Out", "Who's Next", "Quadrophenia");
 
// Remove last array item.
$removed = array_pop($albums);
print_r($albums);
/* Output:
Array
(
    [0] => Tommy
    [1] => A Quick One
    [2] => The Who Sell Out
    [3] => Who's Next
)
*/

// Print  deleted item.
print_r($removed); // Output: Quadrophenia


// The array_rand() picks one or more random keys out of an array. The num parameter specifies how many entries should be picked.
// Use array_rand() to pick from an array of monsters.
$monsters = array("Vampire", "Frankenstein's Monster", "Wolfman", "Mummy", "Witch");
$rand_keys = array_rand($monsters, 2);
echo $monsters[$rand_keys[0]] . "\n";
echo $monsters[$rand_keys[1]] . "\n"; // "Vampire" will never be picked as the selection starts at [1] key.


// The array_reduce() function iteratively reduces the array to a single value using a callback function.
// Use array_reduce() to concatenate an array into one single value with components separated by a hyphen.
function concatenateFunction($v1,$v2)
{
return $v1 . "-" . $v2;
}
$musketeers=array("Athos","Portos","Aramis", "D'Artagnan");
print_r(array_reduce($musketeers,"concatenateFunction"));
/* Output: -Athos-Portos-Aramis-D'Artagnan */


// Use array_reduce() to figure out the sum and the product of a set of primes.
function sum($carry, $item){
    $carry += $item;
    return $carry;
}

function product($carry, $item){
    $carry *= $item;
    return $carry;
}

$primes = array(2, 3, 5, 7, 11);

var_dump(array_reduce($primes, "sum")); // Output: int(28)
var_dump(array_reduce($primes, "product", 1)); // Output: int(2310)
