<?php  
class Vehicle {  
    public $type;  

    public function __construct($type) {  
        $this->type = $type;  
    }  

    public function start() {  
        echo "The {$this->type} is starting.";  
    }  
}  

class Bike extends Vehicle {  
    public function ringBell() {  
        echo "The bike's bell rings.";  
    }  
}  

$bike = new Bike("bike");  
$bike->start();  // Output: The bike is starting.  
$bike->ringBell();  // Output: The bike's bell rings.  
?>  
