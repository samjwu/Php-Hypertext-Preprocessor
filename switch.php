<?php


#Switch

/*
Switch statements are a special type of conditional
They can have multiple conditions
They allow only one block of code to be executed
and break as soon as one of the conditions has been met
*/
$conditions = "C";
switch ($conditions) {
    case "A":
        echo "Case 1";
        break;
    case "B":
        echo "Case 2";
        break;
    case "C":
        echo "Case 3";
        break;
    default:
        echo "Default Case";
}


?>