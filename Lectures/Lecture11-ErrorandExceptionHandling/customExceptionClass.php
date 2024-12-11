<?php
// Custom Exception Class Example
class MyCustomException extends Exception {
    public function errorMessage() {
        return "Error: " . $this->getMessage() . " on line " . $this->getLine();
    }
}

try {
    throw new MyCustomException("This is a custom exception.");
} catch (MyCustomException $e) {
    echo $e->errorMessage();
}
?>
