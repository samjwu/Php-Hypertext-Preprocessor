<?php


#Constants


/*
Constants are identifiers (names) for values that cannot be changed during a script
Constants are automatically global
Syntax: define(name, value, case-sensitivity)
*/

//Case-sensitive constant
define("CONSTANT", "1");
echo CONSTANT;

//Case-insensitive constant
define("CONSTANT", "1", true);
echo constant;

//Example of global behavior of constants
define("example", "123");
function test() {
        echo example;
}
test();


?>