<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $payment_method = $_POST['payment_method'];

    // Handle UPI payment
    if ($payment_method == 'upi') {
        $upi_id = $_POST['upi_id'];
        // Process UPI payment here
        echo "Processing UPI payment with UPI ID: $upi_id";
    }

    // Handle Card payment
    if ($payment_method == 'card') {
        $card_number = $_POST['card_number'];
        $expiry_date = $_POST['expiry_date'];
        $cvv = $_POST['cvv'];
        // Process card payment here
        echo "Processing card payment with Card Number: $card_number";
    }

    // Add more logic to handle payment processing and redirection
}
?>
