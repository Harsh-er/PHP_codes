<!Doctype html>
<html>
    <head>
        <title>Increment and Decrement</title>
    </head>
    <body>
        <?php
        $x=10;
        
        echo "<h1>Pre Increment</h1><br>";
        echo "x=$x<br>";
        echo "After Pre Increment<br>";
        ++$x;
        echo "x=$x<br><br>";
        
        $x=10;
        
        echo "<h1>Pre Decrement</h1><br>";
        echo "x=$x<br>";
        echo "After Pre Decrement<br>";
        --$x;
        echo "x=$x<br><br>";
        
        $x=10;
        
        echo "<h1>Post Increment</h1><br>";
        echo "x=$x<br>";
        echo "After Post Increment<br>";
        $x++;
        echo "x=$x<br><br>";
        
        $x=10;
        
        echo "<h1>Post Decrement</h1><br>";
        echo "x=$x<br>";
        echo "After Post Decrement<br>";
        $x--;
        echo "x=$x<br><br>";
        ?>
    </body>
</html>

