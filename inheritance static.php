<?php


Class Father{
    public static $message = "Hello";

    public static function print100(){
        for ($i = 1 ;$i <= 10; $i++){
            echo $i ."\n";
        }
    }
}

Class Son extends Father{

}

// Father::print100();
Son::print100();
Son::$message;

?>