<!doctype html>
<html>
    <head>
        <title>Magic Constants</title>
    </head>
    <body>
        <?php
        class Fruits
        {
            public 
                    function my_value()
                    {
                        echo __FUNCTION__;
                        echo '<br><br>';
                        echo __METHOD__;
                        echo '<br><br>';
                        return __Class__;
                    }
        }
        
        $kiwi = new Fruits();
        echo $kiwi->my_value();
        
        echo '<br><br>';
        echo __DIR__;
        echo '<br><br>';
        echo __FILE__;
        echo '<br><br>';
        echo __LINE__;
        ?>
    </body>
</html>


