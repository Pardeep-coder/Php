<?php
//Simple print command
echo "Hello Universe! \n";

//To check the current version of php 
echo phpversion();

//Variables in php
$name = "Pardeep";
$age = 20;
echo "\nMy name is: $name \n";
echo "The age is: $age \n";

//To get the datatype of the variable 
var_dump("Pardeep");
var_dump(20);
var_dump(14.2);
var_dump([80, 85, 78]);
var_dump(true);
var_dump(NULL);


#String
$Name = "Pardeep";
//To get the length of the Name
echo strlen($Name) . "\n"; 

//To get the count of the word in the string 
echo str_word_count("Hi, Pardeep") . "\n";

//To get the position of the word in the string 
$string = "Hi, My name is Pardeep";
echo strpos($string, "is") . "\n";

//To convert the string in upper case
$msg = "Hello Universe";
echo strtoupper($msg) . "\n";

//To convert the string in lower case 
echo strtolower($msg) . "\n";

//To replace the words in string 
echo str_replace("Hello", "Hi", $msg) . "\n";

//To reverse the string 
echo strrev($msg) . "\n";

//Concatenation of two string 
$x = 'Hi';
$y = ' Universe';
$z = $x . $y;
echo $z . "\n";

//You can also use double quotes for concatenation
$a = "Hello";
$b = " World";
$c = "$a $b";
echo $c . "\n";

//Slicing in String
$s = "How are you?";
echo substr($s, 2, 5) . "\n";    //2 -> Starting Index, 5 -> Last Index(excluded)
echo substr($s, 0) . "\n";       //0 -> First Index, and it will return the whole text after the first given index
echo substr($s, 3, -2) . "\n";   //The backward indexing is represents in minus(-) values and goes up to n

//Numbers
$x = 10;
$y = 10.2;

echo var_dump(is_int($x));
echo var_dump(is_float($y));

//To cast to String 
$a = 10;
$b = 10.5;
$c = true;
$d = NULL;

$a = (string) $a;
$b = (string) $b;
$c = (string) $c;
$d = (string) $c;

echo var_dump($a) . "\n";
echo var_dump($b) . "\n";
echo var_dump($c) . "\n";
echo var_dump($d) . "\n";

//And we can also cast any variable datatype to another datatype whether it is string, integer, float, boolean etc. 

//Math functions
//The pi() function return the pi value 
echo(pi()) . "\n";

//The min() and max() function can be return the lowest and highest value from a list of arguments
echo(min(10, 25, 20, 33, -2, 58, -200)) . "\n";
echo(max(10, 11, -22, 35, 88, -25, 89)) . "\n";

//The abs() function return the absolute positive value for a number
echo(abs(-6.8)) . "\n";

//The sqrt() function return the square root of a number
echo(sqrt(64)) . "\n";

//The round() function round the floating point number into closest integer number
echo(round(0.6)) . "\n";
echo(round(0.4)) . "\n";

//The rand() function is used to generate the random number
echo(rand()) . "\n";

//If you want to generate a random number within a range then you can pass the minimum and the maximum number in the brackets
echo(rand(10, 100)) . "\n";

//To Declare the constant 
const car = "BMW";
echo car . "\n";

//Here we also declare a constant using the define() keyword 
define("Cars", [
    "BMW",
    "Range Rover",
    "Rolls Royce",
    "Lamborghini"
]);
echo Cars[2] . "\n";

//define() vs const
//We can not use the const keyword inside the block of the function 
//In that case we have define() keyword or method to declare the constant inside the function 

//Constants are the global
define("GREETING", "Hi, Welcome");

function Test(){
    echo GREETING . "\n";
}

Test();

//Operators 
$x = 60;
$y = 15;

//Arithmetic operators
echo ($x + $y) . "\n";
echo ($x - $y) . "\n";
echo ($x * $y) . "\n";
echo ($x / $y) . "\n";
echo ($x % $y) . "\n";

//Assignment Operator
echo ($a = $x) . "\n";
echo ($a += $x) . "\n";
echo ($a -= $x) . "\n";
echo ($a *= $x) . "\n";
echo ($a /= $x) . "\n";
echo ($a %= $x) . "\n";

//Comparison operators
echo ($x == $y) . "\n";
echo ($x === $y) . "\n";
echo ($x != $y) . "\n";
echo ($x > $y) . "\n";
echo ($x >= $y) . "\n";
echo ($x < $y) . "\n";
echo ($x <= $y) . "\n";

//Increment and Decrement operator
echo ($x++) . "\n";
echo ($y--) . "\n";

//We have also logical operators that are typically used in the control statements 

//Conditional Statements
//If statement
if(5 > 3){
    echo "5 is greater" . "\n";
}

//If-else statement
$a = 10;
$b = 15;
if($a > $b){
    echo "a is greater" . "\n";
}else{
    echo "b is greater" . "\n";
}

//else-if statements 
$x = 10;
$y = 15;
$z = 7;
if($x > $y && $x > $z){
    echo "x is greater than y and z" . "\n";
}elseif($y > $x && $y > $z){
    echo "y is greater than x and z" . "\n";
}else{
    echo "z is greater than x and y" . "\n";
}

//switch statement 
$favcolor = "blue";
switch($favcolor){
    case "red":
        echo "red is my favourite color" . "\n";
        break;
    case "yellow":
        echo "yellow is my favourite color" . "\n";
        break;
    case "blue":
        echo "blue is my favourite color" . "\n";
        break;
    case "green":
        echo "green is my favourite color" . "\n";
        break;
    default:
        echo "Every color is beautiful" . "\n";
}

//Loops
//while loop
$i = 1;
while($i < 6){
    echo $i . "\n";
    $i++;
}

//do-while
echo "The do while loop is start from here" . "\n";
$j = 1;
do{
    echo $j . "\n";
    $j++;
}while($j < 11);

//for loop
echo "The for loop is start from here" . "\n";
for($k = 0; $k <= 20; $k++){
    echo $k . "\n";
}

//foreach loop 
echo "The for each loop is start from here" . "\n";
$colors = array("red", "blue", "yellow", "orange");
foreach($colors as $crs){
    echo $crs . "\n";
}

//break statement 
echo "The break statement is start from here" . "\n";
for($l = 0; $l <= 10; $l++){
    echo $l . "\n";
    if($l == 3){
        break;
    }
}

//continue statement
echo "The continue statement is start from here" . "\n";
for($m = 0; $m <= 10; $m++){
    if($m == 3){
        continue;
    }
    echo $m . "\n";
}

//Functions 
function Msg(){
    echo "Hi Universe" . "\n";
}
Msg();

function Greeting($name){
    echo "Welcome $name" . "\n";
}
Greeting("Pardeep");

function Sum($a, $b){
    echo "The sum of a and b is: " . $a + $b . "\n";
}
Sum(5, 7);

function Student($marks){
    if($marks > 33){
        echo "Pass" . "\n";
    }else{
        echo "fail" . "\n";
    }
}
Student(85);

//Array
$fruits = array("Apple", "Banana", "Mango", "Orange");
echo $cars . "\n";

//To check the counts of the item of the array
echo count($fruits) . "\n";

//To access the element of the array 
echo $fruits[0] . "\n";

//Add the element in the array
$fruits[] = "Litchi";

//To check the datatype
echo var_dump($fruits);

//Associative array
$cars = array("brand"=>"Ford", "model"=>"Mustang", "year"=>2024);
echo $cars . "\n";
echo var_dump($cars) . "\n";

//To sort the array
$num = array(10, 7, 15, 25, 12, 33);
echo sort($num) . "\n";
?>
