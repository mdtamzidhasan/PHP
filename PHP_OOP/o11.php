<?php
class Planet{
    public $name;

    function __construct($name)
    {
        $this->name=$name;
    }
}
$e=new Planet("Earth");
$e2=new Planet("Mars");

if($e==$e2)
{
    echo "Similar Planet\n";
}
else{
    echo "Not Similar\n";
}

$e2->name="Earth";


if($e===$e2)
{
    echo "Similar Planet\n";
}
else{
    echo "Not Similar\n";
}