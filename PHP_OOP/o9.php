<?php
class FavColor{
    public $data;
    function __construct($data)
    {
        $this->data=$data;
    }

    function setData($data){
        $this->data=$data;
    }
}
$fc1=new FavColor('some data');
$fc2=clone $fc1;
print_r($fc1);
print_r($fc2);
$fc2->setData("do something");
print_r($fc2);