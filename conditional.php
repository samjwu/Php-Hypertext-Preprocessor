<?php


#Conditionals

/*
Conditionals execute code contained in a block if a certain requirement is met (the condition)
if: independent conditional that executes if the condition is true
elseif: interdependent conditional that executes if the "if" condition is false and the "elseif" condition is true
else: interdependent conditional that executes if all other conditions are false
*/
$condition1 = false;
$condition2 = false;
if ($condition1) {
    echo "Condition 1 is true";
}
elseif ($condition2) {
    echo "Condition 1 is false and Condition 2 is true";
}
else {
    echo "Condition 1 and 2 are both false";
}


?>