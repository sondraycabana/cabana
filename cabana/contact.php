<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    

    $email_from = 'King Cabana Restuarant site';
    $email_subject = 'New Message From King Cabana Contact';
$email_body = "Name: $name.\n".
              "Email: $email.\n".
              "Message: $message.\n".;

$to ="sondraycabana@gmail.com";
$header ="From:$email_from \r\n";
$header = "Reply-To: $email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("location: success.html");