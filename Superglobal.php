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
$GLOBALS is an array that contains global variables anywhere in the PHP script
Its indices are the names of the global variables
*/
$globvar = 10;
echo $GLOBALS["globvar"];

/*
$_SERVER is an array with information about headers, paths, and script locations
*/
echo $_SERVER['PHP_SELF'] . "<br>"; //return the name of this PHP script
//http://www.webopedia.com/TERM/H/hosting_server.html
echo $_SERVER['SERVER_NAME'] . "<br>"; //return name of the host server
echo $_SERVER['HTTP_REFERER'] . "<br>"; //return URL of page on which PHP script runs


?>