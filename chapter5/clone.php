<?php

class Laptop {
    public $color;

    public function __construct() {
        echo "Creating Laptop <br/>";
    }
    public function __clone() {
        echo "Cloning Laptop <br/>";
    }
}

$laptop1 = new Laptop();
$laptop1->color = "black";
echo "Laptop 1 color: " . $laptop1->color . "<br/>";
$laptop2 = clone $laptop1;
echo "Laptop 2 color: " . $laptop2->color . "<br/>";

?>