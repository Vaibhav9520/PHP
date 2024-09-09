<!-- 1. PHP Data Types
PHP supports multiple data types, including:

String: A sequence of characters.
Integer: Whole numbers (positive or negative).
Float: Numbers with decimal points.
Boolean: True or false values.
Array: A collection of values in an indexed or associative format.
Object: Instances of classes, used in Object-Oriented Programming.
NULL: Represents a variable with no value. -->

<?php
//String
// $Name = "Vaibhav Singh";
// echo $Name;

//Integer
// $a = 5;
// $b = 6;
// $c = $a + $b;
// echo "Sum of A and B is: ".$c;

//Float
// $a = 4.65;
// echo "The Float Number is: ".$a;

//Boolean
// $isFlag = true;
// echo "Boolean value is: ".$isFlag;

//Array
// $arr = array("Hindi","English","Maths","Science");
// print_r($arr); 

//Objects
// $object = (object) ["name" => "John"]; 
// $null = NULL;
// echo $object;

// 2. PHP Variables
// Variables in PHP start with the $ symbol and can hold different types of data. PHP is a loosely typed language, so variable types are determined based on the assigned value.
// $name = "Vaibhav Singh";
// $age = 20;
// echo "I'm $name and my age is $age year's old."

// 3. PHP Constants
// Constants are defined using the define() function or using const keyword and cannot be changed once defined.

// const PI = 3.1473;
// echo "The Value of Pi: ".PI;

// const GREETING = "Good Morning";
// echo "GREETING: ".GREETING;

// 4. PHP Expressions
// An expression is any combination of variables, constants, and operators that can be evaluated to a value.

// const a = 5;
// const b = 7;
// const sum = a + b;
// echo "Sum of A and B is: ".sum;

// 5. PHP Operators
// PHP supports a variety of operators:

// Arithmetic Operators: +, -, *, /, % for mathematical operations.
// Assignment Operators: =, +=, -=, *=, etc.
// Comparison Operators: ==, !=, >, <, >=, <=
// Logical Operators: &&, ||, ! for logical expressions.

// const a = 5;
// const b = 8;

// echo "Addition: ".a+b."<br>";
// echo "Subtraction: ".a-b."<br>";
// echo "Multiply: ".a*b."<br>";
// echo "Division: ".a/b."<br>";
// echo "Modulo: ".a%b."<br>";

// 6. PHP Control Structures
// PHP provides control structures for decision-making:

// if: Executes if a condition is true.
// else: Executes if the condition in the if is false.
// elseif: Checks another condition if the first condition is false.
// switch: Checks a value against multiple cases

// const age = 88;

// if(age < 18){
//     echo "You are minnor.";
// }
// elseif(age == 18){
//     echo "Your are just 18.";
// }
// else{
//     echo "You are Adults.";
// }


// 7. PHP Loops
// PHP has several types of loops:

// while: Repeats as long as a condition is true.
// for: Repeats a block of code a specified number of times.
// foreach: Iterates over arrays.

const num = 10;
while(num > 0){
    echo "Number is: ".num;
    num--;
}
?>