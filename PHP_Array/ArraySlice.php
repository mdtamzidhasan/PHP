<?php
$fruits=array('apple','banana','orange','plum','date','mango');
$somefruits=array_slice($fruits,2);
print_r($somefruits);
$somefruits1=array_slice($fruits,2,2);
print_r($somefruits1);
$somefruits2=array_slice($fruits,-5,-1);
print_r($somefruits2);
$somefruits3=array_slice($fruits,2,3,true);
print_r($somefruits3);

$random=array("a"=>12,"b"=>14,"c"=>15,"d"=>17,"e"=>19,12=>120);
$randomdata=array_slice($random,3,null,true);
print_r($randomdata);