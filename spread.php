<?php
$arr1 = [4,5];
$arr2 = [1,2,3,...$arr1];

print_r($arr2);
echo '<br><br>';

$arr3 = [...$arr1,...$arr2];

print_r($arr3);
echo '<br><br>';

$arr4 = array_merge($arr1,$arr2);

print_r($arr4);
echo '<br><br>';

function myfunction($x,$y,$z=30)
{
    echo  "x = $x y = $y z = $z";
}

myfunction(...[10,20],z:30);

?>

