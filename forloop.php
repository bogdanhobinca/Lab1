<!doctype html>
<html>
<head></head>
<body>
<?php
    $rez="";
    for ($i=1; $i<30; $i++){
        $rez="On the ";
        if ($i==1 || $i==21){
            $rez=$rez.$i."st ";
        }else if ($i==2 || $i=22){
            $rez=$rez.$i."nd ";
        }else if ($i==3 || $i==23){
            $rez=$rez.$i."rd ";
        }else{
            $rez=$rez.$i."th ";
        }
        if ($i%2==0){
            $rez=$rez."of the month specs are available";
        }else if ($i%3==0){
            $rez=$rez."of the month mugs are available";
        }else if ($i%4==0){
            $rez=$rez."of the month sausage rolls are available";
        }else{
            $rez=$rez."of the month no products are available";
        }
        echo "<p>$rez</p>";
    }
?>
</body>
</html>