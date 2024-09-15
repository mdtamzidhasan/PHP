<?php
class Student{
    private $name;
    private $age;
    private $class;

    function __construct($name='', $age='', $class='')
    {
        $this->name=$name;
        $this->age=$age;
        $this->class=$class;

    }

    public function __get($prop){
        return $this->$prop;
    }

    function __set($name, $value)
    {
        $this->$name=$value;
    }
}

$s=new Student();
$s->name="rahim";
echo $s->name;
