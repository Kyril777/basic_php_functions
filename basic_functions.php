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
