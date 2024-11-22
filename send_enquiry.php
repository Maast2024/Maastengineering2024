<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $to = "maasteng2016@gmail.com";  // Your email address
    $subject = "New Enquiry from " . $name;
    $body = "You have received a new enquiry:\n\n" .
            "Name: " . $name . "\n" .
            "Email: " . $email . "\n" .
            "Phone: " . $phone . "\n" .
            "Message: " . $message;

    $headers = "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your enquiry. We will get back to you soon.";
    } else {
        echo "There was an error submitting your enquiry. Please try again later.";
    }
}
?>
