<?php
$foods=[
    'vegetables'=>'brinjal, brocolli, carrot, capsicum',
    'fruits'=>'orange, banana, apple',
    'drinks'=>'water, milk'
];
$foods['drinks'] .=', lemon juice';
echo $foods['drinks']."\n";

foreach($foods as $key=>$value)
{
    echo $key."=".$value."\n";
}

$keys=array_keys($foods);
for($i=0;$i<count($keys);$i++)
{
    $key=$keys[$i];
    echo $foods[$key]."\n";
}

$values=array_values($foods);
for($i=0;$i<count($values);$i++)
{
    $value=$values[$i];
    echo $value."\n";
}