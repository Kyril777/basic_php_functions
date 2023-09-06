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


// The array_search() function searches the array for a given value and returns the first corresponding key if successful.
// Use array_search to find the key from an array of countries.
$countries = array(0 => 'Argentina', 1 => 'Bolivia', 2 => 'Brazil', 3 => 'Chile', 4 => 'Colombia', 5 => 'Ecuador', 6 => 'Guyana', 7 => 'Paraguay', 8 => 'Peru', 9 => 'Suriname', 10 => 'Urugay', 11  => 'Venezula');

print_r($key = array_search('Guyana', $countries)); // Output: 6
print_r($key = array_search('Brazil', $countries));   // Output: 2


// The array_reverse() function returns an array with elements in reverse order.
// Use array_reverse() to reverse the order of a cheese array.
$cheeses = array('manchego', 'cabrales', 'garrotxa', 'tetilla', 'roncal');

print_r($key = array_reverse($cheeses));   
/* Output:
Array
(
    [0] => roncal
    [1] => tetilla
    [2] => garrotxa
    [3] => cabrales
    [4] => manchego
)
*/


// The array_shift() function shifts an element off the beginning of array.
// Use array_shift() function to promote a champion out of an array of ranked contenders.

$contenders = array(0 => 'Marvin Marciano', 1 => 'Argentina Firpo', 2 => 'Larry LaLonde', 3 => 'Errol Ortiz', 4 => 'Vernon Wright');
$champion = array_shift($contenders);

print_r($contenders);
/* Output:
Array
(
    [0] => Argentina Firpo
    [1] => Larry LaLonde
    [2] => Errol Ortiz
    [3] => Vernon Wright
)
*/

print_r($champion); // Output: Marvin Marciano


// The array_shift() function shifts an element off the beginning of array.
// Use array_shift() function to promote a champion out of an array of ranked contenders.
$contenders = array(0 => 'Marvin Marciano', 1 => 'Argentina Firpo', 2 => 'Larry LaLonde', 3 => 'Errol Ortiz', 4 => 'Vernon Wright');
$champion = array_shift($contenders);

print_r($contenders);
/* Output:
Array
(
    [0] => Argentina Firpo
    [1] => Larry LaLonde
    [2] => Errol Ortiz
    [3] => Vernon Wright
)
*/

// The array_splice() function removes a portion of the array and replace it with something else.
// Use array_splice() to remove the last contender.
$contenders1 = array_splice($contenders, -1);
print_r($contenders);
/* Output:
Array
(
    [0] => Argentina Firpo
    [1] => Larry LaLonde
    [2] => Errol Ortiz
)
*/

print_r($champion); // Output: Marvin Marciano
