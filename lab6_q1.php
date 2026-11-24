
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q1</title>
</head>
<body>

<?php
    
    $name = "NUR DAYANA BATRISYA BT HASBULLAH";
    $matric_number = "AI240081";
    $course = "BIC21203 Web Development";
    $year_of_study = "Year 3";
    $address = "No5, Jalan 6, Taman Seri Bayu, Sungai Pelek, 43950, Sepang, Selangor";
?>

<h2>Student Information</h2>

<table border="1" cellpadding="8">
    <tr>
        <td>Name</td>
        <td><?php echo $name; ?></td>
    </tr>

    <tr>
        <td>Matric Number</td>
        <td><?php echo $matric_number; ?></td>
    </tr>

    <tr>
        <td>Course</td>
        <td><?php echo $course; ?></td>
    </tr>

    <tr>
        <td>Year of Study</td>
        <td><?php echo $year_of_study; ?></td>
    </tr>

    <tr>
        <td>Address</td>
        <td><?php echo $address; ?></td>
    </tr>
</table>

</body>
</html>
