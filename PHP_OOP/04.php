<?php
class Shape{
    public $name;
    public $area;

    function __construct($name)
    {
        $this->name=$name;
        $this->calculateArea();
        
    }

    function getArea()
    {
        echo "This {$this->name}'s area is {$this->area}\n";

    }
    function calculateArea(){}

}

class Rectengale extends Shape{
    public $a;
    public $b;
    function __construct($a,$b)
    {
        $this->a=$a;
        $this->b-$b;
        parent::__construct("Rectangle");
    }
    function calculateArea()
    {
        $this->area=$this->a*$this->b;
    }
}
$s=new Rectengale(2,4);
$s->getArea();