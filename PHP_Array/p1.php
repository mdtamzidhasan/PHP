<?php
$students=array(
    "rahim",
    "karim",
    123,
    "sarif"
);

$student=[
    "abul",
    "babul",
    "kabil"
];
echo $student[0];
var_dump($students);
for($i=0; $i<count($student);$i++)
{
    echo "{$student[$i]}\n";
}