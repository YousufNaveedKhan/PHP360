### **Lecture 10: Object-Oriented Programming (OOP)**  

#### **Overview**  
This lecture introduces Object-Oriented Programming (OOP) in PHP, a paradigm that structures programs around **objects** and **classes**. OOP is essential for building modular, reusable, and scalable applications. This lecture explores the **4 pillars of OOP**:  
- **Encapsulation**  
- **Inheritance**  
- **Polymorphism**  
- **Abstraction**  

---  

#### **Topics Covered**  
1. Introduction to Classes and Objects  
2. Encapsulation: Properties and Methods  
3. Inheritance: Reusing and Extending Functionality  
4. Polymorphism: Overriding Methods and Dynamic Behavior  
5. Abstraction: Hiding Implementation Details  
6. Interfaces and Abstract Classes  
7. Real-World Applications of OOP  

---  

### **Directory Structure**  

```  
Lecture10_ObjectOrientedProgramming/  
│  
├── classExample.php         // Basic class and object example  
├── inheritanceExample.php   // Demonstrates inheritance  
├── polymorphismExample.php  // Demonstrates polymorphism  
├── abstractionExample.php   // Explains abstraction and abstract classes  
├── interfaceExample.php     // Using interfaces in PHP  
├── oopConcepts.md           // Conceptual explanation of OOP in PHP  
```  

---  

### **File Descriptions**  

1. **classExample.php**  
   - **Purpose**: Demonstrates defining classes and creating objects.  

2. **inheritanceExample.php**  
   - **Purpose**: Explains how child classes inherit and override functionality.  

3. **polymorphismExample.php**  
   - **Purpose**: Shows how polymorphism enables dynamic behavior across different classes.  

4. **abstractionExample.php**  
   - **Purpose**: Illustrates abstraction using abstract classes and abstract methods.  

5. **interfaceExample.php**  
   - **Purpose**: Demonstrates defining and implementing interfaces.  

6. **oopConcepts.md**  
   - **Purpose**: Provides a detailed conceptual explanation of OOP principles.  

---

### **OOP: The 4 Pillars**  

#### **1. Encapsulation**  
Encapsulation bundles data (properties) and methods (functions) into a single unit (class) and restricts access using access modifiers like `public`, `protected`, and `private`.  

**Example:**  
```php  
class BankAccount {  
    private $balance = 0;  

    public function deposit($amount) {  
        $this->balance += $amount;  
    }  

    public function getBalance() {  
        return $this->balance;  
    }  
}  

$account = new BankAccount();  
$account->deposit(1000);  
echo $account->getBalance();  // Output: 1000  
```  

---  

#### **2. Inheritance**  
Inheritance allows a class (child) to inherit properties and methods from another class (parent).  

**Example:**  
```php  
class ParentClass {  
    public function greet() {  
        echo "Hello from Parent Class!";  
    }  
}  

class ChildClass extends ParentClass {  
    public function greet() {  
        echo "Hello from Child Class!";  
    }  
}  

$child = new ChildClass();  
$child->greet();  // Output: Hello from Child Class!  
```  

---  

#### **3. Polymorphism**  
Polymorphism enables methods in child classes to behave differently from the parent class.  

**Example:**  
```php  
class Animal {  
    public function makeSound() {  
        echo "Generic animal sound.";  
    }  
}  

class Dog extends Animal {  
    public function makeSound() {  
        echo "Bark!";  
    }  
}  

$animal = new Animal();  
$animal->makeSound();  // Output: Generic animal sound.  

$dog = new Dog();  
$dog->makeSound();  // Output: Bark!  
```  

---  

#### **4. Abstraction**  
Abstraction hides the implementation details and provides a simple interface for the user. It is achieved using **abstract classes** and **interfaces**.  

**Example: Abstract Class**  
```php  
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

$circle = new Circle(5);  
echo "Circle Area: " . $circle->calculateArea();  // Output: Circle Area: 78.54  
```  

---  

### **Real-World Applications of OOP**  

#### **Use of OOP in PHP**  
- **Web Applications**: Frameworks like Laravel and Symfony heavily rely on OOP principles for routing, middleware, and controller management.  
- **CMS Development**: WordPress uses OOP for plugins, themes, and its core structure.  
- **E-Commerce Systems**: Shopping carts, product catalogs, and payment gateways often use OOP to manage functionality modularly.  

#### **Examples in Other Languages**  
- **Java**: Android apps leverage OOP for UI design and data handling.  
- **C++**: Gaming engines like Unreal Engine use OOP for creating reusable game objects.  
- **Python**: Django and Flask implement OOP for routing, ORM, and modular app development.  
- **JavaScript**: Front-end libraries like React use OOP principles for components and state management.  

#### **Why OOP Matters**  
- **Code Reusability**: Write once, reuse many times through inheritance and polymorphism.  
- **Scalability**: Applications can grow without rewriting the entire codebase.  
- **Team Collaboration**: Modular design allows teams to work on separate components simultaneously.  

---  

### **Best Practices in OOP**  
- Follow **SOLID principles** for clean and scalable code.  
- Use **encapsulation** to protect data.  
- Leverage **inheritance** for reusability.  
- Use **interfaces and abstraction** for flexibility and loose coupling.  

---  

### **Conclusion**  
Mastering the **4 pillars of OOP**—Encapsulation, Inheritance, Polymorphism, and Abstraction—enables developers to build structured and maintainable applications. By understanding its real-world applications, you can better appreciate how OOP simplifies complex projects across various programming languages.  

In the next lecture, we will explore **Error and Exception Handling**, focusing on managing runtime errors and creating custom exceptions for robust application development.  