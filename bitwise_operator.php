<!doctype html>
<html>
    <head>
        <title>Bitwise Operator</title>
    </head>
    <body>
        <?php
        $x=10;
        $y=20;
        
        echo "<h1>& operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        echo "z=x&y<br><br>";
        
        $z=$x & $y;
        
        echo "z=$z<br><br>";
        
        echo "<h1>| operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        echo "z=x|y<br><br>";
        
        $z=$x | $y;
        
        echo "z=$z<br><br>";
        
        echo "<h1>>> operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        echo "z=x >> 2<br><br>";
        
        $z=$x >> 2;
        
        echo "z=$z<br><br>";
        
        echo "<h1><< operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        echo "z=x << 2<br><br>";
        
        $z=$x << 2;
        
        echo "z=$z<br><br>";
        
        echo "<h1>! operator</h1><b><br>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        echo "z=~y<br><br>";
        
        $z=~$y;
        
        echo "z=$z<br><br>";
        
        echo "<h1>^ operator</h1><br><br>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        echo "z=x^y<br><br>";
        
        $z=$x^$y;
        
        echo "z=$z<br><br>";
        ?>
    </body>
</html>
