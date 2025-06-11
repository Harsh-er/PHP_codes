<?php
echo '<h1>Example of Variable Scope</h1>';
echo '<ol><li>Local</li><p>Variable inside the function or Block are local variables';

function example_local()
{
    $x=11; #Its a Local Variable
    echo '<br><br>Example of local Scope $x=',$x;
}

example_local();

echo '<br>Its stil accessible'.$x;  #$x Being a local variable inside example_local
                                #Function cant be accessed outside function
?>

