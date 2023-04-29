<?php
echo "Welcome to PHP tutorial on functions <br>";

function avgMarks($marksArr) {
    $sum = 0;
    $i = 1;

    foreach ($marksArr as $value) {
        $sum += $value;
        $i++;
    }
    return $sum / $i;
}
$vinayak = [56, 71, 84, 61, 78, 80];
// $sumMarksVinayak = processMarks($vinayak);
$sumMarksVinayak = avgMarks($vinayak);

$geetesh = [72, 77, 56, 45, 71, 63];
$sumMarksGeetesh = avgMarks($geetesh);
echo "Total marks scored by Vinayak out of 600 is $sumMarksVinayak <br>";
echo "Total marks scored by Geetesh out of 600 is $sumMarksGeetesh";
?>