<?php


#For Loop

/*
For loops run code based on a condition that is initially specified
The condition is usually a counter, though anything that can be iterated on will work, such as arrays
*/
for ($counter = 0; $counter <= 10; $counter++) {
    echo: "$counter<br>";
}

/*
For Each loops will only work on arrays
They loop through each key value pair in the array
*/
$array = array("1", "2", "3");
foreach ($array as $number) {
    echo "$number<br>";
}


?>