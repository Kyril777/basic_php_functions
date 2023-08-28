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
