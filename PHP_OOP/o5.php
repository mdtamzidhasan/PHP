<?php
class Shape {

}

class Shapes {
    private $shape;
    function __construct() {
        $this->shape = array();
    }

    // Correct class name in type hint
    function addShape(Shape $shape) {
        array_push($this->shape, $shape);
    }

    function countShape() {
        return count($this->shape);
    }
}

// Correct class names to use proper capitalization
class Tectangle extends Shape {

}

class Triangle extends Shape {

}

class Student {

}

$makeShape = new Shapes();
//$makeShape->addShape(new Tectangle()); // Correct capitalization
//$makeShape->addShape(new Triangle());  // Correct capitalization
// $makeShape->addShape(new Student()); // This line will throw an error since Student is not a Shape

echo $makeShape->countShape(); // This should print 2
