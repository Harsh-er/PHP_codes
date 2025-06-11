<?php
function familyname($fname)
{
    echo "My Name is $fname<br><br>";
}

familyname("Harsh");

function fullname($fname,$lname)
{
    echo "My Full Name is $fname $lname<br><br>";
}

fullname("Harsh","Shah");

function weight($weight=50)
{
    echo "My Weight is $weight<br><br>";
}

weight(55);
weight();

function returner($x)
{
    echo "<br><br>Checking Variable Type<br>";
    return var_dump($x);
    
}

returner("Harsh");
returner(20);

function reference(&$name)
{
    $ln="Shah";
    $name.=$ln;
}

$fnm="Harsh ";
reference($fnm);
echo "<br><br>$fnm<br><br>";


function arrayy(...$a)
{
    $n=0;
    $c=count($a);
    for($i=0;$i<$c;$i++)
    {
        $n+=$a[$i];
    }
    echo "<br>$n<br><br>";
}

arrayy(1,2,3,4);

?>


