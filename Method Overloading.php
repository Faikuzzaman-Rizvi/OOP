<?php


Class Gadha{
    // __call ,__calstatic
    public function __call($method, $args){
        echo print_r($args);
    }
}

$objGhada = new Gadha();
$objGhada->cat('a' , 'b');
$objGhada->dog('a' , 'b','hello',1,2);