<!doctype html>
<html>
    <head>
        <title>Assignment operator</title>
    </head>
    <body>
        <?php
        $x=10;
        $y=20;
        
        echo "<h1>Equals To</h1><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        
        echo "now after x=y<br>";
        $x=$y;
        echo "x=$x"; 
        
        $x=10;
        $y=20;
        
        echo "<h1>addition equals to</h1><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $x+=$y;
        echo "x+=y = $x<br><br>";
                
        $x=10;
        $y=20;
        
        echo "<h1>Subtraction equals to</h1><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $x-=$y;
        echo "x-=y = $x<br><br>";
        
        $x=10;
        $y=20;
        
        echo "<h1>Multiplication equals to</h1><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $x*=$y;
        echo "x*=y = $x<br><br>";
        
        $x=10;
        $y=20;
        
        echo "<h1>Division equals to</h1><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $x/=$y;
        echo "x/=y = $x<br><br>";
        
        $x=10;
        $y=20;
        
        echo "<h1>Modulus equals to</h1><br>";
        echo "x=$x<br>";
        echo "y=$y<br><br>";
        $x%=$y;
        echo "x%=y = $x<br><br>";
        ?>
    </body>
</html>

