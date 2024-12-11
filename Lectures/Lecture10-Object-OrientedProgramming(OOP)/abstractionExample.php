<?php  
abstract class Shape {  
    abstract public function calculateArea();  
}  

class Circle extends Shape {  
    private $radius;  

    public function __construct($radius) {  
        $this->radius = $radius;  
    }  

    public function calculateArea() {  
        return pi() * $this->radius ** 2;  
    }  
}  

class Rectangle extends Shape {  
    private $width;  
    private $height;  

    public function __construct($width, $height) {  
        $this->width = $width;  
        $this->height = $height;  
    }  

    public function calculateArea() {  
        return $this->width * $this->height;  
    }  
}  

$circle = new Circle(5);  
echo "Circle Area: " . $circle->calculateArea() . "\n";  // Output: Circle Area: 78.54  

$rectangle = new Rectangle(4, 6);  
echo "Rectangle Area: " . $rectangle->calculateArea();  // Output: Rectangle Area: 24  
?>  
