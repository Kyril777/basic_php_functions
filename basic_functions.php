<?php
// Coin toss function.
function fair_coin() {
    $coin = (mt_rand(0,1) == 0) ? 'heads' : 'tails';
    return $coin;
}

echo fair_coin();


// Execute the echo command inside of the function (rather than globally).
function display_greeting($hello) {
    echo $hello;
}

display_greeting('Hello!');


// Average of three numbers.
function avg_of_3($x, $y, $z) {
    $avg = ($x + $y + $z)/3;
    return $avg;
}

$average = avg_of_3(4, 8, 12);
echo $average;


// Finds the square value of a number.
function square($x){
    $product = $x * $x;
    return $product;
}

$square_value = square(5);
echo $square_value;


// Cube value of a number (while passing the argument as a reference).
function cube(&$x){
    $product = $x * $x * $x;;
    return $product;
}

$value = 4;
$cubed_value = cube($value);
echo $cubed_value;


// Wrap HTML tags to a string.
function wrapped_in_tags(&$string, $tag){
    $pre = '<' . $tag . '>';
    $post = '<' . $tag . '>';
    $string = $pre . $string . $post;
}

$title = 'The World Champion.';
wrapped_in_tags($title, 'h1');
echo $title;


// Find the maximum value of an array.
function maxValue($items){
   $n = count($items);
   $max = $items[0];
   for ($i = 1; $i < $n; $i++)
       if ($max < $items[$i])
           $max = $items[$i];
    return $max;      
}
 
// Find the minimum value of an array.
function minValue($items){
   $n = count($items);
   $min = $items[0];
   for ($i = 1; $i < $n; $i++)
       if ($min > $items[$i])
           $min = $items[$i];
    return $min;      
}
 
// Driver code
$items = array(101, 84, 53, 76, 200);
echo(maxValue($items)); // Output: 200
echo(minValue($items)); // Output: 53
