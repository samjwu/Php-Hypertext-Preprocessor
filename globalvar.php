<?php

#global variable


/*
global variables are declared outside a function (global scope)
global variables can only be accessed outside a function
*/
$globalvar = 10;

function runfunction() {
    //using global variables inside a function generates an error
    echo "<p>globalvar inside function is: $globalvar</p>";
} 
runfunction();

echo "<p>globalvar outside function is: $globalvar</p>";


/*
to access a global variable in a function, use the global keyword
*/
function runfunction2() {
    //use global keyword before variable declaration
    global $globalvar;
    echo "<p>globalvar inside function2 is: $globalvar</p>";
}
runfunction2();


/*
global variables can also be accessed from a global array $GLOBALS[index]
index the the variable name (key) used to get the value of the variable
*/
function runfunction3() {
    echo "<p>globalvar inside function2 is: $GLOBALS['globalvar']</p>";
}
?>