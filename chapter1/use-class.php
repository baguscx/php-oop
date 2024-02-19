<?php

    class Student 
    {
        var $firstName;
        var $lastName;

        function fullName()
        {
            return $this->firstName . " " . $this->lastName;
        }

    }

    $student = new Student;

    $student->firstName = 'John';
    $student->lastName = 'Doe';

    echo $student->fullName() . "<br>";

?>