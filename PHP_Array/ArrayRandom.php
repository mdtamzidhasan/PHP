<?php
$number=range(40,72);
$random=mt_rand(0,32);
echo $random;
echo "\n";
$luck=$number[$random];
if($luck%2==0)
{
    echo "Head";
}
else{
    echo "Tail";
}

echo "\n";

shuffle($number);
print_r($number);
$randomNumber=$number[3];
echo "$randomNumber";