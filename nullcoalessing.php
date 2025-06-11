<?php
$x=1;
$var=isset($x)? $x :"not set";
echo "The value of x is $var<br><br>";

$num=10;
$val=$num ?? 0;
echo "The Value of num is $val<br><br>";
?>