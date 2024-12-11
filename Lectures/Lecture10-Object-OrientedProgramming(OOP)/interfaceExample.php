<?php  
interface PaymentGateway {  
    public function processPayment($amount);  
}  

class PayPal implements PaymentGateway {  
    public function processPayment($amount) {  
        echo "Processing $$amount through PayPal.";  
    }  
}  

class Stripe implements PaymentGateway {  
    public function processPayment($amount) {  
        echo "Processing $$amount through Stripe.";  
    }  
}  

$payment = new PayPal();  
$payment->processPayment(100);  // Output: Processing $100 through PayPal.  
?>  
