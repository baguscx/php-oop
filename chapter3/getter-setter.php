<?php
class Product {
    private $price;

    public function setPrice($price){
        $noFormat = preg_replace('/Rp/', '', $price);
        $float = floatval($noFormat);
        if($float <= 0){
            throw new Exception('Error: Price must be greater than zero.');
        }
        $this->price = $float;
    }

    public function getPrice(){
        return "Rp" . number_format($this->price, 2);
    }
}
?>