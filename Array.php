<?php
echo "Welcome to associative arrays in PHP <br>";
// $arr = array("this", "that", "what");
// echo $arr[0];
// echo $arr[1];
// echo $arr[2];

// Associative arrays
$favCol = array(
    "shubham" => "red", 
    "rohan" => "green",
    "vinayak" => "brown",
    8 => "this"
);

foreach ($favCol as $key => $value) {
    echo "<br>Favorite color of $key is $value";
}
// echo $favCol["vinayak"];
// echo "<br>";
// echo $favCol["rohan"];
// echo "<br>";
// echo $favCol[8];
?>
