<?php 

    $name = $_POST['name'];
    $sender_email = $_POST['email'];
    $message = $_POST['message'];

    $email_from = 'WCSmessagerequest@wnc.co.uk';

    $email_subject = "New Message from WCS";

    $email_body = "User Name: $name.\n". "User Email: $sender_email.\n". "User Message: $message.\n";

    $to ="cybersec.webservicesgmail.com";

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $sender_email \r\n";

    mail($to,$email_subject,$email_body,$headers);

    header("Location: homepage.html");

?>