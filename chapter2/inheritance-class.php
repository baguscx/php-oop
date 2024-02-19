<?php

class User 
{
    var $firstName;
    var $lastName;
    var $userName;

    function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }
}

class Customer extends User
{
}

$c = new Customer;
$c->firstName = "John";
$c->lastName = "Doe";

echo $c->fullName() . "<br>";

/////////////////////////////

if (is_subclass_of($c, 'User'))
{
    echo "Instance is a subclass of User. <br>";
} else {
    echo "Instance is not a subclass of User. <br>";
}

$parents = class_parents($c);
echo implode(', ', $parents) . "<br>";
?>