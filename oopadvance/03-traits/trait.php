<?php
trait Hello {
    public function sayHello() {
        echo 'Hello ';
    }
}

class Table{
    use Hello;
    public function sayHello() {
        echo 'Hello Table';
    }
}

(new Table())->sayHello();
?>