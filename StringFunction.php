<?php
$name = "Vinayak is a good boy";
echo $name;
echo "<br>";

echo "The length of my String is " . strlen($name);
echo "<br>";
echo "Word is " . str_word_count($name);
echo "<br>";
echo strrev($name);
echo "<br>";
echo strpos($name , "good");
echo "<br>";
echo str_replace("Vinayak", "Geetesh", $name);
echo "<br>";
echo str_repeat($name, 2);
echo "<br>";
echo "<pre>";
echo rtrim("      this is good boy       ");
echo "<br>";
echo ltrim("      this is good boy       ");
echo "</pre>";
?>