
<?php


function calculateArea($length, $width) {
    $area = $length * $width;
    return $area;
}


$length = 10;
$width = 5;


$result = calculateArea($length, $width);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<h2>Calculate Rectangle Area</h2>

<p>Length: <?php echo $length; ?></p>

<p>Width: <?php echo $width; ?></p>

<p>Area: <?php echo $result; ?></p>

</body>
</html>
