<?php

    class Student 
    {
        var $name;
        var $country = 'USA';

        function sayHello()
        {
            return 'Hello World';
        }
    }

    $student1 = new Student;
    $student2 = new Student;

    $student1->name = 'John';
    $student2->name = 'Jane';

    echo $student1->name . "<br>";
    echo $student2->name . "<br>";

    echo $student1->sayHello() . "<br>";
    echo $student2->sayHello() . "<br>";

    $class_methods = get_class_methods('Student');
    echo "method milik Student:<br>";
    echo "<pre>";
    print_r($class_methods);
    echo "</pre>";

    if (method_exists('Student', 'sayHello')) {
        echo "method sayHello ada di class Student.<br>";
    } else {
        echo "method sayHello tidak ada di class Student.<br>";
    }
?>