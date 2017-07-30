<?php


#Array Sorting

/*
PHP has several built-in functions for sorting arrays:
*/
$words = array("Art", "Book", "Calligraphy");
$numbers = array(1, 2, 3);
$wordrank = array("Art" => 1, "Book" => 2, "Calligraphy" => 3);

/*
The sort() function sorts indexed arrays in ascending order
The rsort() function sorts indexed arrays in descending order
*/
sort($words);
sort($numbers);
rsort($words);
rsort($numbers);

/*
The ksort() function sorts associative arrays in ascending order by key
The krsort() function sorts associative arrays in descending order by key
*/
ksort($wordrank);
krsort($wordrank);

/*
The asort() function sorts associative arrays in ascending order by value
The arsort() function sorts associative arrays in descending order by value
*/



?>