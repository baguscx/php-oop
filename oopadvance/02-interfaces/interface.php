<?php

interface TableInterface{
    public function save(array $data);

}

interface LogInterface{
    public function log(string $message);
}

class Table implements TableInterface{
    public function save(array $data){
        return "Save data to database\n";
    }

    public function log(string $message){
        return $message;
    }
}

echo (new Table)->log("asuuuhh\n");
echo (new Table)->save([]);

?>