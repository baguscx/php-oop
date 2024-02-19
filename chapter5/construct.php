<?php

class Student {
    public static $instanceCount = 0;

    public function __construct(){
        self::$instanceCount++;
    }
}

class Elementary extends Student {
    public $total = 3;
}

class Junior extends Student {
    public $total = 4;
}

class Senior extends Student {
    public $total = 5;
}

$elementary = new Elementary();
$junior = new Junior();
$senior = new Senior();

echo "Total siswa SD: " . $elementary->total . "<br>";
echo "Total siswa SMP: " . $junior->total . "<br>";
echo "Total siswa SMA: " . $senior->total . "<br>";
echo "Total siswa: " . Student::$instanceCount . "<br>";


?>