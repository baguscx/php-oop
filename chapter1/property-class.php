<?php

    class Student 
    {
        var $name;
        var $country = 'USA';
    }

    $student1 = new Student;
    $student2 = new Student;

    $student1->name = 'John';
    $student2->name = 'Jane';

    echo $student1->name . "<br>";
    echo $student2->name . "<br>";

    $class_vars = get_class_vars('Student');
    echo "Property milik Student:<br>";
    echo "<pre>";
    print_r($class_vars);
    echo "</pre>";

    if (property_exists('Student', 'name')) {
        echo "Property name ada di class Student.<br>";
    } else {
        echo "Property name tidak ada di class Student.<br>";
    }
?>