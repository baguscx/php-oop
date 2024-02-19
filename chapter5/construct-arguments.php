<?php

class Student {
    public static $instanceCount = 0;

    public $total;
    public $target;

    public function __construct($args = []){
        self::$instanceCount++;
        $this->total = $args['total'] ?? $this->total;
        $this->target = $args['target'] ?? $this->target;
    }
}

class Elementary extends Student {
    public $total = 3;
    public $target = 100;
}

class Junior extends Student {
    public $total = 4;
    public $target = 200;
}

class Senior extends Student {
    public $total = 5;
    public $target = 300;
}

$elementary = new Elementary([
    'total' => 2,
    'target' => 50
]);
$junior = new Junior(
    ['total' => 3, 'target' => 100]
);
$senior = new Senior(
    ['total' => 4, 'target' => 150]
);

echo "Total siswa SD: " . $elementary->total . "<br>";
echo "Target siswa SD: " . $elementary->target . "<br>";

echo "Total siswa SMP: " . $junior->total . "<br>";
echo "Target siswa SMP: " . $junior->target . "<br>";

echo "Total siswa SMA: " . $senior->total . "<br>";
echo "Target siswa SMA: " . $senior->target . "<br>";

echo "Total siswa: " . Student::$instanceCount . "<br>";


?>