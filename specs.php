<!doctype html>
<html>
<head></head>
<body>
<?php
    $myname="Mirel";
    $myage=18;
    $rez=$myname." buys";
    if ($myage>21){
        $rez=$rez." sausage rolls";
    }else if ($myage>18){
        $rez=$rez." mugs";
    }else if ($myage>16){
        $rez=$rez." specs";
    }
    echo $rez;
?>
</body>
</html>