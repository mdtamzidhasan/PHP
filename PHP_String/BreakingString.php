<?php
$str="Hello world, how are you";
$parts=explode(" ",$str);
print_r($parts);
echo PHP_EOL;

$orginal=join(" ",$parts);
echo $orginal;

$part1=str_split($str);
print_r($part1);

//$part2=strtok($orginal," ,");
//while($parts2 !== false)
//{
//   echo $parts2."\n";
 //  $part2=strtok(" ,");
//}
echo PHP_EOL;
$part4=preg_split("/ |,/",$orginal);
print_r($part4);