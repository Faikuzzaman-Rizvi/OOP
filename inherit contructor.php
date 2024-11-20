<?php

class Father {
    public function __construct() {
        echo "Father's constructor is called.";
    }
}

class Son extends Father {
    // No constructor here
}

$son = new Son(); // Output: Father's constructor is called.


class Fathers {
    public function __construct() {
        echo "Father's constructor is called.";
    }
}

class Sons extends Fathers {
    public function __construct() {
        parent::__construct(); // Explicitly calling Father's constructor
        echo "Son's constructor is called.";
    }
}

$sons = new Sons(); 
// Output:
// Father's constructor is called.
// Son's constructor is called.