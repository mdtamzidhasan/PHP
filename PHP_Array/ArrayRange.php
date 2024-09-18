<?php
$number=array(11,12,13,14,15,16,17,18,19,20);
print_r($number);

$numbers=array();
for($i=12;$i<21;$i++)
{
    array_push($numbers,$i);
}
print_r($numbers);

$number1=range(12,20,2);
print_r($number1);

foreach(range(12,20,2) as $evenNumber)
{
    echo $evenNumber."\n";
}