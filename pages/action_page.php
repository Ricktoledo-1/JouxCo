<?php $firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "wulff.design.development@gmail.com";
$subject = "Customer Message";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Your Message Has Been Sent! Thank You! We Will Get Back To You Shortly.";
?>