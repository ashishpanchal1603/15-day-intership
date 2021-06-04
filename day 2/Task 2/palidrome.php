<!DOCTYPE html>
<html lang="en">
<head>
    <title>TASK-2 : Palidrome</title>
</head>
<body>
    <h2> Palidorme Program in PHP.</h2><br>
    <?php
    $a='nayan';
    $b=strtolower($a);
    $rev= strrev($b);
    if ($b==$rev){
        echo " $a is Palidrome .";
    }
    else {
        echo "$a is not Palidrome .";
    }
    ?>
</body>
</html>