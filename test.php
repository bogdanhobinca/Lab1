<!doctype html>
<html>
<head></head>
<body>
<p>
    <?php
        echo "Hello World";
    ?>
    <br />
    <?php
        echo "Hello,"." "."world"."!";
    ?>
    <br />
    <?php
        echo 5*7;
    ?>
    <br />
    <?php
        $myname="Frodo Baggins";
        $myage=111;
        echo "My name is ".$myname." and I am ".$myage;
    ?>
    <?php
        $name="Edgar";
        if ($name=="Simon"){
            print "I know you!";
        }else{
            print "Who are you?";
        }
    ?>
</p>
</body>
</html>