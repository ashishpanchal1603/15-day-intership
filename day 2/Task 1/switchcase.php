<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch case</title>
</head>
<body>
     
    <h2> Switch Case in Php</h2>
    <?php
      $a = 2;
      switch($a){
          case 1 :
            echo "one";
            break;
          case 2 :
            echo "Two ";
            break;
          case 3 :
            echo "Three";
            break;
            default :
            echo "Please Select 1-3";

      }

    ?>
</body>
</html>