<?php
$name = "Vinayak";
$income= 500;

/*
PHP data types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. Null
*/

// String - Sequence of characters
$name = "Vinayak";
$friend = "Geetesh";
echo "$name ka friend is $friend";

// Integer - Non decimal number
$income = 500;
$debts = "-666";
echo "<br>";
echo $income;
echo "<br>";
echo $debts;

// Float - Decimal point number
$income = 344.50;
$debts = -45.5;
echo "<br>";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Boolean - Can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);
echo "<br>";

// Object - Instances of classes
// Employee is a class ---> vinayak can be one object

// Array - used to store multiple value in a single variable
$friend = array("Sandip", "Geetesh", "Durga", "Soumya");
echo var_dump($friend);
echo "<br>";
echo $friend[0];
echo "<br>";
echo $friend[3];
echo "<br>";
// echo $friend[4]; Will throw an error as the size of array is 4.

// NULL
$name = null;
echo var_dump($name);
?>