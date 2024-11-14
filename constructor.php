<?php 

Class Bike{
    public $name = 'Royel Enfield';
    public $model = 'classic 350';
    public $color = 'black';

    public function __construct(){
        echo "the bike name is {$this->name} & the bike model is {$this->model} & color is {$this->color}\n";
    }
}

// $objbike = new Bike();



Class Bikes{
    // public $name;
    // public $model;
    // public $color;

    public function __construct(public $name, public $model,public $color){
        echo $name,$model,$color;
    }
}

$objbikes = new Bikes("Royel Enfield\n","Classic 350\n","Red");