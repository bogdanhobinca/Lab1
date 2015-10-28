<!doctype html>
<html>
<head></head>
<body>
<?php
    $myArray=array("Mirel", "Dorel", "Gigel", "Sorinel", "Fanel", "Georgel");
    sort($myArray);
    $max=count($myArray)-1;
    for ($i=1; $i<4 ; $i++){
        $winner=rand(0,$max);
        $pWinner=$myArray[$winner];
        $upper=strtoupper($pWinner);
        echo "<p>$upper</p>";
        unset($myArray[$winner]);
        $max--;
    }
?>
</body>
</html>