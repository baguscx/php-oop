<?php

    class Product {

    }

    $classes = get_declared_classes();

    echo "Classes: " . implode(', ', $classes) . "<br>";

    $classNames = ['Product', 'Student', 'product'];

    foreach($classNames as $className) {
        if(class_exists($className)) {
            echo "{$className} class has been defined.<br>";
        } else {
            echo "{$className} class has not been defined.<br>";
        }
    }
?>