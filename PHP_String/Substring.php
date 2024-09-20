<?php
$string = "Hello World";
echo $string[0];
echo PHP_EOL;
echo $string[-2];
echo PHP_EOL;
$len=strlen($string);
echo substr($string,$len-3);
echo PHP_EOL;

echo substr($string,-3);
echo PHP_EOL;