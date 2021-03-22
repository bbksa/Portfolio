
<!-- Test -->

<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$subject_msg = $_POST['subject'];
$formcontent="From: $name \n message: $message";

$recipient = "bibeksa1999@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>