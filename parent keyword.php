<?php

class Father {
    public function __construct($name) {
        echo "Father's constructor called. Name: $name" . PHP_EOL;
    }
}

class Son extends Father {
    public function __construct($name) {
        parent::__construct($name); // Son explicitly requests the Father's constructor
        echo "Son's constructor called. Name: $name" . PHP_EOL;
    }
}


$son = new Son("Ali");
// Output:
// Father's constructor called. Name: Ali
// Son's constructor called. Name: Ali
