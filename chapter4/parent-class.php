<?php 

class Image {
    public static $resizeStatus = true;

    public static function geometry(){
        echo "800x600";
    }


}

class PhotoProfile extends Image {
    public static function geometry(){
        if(self::$resizeStatus){
            return "50x50";
        } else {
            parent::geometry();
        }
    }
}

echo Image::geometry() . "<br>";
echo PhotoProfile::geometry() . "<br>";

Image::$resizeStatus = false;
echo PhotoProfile::geometry() . "<br>";

?>