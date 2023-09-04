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


// The array_replace() function replaces elements from passed arrays into the first array.
// Use array_replace() to replace an employee lineup and make later additions.
$employees = array("DeJong", "Suarez", "Muller", "Hall");
$replacements = array(0 => "Paulsen", 1 => "Garcia");
$addition = array(4 => "Martin", 5 => "Schuman");

$finalTeam = array_replace($employees, $replacements, $addition);
print_r($finalTeam);

/* Output:
Array
(
    [0] => Paulsen
    [1] => Garcia
    [2] => Muller
    [3] => Hall
    [4] => Martin
    [5] => Schuman
)
*/


// The array_replace_recursive function replaces elements from passed arrays into the first array recursively.
// Use array_replace_recursive to replace spices per region.
$spices = array('northenEurope' => array( "chives", "juniper") , 'mediterranean' => array("rosemary", "sage", "thyme"), 'westernAsia' => array("poppy", "tarragon", "bay leaf"));
$replacements = array('northenEurope' => array('horseradish'), 'mediterranean' => array('cumin'), 'westernAsia' => array("dill", "marjoram", "garlic"));


$rack = array_replace_recursive($spices, $replacements);
print_r($rack);

/* Output:
Array
(
    [northenEurope] => Array
        (
            [0] => horseradish
            [1] => juniper
        )

    [mediterranean] => Array
        (
            [0] => cumin
            [1] => sage
            [2] => thyme
        )

    [westernAsia] => Array
        (
            [0] => dill
            [1] => marjoram
            [2] => garlic
        )
)
*/


// The array_intersect() function returns an array containing all the values of array that are present in all the arguments. 
// Use array_intersect() to find a common value between each arrays.
$chemist = [
	"name" => "William Lane",
	"degree" => "PhD",
	"tenure" => "yes",
	"school" => "Rutgers"
];

$physicist = [
	"name" => "Allan Goethe",
	"degree" => "MS",
	"tenure" => "no",
	"school" => "Rutgers"
];

$mathematician = [
	"name" => "Fiona Hughes",
	"degree" => "PhD",
	"tenure" => "no",
	"school" => "Rochester"
];

$firstComparison = array_intersect($chemist, $physicist);
print_r($firstComparison);
/* Output:
Array
(
    [school] => Rutgers
)
*/


$secondComparison = array_intersect($chemist, $mathematician);
print_r($secondComparison);
/* Output:
Array
(
    [degree] => PhD
)
*/

$thirdComparison = array_intersect($physicist, $mathematician);
print_r($thirdComparison);
/* Output:
Array
(
    [tenure] => no
)
*/


$fruits = array("apple", "banana", "cantaloupe", "dragon fruit", "elderberry", "fig");

print_r(array_chunk($fruits, 3));
/* Output:
Array
(
    [0] => Array
        (
            [0] => apple
            [1] => banana
            [2] => cantaloupe
        )

    [1] => Array
        (
            [0] => dragon fruit
            [1] => elderberry
            [2] => fig
        )
)
*/

print_r(array_chunk($fruits, 2, true));
/* Output:
Array
(
    [0] => Array
        (
            [0] => apple
            [1] => banana
        )

    [1] => Array
        (
            [2] => cantaloupe
            [3] => dragon fruit
        )

    [2] => Array
        (
            [4] => elderberry
            [5] => fig
        )
)
*/
