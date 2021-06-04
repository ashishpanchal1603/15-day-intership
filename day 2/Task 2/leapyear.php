<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Task -2: LeapYear</title>
</head>
<body>
    <h2> Leap Year Program in Php.</h2>

    <?php
    $a = 2027;
    if ($a % 400 == 0) {
        echo "$a is a Leap Year";
    }
    elseif ($a % 100 == 0) {
        echo "$a is not Leap Year";
    }
    elseif($a % 4== 0) {
        echo "$a is Leap Year";
    }
    else {
        echo "$a is nor Leap Year";
    }
    ?>
</body>
</html>