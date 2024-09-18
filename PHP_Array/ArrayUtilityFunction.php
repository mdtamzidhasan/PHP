<?php
$numbers=array(1,2,3,4,5,6,7,8,9);

function square($n)
{
    printf("Square of %d is %d\n",$n,$n*$n);
}

function cube($n)
{
    return $n*$n*$n;
}

function even($n)
{
    return $n%2==0;
}

array_walk($numbers,'square');

$newarray=array_map('cube',$numbers);
print_r($newarray);

$evenNumbers=array_filter($numbers,'even');
print_r($evenNumbers);

$person=array('sujon','saima','kabit','selim','sajna');
function filterByS($name)
{
    return $name[0]=='s';
}
$newPerson=array_filter($person,'filterByS');
print_r($newPerson);