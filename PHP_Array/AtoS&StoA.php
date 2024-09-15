<?php
$vegetables=explode(', ','brinjal, brocolli, carrot, capsicum');
var_dump($vegetables);

$vegetablesString=join(', ',$vegetables);
echo $vegetablesString."\n";


$vegetable=preg_split('/(, |,)/','brinjal, brocolli, carrot, capsicum,potato,cucumber');
print_r($vegetable);