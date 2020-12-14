<?php
spl_autoload_register(function ($className){
  include_once "classes/$className.php";
});

$phone = new Phone("samsung", 200, 20,1 );
$phone->showProduct();

$car = new Car("Audi", 200, 10,1);
$car->showProduct();

$flour = new Flour("мука", 100, 0, .350);
$flour->showProduct();