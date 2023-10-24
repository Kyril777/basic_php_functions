<?php
// Remove the last word in a string.
function remove_last_word($entry) {
	echo preg_replace('/\W\w+\s*(\W*)$/', '$1', $entry)."\n";
}
remove_last_word('four score and seven'); // Output: "four score and"

// Remove white spaces in a string.
function remove_white_spaces($entry) {
	echo preg_replace('/\s+/', '', $entry)."\n";
}
remove_white_spaces('four score and seven'); // Output: "fourscoreandseven"

// Remove non-numeric characters except for dot.
function remove_non_numeric($amount) {
	echo preg_replace("/[^0-9.]/", "", $amount)."\n";
}
remove_non_numeric('$79,203.64USD'); // Output: 79203.64

// 

