<?php  
class Car {  
    public $brand;  
    public $color;  

    public function __construct($brand, $color) {  
        $this->brand = $brand;  
        $this->color = $color;  
    }  

    public function getDetails() {  
        return "This is a {$this->color} {$this->brand}.";  
    }  
}  

// Creating objects  
$car1 = new Car("Toyota", "red");  
echo $car1->getDetails();  // Output: This is a red Toyota.  
?>  
