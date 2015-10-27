<!doctype html>
<html>
<head></head>
<body>
<?php
$provisionedArray=array("Specs", "Drugs", "Rock and Roll");
$rez="";
foreach($provisionedArray as $x){
    if ($x=="Drugs"){
        $x="hugs";
    }
    if ($x=="Rock and Roll"){
        unset($x);
    }
    $rez=$rez." ";
}
echo $rez;
?>
</body>
</html>