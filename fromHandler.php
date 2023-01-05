<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email_from = 'rialahmed0@gmail.com';

$email_subject = 'New Form Submission';

$email_body = "User Name: "$name.\n".
              "User Email: "$visitor_email.\n".
              "subject: "$subject.\n".
              "User message: "$message.\n".;


$to = 'rialahmed00@gmail.com';
$headers = "Form: $email_from \r\n";
$headers .="Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html")
?>