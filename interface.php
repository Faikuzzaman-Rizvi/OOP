<?php

// Define the interface
interface Animal {
    public function speak(); // method signature
}

// Implementing the interface in a class
class Dog implements Animal {
    public function speak() {
        echo "Woof!" . PHP_EOL;
    }
}

class Cat implements Animal {
    public function speak() {
        echo "Meow!" . PHP_EOL;
    }
}

// Creating instances of the classes
$dog = new Dog();
$cat = new Cat();

// Calling the implemented methods
$dog->speak(); // Output: Woof!
$cat->speak(); // Output: Meow!




// Define the Vehicle interface
interface Vehicle {
    public function startEngine();
    public function stopEngine();
    public function honk();
}

// Implementing the Vehicle interface for a Car
class Car implements Vehicle {
    public function startEngine() {
        echo "Car engine started!" . PHP_EOL;
    }

    public function stopEngine() {
        echo "Car engine stopped!" . PHP_EOL;
    }

    public function honk() {
        echo "Car honks: Beep beep!" . PHP_EOL;
    }
}

// Implementing the Vehicle interface for a Motorcycle
class Motorcycle implements Vehicle {
    public function startEngine() {
        echo "Motorcycle engine started!" . PHP_EOL;
    }

    public function stopEngine() {
        echo "Motorcycle engine stopped!" . PHP_EOL;
    }

    public function honk() {
        echo "Motorcycle honks: Honk honk!" . PHP_EOL;
    }
}

// Implementing the Vehicle interface for a Truck
class Truck implements Vehicle {
    public function startEngine() {
        echo "Truck engine started!" . PHP_EOL;
    }

    public function stopEngine() {
        echo "Truck engine stopped!" . PHP_EOL;
    }

    public function honk() {
        echo "Truck honks: Hooooonk!" . PHP_EOL;
    }
}

// Using the classes
$car = new Car();
$car->startEngine(); // Output: Car engine started!
$car->honk();        // Output: Car honks: Beep beep!
$car->stopEngine();  // Output: Car engine stopped!

echo PHP_EOL;

$motorcycle = new Motorcycle();
$motorcycle->startEngine(); // Output: Motorcycle engine started!
$motorcycle->honk();        // Output: Motorcycle honks: Honk honk!
$motorcycle->stopEngine();  // Output: Motorcycle engine stopped!

echo PHP_EOL;

$truck = new Truck();
$truck->startEngine(); // Output: Truck engine started!
$truck->honk();        // Output: Truck honks: Hooooonk!
$truck->stopEngine();  // Output: Truck engine stopped!






?>
