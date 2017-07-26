<?php


#Data Types


/*
Strings are sequences of characters
Use single or double quotes ('' or "")
*/
$string = "This is a string";
var_dump($string);

/*
Integers are numbers between -(2^31) and 2^31 - 1
The three formats are decimal, hexadecimal (0x) and octal (0)
*/
$integer = 10;
var_dump($integer);

/*
Floats are numbers with decimals
*/
$float = 3.14;
var_dump($float);

/*
Booleans are logical values
They have two possible values: TRUE or FALSE
*/
$boolean = true;
var_dump($boolean);

/*
Arrays can store multiple values using indexes
*/
$array = array(1, 2, 3);
var_dump($array);

/*
Objects are data types that contain data and ways to process data
They are instances of classes
Classes are structures with certain properties/characteristics and methods/behaviors
*/
class Class {
    function method() {
        $this->property = 1;
    }
}
$object = new Class(); //object variable is instance of class Class
var_dump($object);
echo $object->property;

/*
Null data types only have the NULL value
Variables of NULL data type have no value assigned to them
Note declared variables without assigned values are assigned NULL by default
NULL can also be used to empty variables
*/
$null = null;
var_dump($null);


?>