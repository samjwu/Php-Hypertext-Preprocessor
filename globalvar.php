<?php

#global variable
/*
global variables are declared outside a function (global scope)
global variables can only be accessed outside a function
*/
$globalvar = 10;

function runfunction() {
    //using global variables inside a function generates an error
    echo "<p>Variable inside function is: $globalvar</p>";
} 
runfunction();

echo "<p>Variable outside function is: $globalvar</p>";

?>