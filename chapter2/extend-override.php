<?php

class Vehicle {
    var $color;
    var $wheels;
    var $door;

    function isGoodForRain() {
        return true;
    }
}

class Motocycle extends Vehicle {
    var $wheels = 2;
    var $door = 0;

    function isGoodForRain() {
        return false;
    }
}

class Car extends Vehicle {
    var $wheels = 4;
    var $door = 4;
    var $convertible = false;

    function isGoodForRain() {
        return !$this->convertible;
    }
}

$kendaraan = new Vehicle;
$kendaraan->color = "Merah";
$kendaraan->wheels = 4;
$kendaraan->door = 4;
echo "Kendaraan ini berwarna " . $kendaraan->color . " dan memiliki " . $kendaraan->wheels . " roda dan " . $kendaraan->door . " pintu. <br/>";

$motor = new Motocycle;
$motor->color = "Hitam";
echo "Motor ini berwarna " . $motor->color . " dan memiliki " . $motor->wheels . " roda dan " . $motor->door . " pintu. <br/>";

$mobil = new Car;
$mobil->color = "Biru";
$mobil->convertible = true;
echo "Mobil ini berwarna " . $mobil->color . " dan memiliki " . $mobil->wheels . " roda dan " . $mobil->door . " pintu. <br/>";

?>