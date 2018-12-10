<?php

  $name = $_POST['name'];
echo $name;

  $visitor_email = $_POST['email'];
echo $visitor_email;
  $message = $_POST['message'];
echo $message;
  $subject = $_POST['subject'];
echo $subject;
  $email_from = "ahmed.belhadj.games@gmail.com";
  
  $email_subject = $subject;

 

    $email_body = "You have received a new message from the user $name .\n".

                            "Here is the message:\n $message";



  $to = "ahmed.belhaj.games@gmail.com";


  $headers = "From: $email_from \r\n";



  $headers .= "Reply-To: $visitor_email \r\n";

 

  mail($to,$email_subject,$email_body,$headers);

 

 ?>


