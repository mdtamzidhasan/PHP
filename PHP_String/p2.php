<?php
$string="Quick brown fox Fox jumps over the lazy dogs";
$offset = strpos($string, "Fox");
echo $offset;
echo PHP_EOL;
$offset1 = stripos($string, "Fox");
echo $offset1;
echo PHP_EOL;
$offset = strrpos($string, "fox");
echo $offset;
echo PHP_EOL;