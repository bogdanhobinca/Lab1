<!doctype html>
<html>
<head></head>
<body>
<?php
 function wanted($name,$specs,$mugs,$rolls){
    $rez="Wanted: ".$name."\r\n"."Known to be in possesion of the following items:"."\r\n"."Specs ".$specs."\r\n"."Mugs ".$mugs."\r\n"."Sausage rolls ".$rolls."\r\n"
           ."Award for capture: $".(10*($specs*$specs*$mugs*$mugs*$rolls*$rolls)/2);
    echo $rez;
 }

  wanted("Bogdan",1,2,3);

?>
</body>
</html>