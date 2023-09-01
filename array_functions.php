<?php
// Merge two arrays using the array_merge_recursive() function.
$garage1 = array("cars" => array("favorite" => "Volvo", "sale" => "Range Rover", "sale" => "Sedona", "new" => "Ferrari"));
$garage2 = array("cars" => array("new" => "Porsche", "favorite" => "Mercedes", "favorite" => "BMW", "sale" => "Audi"));
$combinedGarage = array_merge_recursive($garage1, $garage2);
print_r($combinedGarage);

/* Ouput:
Array
(
    [cars] => Array
        (
            [favorite] => Array
                (
                    [0] => Volvo
                    [1] => BMW
                )

            [sale] => Array
                (
                    [0] => Sedona
                    [1] => Audi
                )

            [new] => Array
                (
                    [0] => Ferrari
                    [1] => Porsche
                )
        )
)
*/

// The array_slice() returns the sequence of elements from the array array as specified by the offset and length parameters.
$pasta = array("spaghetti", "penne", "maracorni", "farfalle", "orecchiette");

print_r(array_slice($pasta, 2)); // Output: Array ( [0] => maracorni [1] => farfalle [2] => orecchiette ) 
print_r(array_slice($pasta, 2, -1)); // Output: Array ( [0] => maracorni [1] => farfalle )
print_r(array_slice($pasta, 2, -1, true)); // Output: // Array ( [2] => maracorni [3] => farfalle )
print_r(array_slice($pasta, 1)); // Array ( [0] => penne [1] => maracorni [2] => farfalle [3] => orecchiette )
print_r(array_slice($pasta, -1)); // Array ( [0] => orecchiette )


// The array_count_values() returns an array using the values of array (which must be ints or strings) as keys and their frequency in array as values.

$pastas = array("orecchiette", "spaghetti", "penne", "maracorni", "spaghetti", "farfalle", "orecchiette", "maracorni");
print_r(array_count_values($pastas)); // Output: Array ( [orecchiette] => 2 [spaghetti] => 2 [penne] => 1 [maracorni] => 2 [farfalle] => 1 )


// array_combine() creates an array by using one array for keys and another for its values.
$state = array('New Jersey', 'Pennsylvania', 'Maryland');
$capital = array('Trenton', 'Harrisburg', 'Annapolis');
$combinedArray = array_combine($state, $capital);

print_r($combinedArray);

/* Output:
Array
(
    [New Jersey] => Trenton
    [Pennsylvania] => Harrisburg
    [Maryland] => Annapolis
)
*/


// array_map() returns an array containing the results of applying the callback to the corresponding value of array
// Use array_map() to square each value of an array.
function square($n) {
    return ($n * $n);
}

$nums = [1, 2, 3, 4, 5];
$squared = array_map('square', $nums);
print_r($squared);

/* Output:
Array
(
    [0] => 1
    [1] => 4
    [2] => 9
    [3] => 16
    [4] => 25
)
*/

// Use array_map() to cube each value of an array.
function cube($n)
{
    return ($n * $n * $n);
}

$nums = [1, 2, 3, 4, 5];
$cubed = array_map('cube', $nums);
print_r($cubed);

/* Output:
Array
(
    [0] => 1
    [1] => 8
    [2] => 27
    [3] => 64
    [4] => 125
)
*/


// array_push() treats array as a stack, and pushes the passed variables onto the end of array. 
// Use array_push() function two add additional trucks in the 'truck' array.
$truck = array("chiller", "crane");
array_push($truck, "flatbed", "tipper");
print_r($truck);

/* Ouput:
Array
(
    [0] => chiller
    [1] => crane
    [2] => flatbed
    [3] => tipper
)
*/



