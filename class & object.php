<?php 

Class Bike{
    public $color = 'black';

    public function price(){
        echo "the bike price is 350000 tk & the bike color is {$this->color}\n";
    }
}

$objbike = new Bike();
echo $objbike->color = "red\n";
$objbike->price();