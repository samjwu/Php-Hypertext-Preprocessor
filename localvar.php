<?php

#local variable


/*
local variables are declared within a function (local scope)
local variables can only be accessed within a function
*/
function runfunction() {
    $localvar = 5;
    echo "<p>localvar inside function is: $localvar</p>";
} 
runfunction();

//using local variables outside a function generates an error
echo "<p>localvar outside function is: $localvar</p>";


/*
to prevent a local variable from being deleted after the execution of a function,
use the static keyword
*/
function runfunction2() {
    //use static keyword before variable declaration
    static $localvar = 1;
    echo "<p>localvar inside function2 is: $localvar</p>";
    $localvar++;
}
runfunction2();
runfunction2();
runfunction2();


?>