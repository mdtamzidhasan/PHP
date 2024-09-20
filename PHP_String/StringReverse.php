<?php
$string ="Hello  World";
 $len=strlen($string);
 for($i=$len;$i>=0;$i--)
 {
    echo $string[$i];
 }

 echo PHP_EOL;

 for($i=1;$i<=$len;$i++)
 {
    echo $string[$i*-1];
 }
 echo PHP_EOL;
 echo strrev($string);