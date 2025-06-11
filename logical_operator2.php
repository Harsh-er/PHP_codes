<!Doctype html>
<html>
    <head>
        <title>Logical Operator</title>
    </head>
    <body>
        <?php
        $x=1;
        $y=0;
        
        echo "<h1>&& Operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $z = ($x === 1 && $y === 1)?true:false;
        var_dump($z);
        
        echo "<h1>and Operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $z = ($x === 1 and $y === 1)?true:false;
        var_dump($z);
        
        echo "<h1>or Operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $z = ($x === 1 or $y === 1)?true:false;
        var_dump($z);
        
        echo "<h1>|| Operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $z = ($x === 1 || $y === 1)?true:false;
        var_dump($z);
        
        echo "<h1>! Operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $z = !($x === 1 || $y === 1)?true:false;
        var_dump($z);
        ?>
    </body>
</html>
    
 

