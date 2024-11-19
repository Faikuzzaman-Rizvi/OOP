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

}

$objSon=new Son();
$objFather=new Son();
$objSon->message;
$objSon->print100();
$objFather->print100();