<?php


#Superglobals

/*
Superglobals are built-in variables that are always accessible, regardless of scope 
They can be accessed from any function, class or file
This is the list:
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

/*
$GLOBALS is a global array that contains global variables anywhere in the PHP script
Its indices are the names of the global variables
*/
$globvar = 10;
echo $GLOBALS["globvar"];


?>