<?php

require_once 'vendor/autoload.php';

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();
// generate data by calling methods
echo $faker->name() . "<br/>";
// 'Vince Sporer'
echo $faker->email() . "<br/>";
// 'walter.sophia@hotmail.com'
echo $faker->text() . "<br/>";
// 'Numquam ut mollitia at consequuntur inventore dolorem.'
?>