<?php
// Create a new array from the first two elements of a given array.
function count_evens($nums) { 
     $evens = 0;
      for ($i = 0; $i < sizeof($nums); $i++) {
            if ($nums[$i] % 2 == 0) $evens++;
          }
      return $evens;
}   

echo count_evens([2, 5, 11, 16, 21, 32] ); // Output: 3


// Create a new array from the first two elements of a given array.
function create_new_array($names){ 

      if (sizeof($names) >= 2){
            $first_elems = [$names[0], $names[1]];
        }
      else if (sizeof($names) > 0){
            $first_elems = [$names[0]];
        } else {
            $first_elemss = [];
        }
      return $first_elems;
 }   
$result = create_new_array(["Robert Walpole", "Spencer Compton", "Harry Pelham", "Thomas Pellham-Holles", "William Cavendish"] );

echo implode(', ', $result); // Output: Robert Walpole, Spencer Compton
