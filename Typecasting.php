<?php

echo "<h1>String to other Datatype</h1>";
$a='5';
var_dump($a);
echo "<br><br>";

$a1=(int)($a);
var_dump($a1);
echo "<br><br>";

$a2=(float)($a);
var_dump($a2);
echo "<br><br>";

$a3=(boolean)($a);
var_dump($a3);
echo "<br><br>";

echo "<h1>Int to other Datatype</h1>";
$b=5;
var_dump($b);
echo "<br><br>";

$b1=(string)($b);
var_dump($b1);
echo "<br><br>";

$b2=(float)($b);
var_dump($b2);
echo "<br><br>";

$b3=(boolean)($b);
var_dump($b3);
echo "<br><br>";

echo "<h1>Float to other Datatype</h1>";
$c=5.45;
var_dump($c);
echo "<br><br>";

$c1=(int)($c);
var_dump($c1);
echo "<br><br>";

$c2=(string)($c);
var_dump($c2);
echo "<br><br>";

$c3=(boolean)($c);
var_dump($c3);
echo "<br><br>";

echo "<h1>Bool to other Datatype</h1>";
$d=true;
var_dump($d);
echo "<br><br>";

$d1=(int)($d);
var_dump($d1);
echo "<br><br>";

$d2=(float)($d);
var_dump($d2);
echo "<br><br>";

$d3=(string)($d);
var_dump($d3);
echo "<br><br>";

?>
