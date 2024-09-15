<?php
class Human {
    public $name;
    public $age;

    function __construct($personName, $personAge=0)
    {
        $this->name=$personName;
        $this->age=$personAge;
    }
    function sayHi(){
        echo "salam\n";
        $this->sayName();
    }
    function sayName(){
        if($this->age){
            echo"my name is {$this->name} and my age is {$this->age}\n";
        }
        else{
            echo"my name is {$this->name} and i don't know my age";
        }
    }
}
$h1 = new Human("hasin",34);
$h1->sayHi();
$h2=new Human("survo");
$h2->sayHi();
