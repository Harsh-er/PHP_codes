<!doctype html>
<html>
    <head>
        <title>Conditional operator</title>
    </head>
    <body>
        <?php
        $x=1;
        $y=0;
        
        echo "<h1>?: Operator<br><br></h1>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        echo "Condition is ".($x=1 && $y=0)?"True<br><br>":"False<br><br>";
        
        $z;
        
        echo "<h1>?? Operator</h1><br><br>";
        $x=$z??"No Value In z";
        echo $x;
        ?>
    </body>
</html>