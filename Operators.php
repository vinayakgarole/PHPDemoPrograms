<?php
// Operators in PHP
/*
1. Arithmetic Operators
2. Assignment Operators
3. Comparison Operators
4. Logical Operators
*/

$a = 10;
$b = 8;

// 1. Arithmetic Operators
echo "For a + b, the result is " . ($a + $b) . "<br>";
echo "For a - b, the result is " . ($a - $b) . "<br>";
echo "For a * b, the result is " . ($a * $b) . "<br>";
echo "For a / b, the result is " . ($a / $b) . "<br>";
echo "For a % b, the result is " . ($a % $b) . "<br>";
echo "For a ** b, the result is " . ($a ** $b) . "<br>";

// 2. Assignment Operators
$a += 6;
echo "For a, the value is ". $a . "<br>";
$a -= 6;
echo "For a, the value is ". $a . "<br>";
$a *= 6;
echo "For a, the value is ". $a . "<br>";
$a /= 6;
echo "For a, the value is ". $a . "<br>";
$a %= 6;
echo "For a, the value is ". $a . "<br>";

// 3. Comparison Operators
$x = 7;
$y = 10;
echo "For x == y the result is ";
echo var_dump($x == $y) . "<br>";

echo "For x > y the result is ";
echo var_dump($x > $y) . "<br>";

echo "For x < y the result is ";
echo var_dump($x < $y) . "<br>";

echo "For x <> y the result is ";
echo var_dump($x <> $y) . "<br>";

// 4. Logical Operators
$m = true;
$n = false;
echo "For m and n, the result is ";
echo var_dump($x and $y) . "<br>";

echo "For m or n, the result is ";
echo var_dump($x or $y) . "<br>";

echo "For m && n, the result is ";
echo var_dump($x && $y) . "<br>";

echo "For m || n, the result is ";
echo var_dump($x || $y) . "<br>";

echo "For !m, the result is ";
echo var_dump(!$m) . "<br>";
?>