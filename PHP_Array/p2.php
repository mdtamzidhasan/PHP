<?php
$students=array(
    "rahim",
    "karim"

);

for($i=0; $i<count($students); $i++)
{
    echo "{$students[$i]}.\n";
}

$students[]="abdul";
echo "after add new item\n";
for($i=0; $i<count($students); $i++)
{
    echo "{$students[$i]}.\n";
}

array_push($students, "kashem");
echo "after array_push\n";
for($i=0; $i<count($students); $i++)
{
    echo "{$students[$i]}.\n";
}

array_unshift($students, "shohag");
echo "after use array_unshift\n";
for($i=0; $i<count($students); $i++)
{
    echo "{$students[$i]}.\n";
}

$shift=array_shift($students);
echo "after use array_shift\n";
for($i=0; $i<count($students); $i++)
{
    echo "{$students[$i]}.\n";
}

$pop=array_pop($students);
echo"after use array_pop\n";
for($i=0; $i<count($students); $i++)
{
    echo "{$students[$i]}.\n";
}