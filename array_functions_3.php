<?php
// The arsort() function sorts an array in descending order and maintain index association.
// Use arsort() to sort an array of last names in descending order..
$names = array("4" => "Gonzales", "2" => "Sanchez", "3" => "Rojas", "1" => "Menendez", "5" => "Alonzo");
arsort($names);
foreach ($names as $key => $value) {
    echo "$key = $value\n";
}
/* Output:
2 = Sanchez
3 = Rojas
1 = Menendez
4 = Gonzales
5 = Alonzo
*/

// The asort() function sorts an array in ascending order and maintain index association.
// Use asort() to sort an array of last names in asscending order.
$nombres = array("4" => "Guerrero", "2" => "Herrera", "3" => "Zarragoza", "1" => "Cabrera", "5" => "Arroyo");
asort($nombres);
foreach ($nombres as $key => $value) {
    echo "$key = $value\n";
}
/* Output:
5 = Arroyo
1 = Cabrera
4 = Guerrero
2 = Herrera
3 = Zarragoza
*/


// The compact() function creates an array containing variables and their values.
// Use compact() to create an array from a collection of variables and values.
$food  = "grilled steak";
$sport = "baseball";
$city = "Philadelphia, PA";
$school = "Saint Joseph's Catholic";
$name = "Fred Goshen";
$hometown = "Stockton, NJ";

$favorites = array("food", "sport");
$places = array("city", "school", "hometown");

$result = compact("name", $favorites, $places);
print_r($result);

/* Output:
Array
(
    [name] => Fred Goshen
    [food] => grilled steak
    [sport] => baseball
    [city] => Philadelphia, PA
    [school] => Saint Joseph's Catholic
    [hometown] => Stockton, NJ
)
*/


// The current() function returns the current element in an array.
// Use next(), prev() and end() functions to move the position of an array. Use the current() function to determine the current location.
$worlds = array('Grass Land', 'Desert Land', 'Water Land', 'Giant Land', 'Sky Land', 'Ice Land', 'Pipe Land', 'Dark Land');

// The starting point.
var_dump(current($worlds));// Output: string(10) "Grass Land"

// Move forward to two worlds. 
next($worlds);  // Currently in 'Desert Land.'
next($worlds);  // Currently in 'Water Land.'
var_dump(current($worlds)); // Output: string(10) "Water Land"

// Move to the last world. 
end($worlds);  // Currently in 'Dark World.'
var_dump(current($worlds)); // Output: string(9) "Dark Land"

// Move backward to one world. 
prev($worlds); // Currently in 'Pipe Land.'
var_dump(current($worlds)); // string(9) "Pipe Land"


// The extract() function imports variables into the current symbol table from an array.
// Use extract() to pick elements out of a weapons array and a gear array, and assign it to two soldiers.
$weapons = array("standard" => "normal rifle", "long range" => "wide gun", "launcher1" => "rocket gun", "launcher2" => "hyper bazooka", "shield breaker" => "3-way gun");
$gear = array("light" => "flare", "medicine" => "tonic", "footwear" => "iron boots", "headgear" => "helmet");
extract($weapons, EXTR_OVERWRITE);
extract($gear, EXTR_OVERWRITE);

$super_joe = array($standard, $medicine, $footwear); 
var_dump($super_joe);
/* Output:
array(3) {
  [0]=>
  string(12) "normal rifle"
  [1]=>
  string(5) "tonic"
  [2]=>
  string(10) "iron boots"
}
*/

$rad_spencer = array($launcher1, $light, $headgear); 
var_dump($rad_spencer);
/* Output:
array(3) {
  [0]=>
  string(10) "rocket gun"
  [1]=>
  string(5) "flare"
  [2]=>
  string(6) "helmet"
}
*/


// The key() function returns the index element of the current array position.
// Use key() to find the keys containing the value of 'New Jersey'.
$people = array('Dawn' => 'New Jersey', 'Jonathan' => 'New York', 'Dino' => 'Pennsylvania', 'Flo' => 'New Jersey', 'Amelia' => 'New Jersey', 'Leo' => 'New York');

// While loop to cycle through associative array key where value equals 'New Jersey.'
while ($home_state = current($people)) {
    if ($home_state == 'New Jersey') {
        echo key($people), "\n";
    }
    next($people);
}

// Output: Dawn, Flo, Amelia
