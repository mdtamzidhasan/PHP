<?php
$number=array(1,2,3,4,5,6);
function sum($oldValue, $newValue)
{
    if($newValue%2==0)
    return $oldValue+$newValue;

    return $oldValue;
}

$sumEven=array_reduce($number,'sum');
echo $sumEven."\n";
echo count($number);