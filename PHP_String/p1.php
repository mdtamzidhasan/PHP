<?php
$name="rakib";

$string1='my name is $name\n';
$string2="\nmy name is $name\n";
echo $string1;
echo $string2;

$heredoc=<<<EOD
data 2
new line $name \n
more text
EOD;

echo $heredoc;