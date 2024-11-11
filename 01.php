<?php 
class MileageCalculator{
    // public $pricePerLitre;
    // // public $distance;
    // // public $totalFuelPrice;

    public function __construct(public $pricePerLitre,public $distance,public $totalFuelPrice){
        // $this->pricePerLitre=$pricePerLitre;
    }

    function calculateKMPL(){
        $totalFuel = $this->totalFuelPrice / $this->pricePerLitre;
        $mileage = $this->distance/$totalFuel;
        echo "The mileage of the vehicle is {$mileage} kmpl.\n";
    }
}

$motorcycle = new MileageCalculator(122,100,500);
// $motorcycle->pricePerLitre = 122;
// $motorcycle->distance = 100;
// $motorcycle->totalFuelPrice = 500;
$motorcycle->calculateKMPL();


// $car = new MileageCalculator();
// $car->pricePerLitre = 122;
// $car->distance = 200;
// $car->totalFuelPrice = 2000;
// $car->calculateKMPL();


// class Test{
//     public $oil;
//     public $distance;
//     public $price;

//     function testKML(){
//         $totaloil = $this->price / $this->oil;
//         $milage = $this->distance / $totaloil;
//         echo "the milage of bike is {$milage} \n";
//     }
// }

// $bike = new Test();
// $bike->oil = 122;
// $bike->distance = 300;
// $bike->price = 500;
// $bike->testKML();

// class Abc{
// public $a;
// public $b;
//  public function C(){
//     $c= $this->a + $this->b;
//     echo "the sum is $c \n";
//  }

// }

// $d = new Abc();
// $d->a=11;
// $d->b=12;
// $d->C();




// function hello(){
//     $name = "abc";
//     $name2 = "abc3";
//     $name3 = "abc4";
// return "the all names are {$name} {$name2} {$name3} \n";

// };

// // echo hello('a', 'b', 'c');
// echo hello();


