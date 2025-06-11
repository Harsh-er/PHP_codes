<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
echo "Hello World!<br><br>";

$a=10;
$b=20;
$c='Hi Hello Paaji khana khake jana';

echo "$a<br>";
echo "$b<br>";
echo "$c";

$x=5;
$y=10;

function myTest()
{
    $GLOBALS['y']=$GLOBALS['x']+$GLOBALS['y'];
}

myTest();
echo $y;

?>

</body>
</html>

