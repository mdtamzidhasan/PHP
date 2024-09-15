<?php
$fruits=array('apple','banana','orange','plum','date','mango');

$newfruits=array("jackfuits","tamarind","pineaple");
$somefruits=array_splice($fruits,-5,2,$newfruits);
print_r($somefruits);
print_r($fruits);

