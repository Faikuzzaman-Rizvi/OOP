<?php

Class Father{
    public $message = "Hello";

    public function print100(){
        for ($i = 1 ;$i <= 10; $i++){
            echo $i ."\n";
        }
    }
}

Class Son extends Father{
    public function print100(){
        for ($i = 1 ;$i <= 20; $i++){  //!son override father method..
            echo $i ."\n";
        }
    }
}

$objFather=new Father();
$objFather->print100();
$objSon=new Son();
echo $objSon->message;
$objSon->print100();