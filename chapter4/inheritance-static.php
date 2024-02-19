<?php

class Student
{
    public static $grades = ['SD', 'SMP', 'SMA'];
    private static $totalStudents = 0;
    
    public static function motto(){
        return "Learn OOP";
    }

    public static function count(){
        return self::$totalStudents;
    }

    public static function addStudents(){
        return self::$totalStudents++;
    }
}

class partTimeStudents extends Student 
{

}

echo Student::$grades[1] . "<br>";
echo Student::motto() . "<br>";
echo Student::count() . "<br>";
Student::addStudents();
echo Student::count() . "<br>";

partTimeStudents::$grades[] = 'Kuliah';
echo implode(', ', Student::$grades) . "<br>";
partTimeStudents::addStudents();
echo partTimeStudents::count() . "<br>";

?>