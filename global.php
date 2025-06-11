<?php
 $x=10;
 
 function printss()
 {
     echo 'value of x';
     echo $GLOBALS['x'];
     echo '<br>';
     
     $GLOBALS['x']=123;
     echo '<br>';
     
     echo 'value of x';
     global $x;
     echo $x;
     echo '<br>';
     
    $x=100;
    echo 'value of x';
    echo $x;
    echo '<br><br>';
 }
 
 function prints()
 {
     echo 'value of x';
     echo '<br>';
     echo $GLOBALS['x'];
 }
 
 printss();
 prints();
?>
