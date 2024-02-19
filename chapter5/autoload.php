<?php

function Autoloader ($class) {
    if(preg_match('/\A\w+\Z/', $class)) {
        include 'classes/' . $class . '.php';
    }
}

spl_autoload_register('Autoloader');

$call = new Student();
echo $call->name;


?>