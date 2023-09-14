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
