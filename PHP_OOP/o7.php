<?php
class DistrictColletion implements IteratorAggregate{
    private $districts;

    function __construct(){
        $this->districts=array();
    }

    function add($district)
    {
        array_push($this->districts, $district);
    }

    function getIterator(): Traversable
    {
        return new ArrayIterator($this->districts);
    }
}

$districts=new DistrictColletion;
$districts->add("dhaka");
$districts->add("dhaka");
$districts->add("dhaka");
$districts->add("dhaka");

foreach($districts as $dis)
{
    echo $dis."\n";
}