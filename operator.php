<?php


#Operators



$var1 = 10;
$var2 = 1;
$var3 = "abc";
$var4 = "def";

/*
Arithmetic Operators: +, -, *, /, %, **
*/

/*
Assignment Operators: =, +=, -=, *=, /=, %=
*/

/*
Comparison Operators: ==, ===, != (<>), !==, >, <, >=, <=
*/
var_dump($var1 === $var2); //"Identical" (===) returns true only if type and value are the same
var_dump($var1 === $var2); //<> is another form of "Not equal" (!=)
var_dump($var1 !== $var2); //"Not Identical" (!==) returns false only if type and value are same

/*
Increment/Decrement Operators: ++, --
*/
echo ++$var1; //Pre-increment increases value before returning
echo $var1++; //Post-increment increases value after returning
echo --$var1; //Pre-decrement decreases value before returning
echo $var1--; //Post-decrement decreases value after returning

/*
Logical Operators: and (&&), or (||), xor, !
*/

/*
String Operators: ., .=
*/
echo $var3 . $var4; //concaternation (attach strings together)

//concaternation assignment changes the lefthand variable
$var3 .= $var4;
echo $var3;

/*
Array Operators: +, ==, ===, != (<>), !==
*/
//http://php.net/manual/en/language.types.array.php
$array1 = array("a" => "1", "b" => "2");
$array2 = array("c" => "3", "d" => "4");

//http://php.net/manual/en/function.print-r.php
print_r($array1 + $array2); //Union (+)

print_r($array1 == $array2); //Equality (==) is true if key/value pairs are same order

print_r($array1 === $array2); //Identity (===) is true if key/value pairs are same type/order

print_r($array1 <> $array2); //Inequality (!= or <>)

print_r($array1 !== $array2); //Non-identity (!==)


?>