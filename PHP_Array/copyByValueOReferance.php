<?php
//copy by value
//deep copy

$person=array(
    'fname'=>'hello',
    'lname'=>'world'
);
$newperson=$person;
$newperson['lname']='pluto';
print_r($person);
print_r($newperson);

function printdata($person)
{
    $person['fname'].= "changed";
    print_r($person);
}

printdata($person);
print_r($person);

//copy by referance
//shallow copy

$person2=array(
    'fname'=>'hello',
    'lname'=>'world'
);
$newperson2=&$person2;
$newperson2['lname']='pluto';
print_r($person2);
print_r($newperson2);

function printdata2(&$person2)
{
    $person2['fname'].= "changed";
    print_r($person2);
}

printdata2($person2);
print_r($person2);