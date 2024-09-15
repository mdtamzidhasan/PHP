<?php
class parentClass{
    public $name;

    function __construct($personName)
    {
        $this->name=$personName;
        $this->sayHi();
    }

    function sayHi(){
        echo "my name is {$this->name}\n";
    }
}

class childClass extends parentClass{

    function sayHi(){
        parentClass::sayHi();
        echo "hello";
    }
}

$c=new childClass("abcd");
