<?php
$numbers1=array(1,4,3,5,77,55,3,7,8);
$number2=array(1,5,2,33,5,77,5,88,9,43);

$fruits1=array('a'=>'apple','b'=>'banana','o'=>'orange','c'=>'lemon');
$fruits2=array("d"=>"pineapple","b"=>"malta","d"=>"graps","c"=>"lemon");

$common=array_intersect($numbers1,$number2);
$commonf=array_intersect($fruits1,$fruits2);
$commonff=array_intersect_assoc($fruits1,$fruits2);
print_r($common);
print_r($commonf);
print_r($commonff);

$difference=array_diff($fruits1,$fruits2);
$differencef=array_diff($fruits1,$fruits2);
$differenceff=array_diff_assoc($fruits1,$fruits2);
print_r($difference);
print_r($differencef);
print_r($differenceff);