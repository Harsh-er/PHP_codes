<?php

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    #collect value of inpput field
    
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name))
    {
        echo 'Name is Empty';
    }
    else
    {
        echo $name;
    }
}

if($_SERVER["REQUEST_METHOD"] == "GET")
{   
    $name = htmlspecialchars($_REQUEST['fname']);
    if(empty($name))
    {
        echo 'Name is Empty';
    }
    if($name == "bhagyashree choudhary")
    {
        echo 'Bhagyashree Naresh Choudhary';  
    }
    else
    {
        echo $name;
    }
}
?>