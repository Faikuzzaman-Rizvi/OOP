<?php 

Class Bike{
    public $name = 'Royel Enfield';
    public $model = 'classic 350';
    public $color = 'black';

    public function __construct(){
        echo "the bike name is {$this->name} & the bike model is {$this->model} & color is {$this->color}\n";
    }
}

$objbike = new Bike();



Class Bikes{
    public $name;
    public $model;
    public $color;

    public function __construct($name,$model,$color){
        // echo $name,$model,$color;
        // echo $this->name = $name;
        // echo $this->model = $model;
        // echo $this->color = $color;
        echo $name;
        echo $model;
        echo $color;
    }
}

$objbikes = new Bikes("Royel Enfield\n","Classic 350\n","Red\n");
$objbikes1 = new Bikes("Royel Enfield\n","gt 650\n","black\n");


class Car {
    public function __construct($num1,$num2) {
    echo $num1+$num2."\n";
    }
   }

   $mycar = new Car(1,2);

   class Cars{
    // public $num1;
    // public $num2;
    public function __construct(public $num1,public $num2) {
     $this->num1 = $num1;
     $this->num2 = $num2;
    }
    function AddTwoNum(){
    echo  $this->num1+$this->num2;
    }
    }

    $mycars = new Cars(2,4);
    $mycars->AddTwoNum();