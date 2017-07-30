<?php


#Array Sorting

/*
PHP has several built-in functions for sorting arrays:
*/

/*
The sort() function sorts indexed arrays in ascending order
The rsort() function sorts indexed arrays in descending order
*/
$words = array("Art", "Book", "Calligraphy");
$numbers = array(1, 2, 3);
sort($words);
sort($numbers);
rsort($words);
rsort($numbers);


?>