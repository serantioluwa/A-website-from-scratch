<?php
$name = $_POST['name'];
$phone number = $_POST['number'];
$visitor email = $_POST['email'];
$message = $_POST['message'];


$email_from = 'rccgpeniel.com';

$email_subject = "New Form Submission";

$email_body = "User Name: $name.\n".
                "User Number: $number.\n".
                    "User Email: $email.\n".
                        "User Message: $message.\n";


$to = "info.penielchapel@gmail.com";

$headers = "From: $email_from \r\n";

$headers = "Reply To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: contact.html");

?>