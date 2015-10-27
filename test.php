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
    <br />
    <?php
        $name="Edgar";
        if ($name=="Simon"){
            print "I know you!";
        }else{
            print "Who are you?";
        }
    ?>
    <br />
    <?php
        $numberOfHobbits=2;
        switch ($numberOfHobbits){
            case 1: echo "1 sad hobbit"; break;
            case 2: echo "2 happy hobbits"; break;
            case 3: echo "3 hobbits are a crowd"; break;
            default: echo "All the hobbits have gone home";
        }
    ?>
    <br />
    <?php
    $myArray=array("do", "re", "mi");
    echo $myArray[0];
    $myArray[1]="la";
    echo $myArray[1];
    unset($array[2]);
    ?>
    <br />
    <?php
    for ($i=1; $i<10; $i++){
        echo "<p>Hello!</p><br />";
    }
    ?>
</p>
</body>
</html>