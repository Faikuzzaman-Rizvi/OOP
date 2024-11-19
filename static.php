<?php

class Bike {
    public static $color = 'black';

    public static function price() {
        echo "The bike price is 350000 tk & the bike color is " . self::$color . "\n";
    }
}

// Access the static property and method correctly
Bike::$color = 'red'; // Example of setting the static property
Bike::price();

?>
