<?php 
    $visitor_email = $_POST['email'];

    $email_from = 'contact@isoplate.co.uk';
    $email_subject= "Email Subscribe Submission";
    $email_body = "User Email: $visitor_email.\n" .

    $to = "dottiehope@hotmail.com";

    $headers = "From: $email_from \r\n" ;
    $headers = "Reply-To: $visitor_email \r\n" ;
    mail($to,$email_subject,$email_body,$headers);
    header ("Location: index.html");
?>