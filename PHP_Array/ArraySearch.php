<?php
$fruits=array('a'=>'apple','b'=>'banana','o'=>'orange','p'=>'plam');
$numbers=array(1,11,2,3,'56',55,7,33,8);
if(in_array(56,$numbers,true))
{
    echo "56 is found\n";
}
$ofset=array_search(2,$numbers);
echo "$ofset\n";

if(key_exists('b',$fruits))
{
    echo "key b exists";
}
