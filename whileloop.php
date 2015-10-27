<!doctype html>
<html>
<head></head>
<body>
<?php
    $specs=7;
    $mugs=7;
    $rolls=7;
    $count=1;
    while(($specs>0 || $mugs>0 || $rolls>0) && $count<30){
        $rez="On the ".$count;
        if ($count==1 || $count==21){
            $rez=$rez."st";
        }else if ($count==2){
            $rez=$rez."nd";
        }else if ($count==3){
            $rez=$rez."rd";
        }else{
            $rez=$rez."th";
        }

        $todaysGood=rand(0,2);
        switch($todaysGood){
            case 0: $rez=$rez." of the month specs are available"; $specs--; break;
            case 1: $rez=$rez." of the month mugs are available"; $mugs--; break;
            case 2: $rez=$rez." of the month rolls are available"; $rolls--; break;
        }
        echo "<p>$rez</p>";
        $count++;
    }
?>
</body>
</html>