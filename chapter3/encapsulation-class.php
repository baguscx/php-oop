<?php

class User 
{
    public $firstName;
    public $lastName;
    public $userName;

    protected $regDate;
    private $password;

    public function fullName()
    {
        return $this->firstName . " " . $this->lastName;
    }

    protected function register()
    {
        return "Protected";
    }

    private function setPass()
    {
        return "Private";
    }

    public function setP(){
        return $this->setPass();
    }
}

class Customer extends User
{
    public function reg(){
        return $this->register();
    
    }
}

$u = new User;
$u->firstName = "User";
$u->lastName = "Doer";

echo $u->setP() . "<br>";
echo $u->fullName() . "<br>";

$c = new Customer;
$c->firstName = "John";
$c->lastName = "Doe";

echo $c->reg() . "<br>";
echo $c->fullName() . "<br>";

?>