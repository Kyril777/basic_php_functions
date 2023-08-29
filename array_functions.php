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


