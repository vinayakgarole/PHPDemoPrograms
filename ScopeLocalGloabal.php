<?php
echo "Welcome to scope and local global vars in PHP <br>";
$a = 98; // Global variable
$b = 9;

function printValue() {
    // $a = 97;  // Local variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;
    $b = 1000;
    echo "The value of your variable is $a and b is $b";
}
echo $a;
printValue();
echo "<br>The value of your variable is $a and b is $b";
echo "<br";
// echo var_dump($GLOBALS);
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);
?>