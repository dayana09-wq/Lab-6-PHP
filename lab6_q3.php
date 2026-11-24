
<?php


function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}


$length = 4;
$width = 2;

$result = calculateArea($length, $width);


echo "The area of a rectangle with a length of $length and a width of $width is $result";

?>
