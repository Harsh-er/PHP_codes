<?php
echo 'Hello<br>';
echo "Hello<br>";

$x = 'Sikki';
echo "Hello $x<br><br>";

echo 'STRLEN<br>';
echo strlen("Hello $x");
echo '<br><br>';

echo 'STR_WORD_COUNT<br>';
echo str_word_count("Hello $x");
echo '<br><br>';

echo 'STRPOS<br>';
echo strpos("hello $x","Vivek");
echo '<br><br>';

echo 'STRTOUPPER<br>';
echo strtoupper($x);
echo '<br><br>';

echo 'STRTOLOWER<br>';
echo strtolower($x);
echo '<br><br>';

echo 'STR_REPLACE<br>';
$y = ' Hello GSP ';
echo "$y<br>";
echo str_replace('Hello', 'Hi', $y);
echo '<br><br>';

echo 'STRREV<br><br>';
echo strrev($y);
echo '<br><br>';

echo 'TRIM<br>';
echo trim($y);
echo '<br><br>';

echo 'EXPLODE()<br>';
$z = explode(" ", 'HELLO VIVEK');
print_r($z);
echo '<br><br>';

echo 'String Concatenation<br><br>';
$x='Mahi';
$y='Bhagyashree';
$z = $x.$y;
echo "$z<br><br>";

$z = $x." ".$y;
echo "$z<br><br>";

$z = "$x $y";
echo "$z<br><br>";

echo 'String Slicing<br>';
$x = 'Hello Guyz!';
echo substr($x,6,4);
echo '<br><br>';

echo substr($x,6);
echo '<br><br>';

echo substr($x,-5,3);
echo '<br><br>';

echo substr($x,5,-3);
echo '<br><br>';

echo 'Escape Characters<br><br>';
$a = 'Vivek is his name and Munjyasara is his surname';
echo "$a<br><br>";

$a = "Vivek is his name and \"Munjyasara\" is his surname";
echo "$a<br><br>";

$a = 'Vivek is his name and \'Munjyasara\' is his surname';
echo "$a<br><br>";

echo 'This Sentence is stored in \$a variable <br><br>';

echo "\110\141br>";
?>
