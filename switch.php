<!doctype html>
<html>
<head></head>
<body>
<?php
    $wantedProduct="mugs";
    switch($wantedProduct){
        case "specs": echo 16; break;
        case "mugs": echo 18; break;
        case "sausage rolls": echo 21; break;
        default: "ERROR";
    }
?>
</body>
</html>