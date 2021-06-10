<?php
echo "<h2> For Loop in Php.</h2>";
echo "<table border ='2'>";
for($i=2;$i<=17;$i++){
    echo "<tr>.";
    if ($i%2==0){
        echo "<td bgcolor='red'>$i</td>";
    }
    else {
        echo "<td bgcolor='blue'>$i</td>";

    }
    echo "</tr>";
}
    echo "</table>";
?>