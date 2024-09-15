<?php

$person2=array(
    'fname'=>'hello',
    'lname'=>'world'
);
print_r($person2);
unset($person2['lname']);
print_r($person2);