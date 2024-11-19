<?php

 final Class Father{
    public $message = "Hello";

    public function print100(){
        for ($i = 1 ;$i <= 10; $i++){
            echo $i ."\n";
        }
    }
}

Class Son extends Father{
    public function print100(){
        for ($i = 1 ;$i <= 20; $i++){  //!son override father method..
            echo $i ."\n";
        }
    }
}

$objFather=new Father();
$objFather->print100();
$objSon=new Son();
echo $objSon->message;
$objSon->print100();


final class MyFinalClass {
    public function display() {
        echo "This is a final class.";
    }
}

// Attempting to extend a final class will cause an error
class AnotherClass extends MyFinalClass {
    // Error: Class AnotherClass may not inherit from final class MyFinalClass
}


class ParentClass {
    final public function finalMethod() {
        echo "This is a final method.";
    }
}

class ChildClass extends ParentClass {
    // Attempting to override will cause an error
    public function finalMethod() {
        // Error: Cannot override final method ParentClass::finalMethod()
    }
}
