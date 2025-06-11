<?php

class Vegetable
{
    public $name;
    
    function set_name($name)
    {
        $this->name = $name;
    }
    
    function get_name()
    {
        return $this->name;
    }
}

class Fruit
{
    //Properties
    public $name;
    public $color;
    
    //Methods
    function set_name($name)
    {
        $this->name = $name;
    }
    
    function get_name()
    {
        return $this->name;
    }
    
    function set_color($color)
    {
        $this->color = $color;
    }
    
    function get_color()
    {
        return $this->color;
    }
}

$apple = new Fruit();
$ladyfinger = new vegetable();
$ladyfinger->set_name('Tomato');

$apple->set_name('Apple');
$apple->set_color('Red');

echo "Name: ".$apple->get_name();
echo '<br>';
echo "Color: ".$apple->get_color();

echo "<br>Directly Accessing Value through Object<br>Name ".$apple->name."<br>";
echo "Color :".$apple->color."<br>";

$apple->name="Bhagyashree";
$apple->color="Rainbow";
echo "<br>Directly accessing value through Object<br>Name ".$apple->name."<br>";
echo "Color :".$apple->color."<br>";
echo "<br><br>";
echo $apple instanceof Fruit?"Class Found":"Class Not Found";
echo '<br>';
echo $ladyfinger instanceof Vegetable?"Class Found":"Class Not Found";

?>