<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$surName = $_POST['surname'];
$message = $_POST['message'];
$formcontent=" From: $name \n Phone: $phone \n Message: $message";
$recipient = "lahiru.16@cse.mrt.ac.lk";
$subject = "Contact-LahiruSenevirathne.me";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='index.html' style='text-decoration:none;color:#ff0099;'> Return Home</a>";

?>