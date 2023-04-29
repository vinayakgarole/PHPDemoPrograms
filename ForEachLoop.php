<?php
echo "Welcome to forEach Loop <br>";

$arr = array("Bananas", "Apples", "Harpic", "Bread", "Butter");

// for ($i=0; $i < count($arr); $i++) { 
//     echo $arr[$i];
//     echo "<br>";
// }

// Better way to do this - forEach loops
foreach ($arr as $value) {
    echo "$value <br>";
}
?>