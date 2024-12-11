<?php  
class Animal {  
    public function makeSound() {  
        echo "Some generic animal sound.";  
    }  
}  

class Dog extends Animal {  
    public function makeSound() {  
        echo "Bark!";  
    }  
}  

$animal = new Animal();  
$animal->makeSound();  // Output: Some generic animal sound.  

$dog = new Dog();  
$dog->makeSound();  // Output: Bark!  
?>  
