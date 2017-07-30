<?php


#Arrays

/*
PHP has three types of arrays: indexed, associative, and multidimensional
*/

/*
Indexed arrays use numbers to access values
*/
$indexedarray = array("Value1", "Value2", "Value3");
echo "There are" . count($indexedarray) . "keys.<br>";
echo "0:" . $indexedarray[0] . "1:" . $indexedarray[1] . "2:" . $indexedarray[2] . "<br>";

/*
Associative arrays use strings or keys to access values
*/
//Initialization method 1
$associativearray1 = array("key1"=>"val1", "key2"=>"val2", "key3"=>"val3");
//Initializiation method 2
$associativearray2["key1"] = "val1";
$associativearray2["key2"] = "val2";
$associativearray2["key3"] = "val3";
//Looping over using foreach
foreach ($associativearray2 as $key => $value) {
    echo "Key:" . $key . " Value:" . $value . "<br>";
}

/*
Multidimensional arrays contain arrays in their arrays
They use multiple indices to select elements
(Visualize as a matrix)
*/
$multidimarray = array(
    array("00", "01", "02"),
    array("10", "11", "12"),
    array("20", "21", "22")
);
//Use nested for loops to access the elements of a multidimensional array
for ($y = 0; $y <= 2; $y++) {
  for ($x = 0; $x <= 2; $x++) {
    echo $multidimarray[$y][$x] . " ";
  }
  echo "<br>";
}


?>