<?php
$name="Abul Hossain 01763013658";
$parts=sscanf($name,"%s %s %11s");
print_r($parts);

sscanf($name,"%s %s %11s",$fname,$lname,$phone);
echo $phone;

$hexcolor="#FF2F44";
sscanf($hexcolor,"#%2x%2x%2x",$red,$green,$blue);
echo $red;