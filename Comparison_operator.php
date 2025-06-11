<!doctype html>
<html>
    <head>
        <title>Comparison Operator</title>
    </head>
    <body>
        <?php
        $x=10;
        $y=20;
        
        echo "<h1>Equals</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x==$y);
        
        echo "<h1>Identical</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x===$y);
        
        echo "<h1>Not Equal</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x!=$y);
        
        echo "<h1>Not Equal</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x<>$y);
        
        echo "<h1>Greater Then</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x>$y);
        
        echo "<h1>Lesser Then</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x<$y);
        
        echo "<h1>Greater Equals to</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x>=$y);
        
        echo "<h1>Lesser Equals to</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x<=$y);
        
        echo "<h1>Spaceship</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        var_dump($x<=>$y);
        
        
        ?>
    </body>
</html>
