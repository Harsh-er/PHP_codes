<!doctype html>
<html>
    <head>
        <title>Logical Operator</title>
    </head>
    <body>
        <?php
        $x=10;
        $y=20;
        
        echo "<h1>And/&& Operator<br><br></h1>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        
        if($x>1 and $x<11)
        {
            echo "x=True<br>";
        }
        else
        {
            echo "y=False<br>";
        }
        if($y>10 && $y<21)
        {
            echo "y=True<br><br>";
        }
        else
        {
            echo "y=False<br><br>";
        }
        
        echo "<h1>Or/|| Operator<br><br></h1>";
        echo "x=$x<br>";
        echo "y=$y<br>";
        
        if($x>15 or $x<11)
        {
            echo "x=True<br>";
        }
        else
        {
            echo "x=False<br>";
        }
        if($y>20 || $y<0)
        {
            echo "y=True<br><br>";
        }
        else
        {
            echo "y=False<br><br>";
        }
        ?>
    </body>
</html>