<?php
$a=10;
$b=20;

if($a > 10 && $b < 25)
{
    echo 'TRUE<br><br>';
}
else 
{
    echo 'FALSE<br><br>';
}

if($a > 10 || $b < 25)
{
    echo 'TRUE<br><br>';
}
else
{
    echo 'FALSE<br><br>';
}

if($a != 9)
{
    echo 'TRUE<br><br>';
}
else
{
    echo 'FALSE<br><br>';
}

if($a == 10 xor $b == 20)
{
    echo 'TRUE<br><br>'; 
}
else
{
    echo 'FALSE<br><br>';
}
?>


