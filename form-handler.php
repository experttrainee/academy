<?php  
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$email_subject =$_POST['subject'];
$message =$_POST['message'];

$email_from ='New Form Submission';
$email_body = "User Email:$vistior_email.\n".
              "Subject:$subject.\n".
              "User Message:$message.\n".;

$to ='azadwazir9@gmail.com';
$headers="From:$email_from \r\n";
$headers = "Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: contact.html");




?>