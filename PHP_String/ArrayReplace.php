<?php
$string="Quick Brown brown fox Fox jumps over the lazy dogs";
$replaceString = str_replace('brown','red',$string);
echo $replaceString;
echo PHP_EOL;

$replaceString1 = str_ireplace('brown','red',$string,$count);
echo $replaceString1;
echo PHP_EOL;
echo "Total replacement {$count}\n";
$replaceString1 = str_ireplace(array('brown','fox'),array('red','cat'),$string,$count);
echo $replaceString1;
echo PHP_EOL;