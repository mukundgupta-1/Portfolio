<?php
  /**
  * Requires the "PHP Email Form" library
  * The "PHP Email Form" library is available only in the pro version of the template
  * The library should be uploaded to: vendor/php-email-form/php-email-form.php
  * For more info and help: https://bootstrapmade.com/php-email-form/
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'mukundgupta1919@gmail.com';
  
  $to = $receiving_email_address;
  $name= $_POST['name'];
  $visitor_email= $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $email_from = 'portfolio';
  $headers = "From: $email_from \r\n";
	$email_subject = "New Form submission";

	$email_body = "You have received a new message from the user $name.\n".
                            "Here is the message:\n $message"


  mail($to,$subject,$email_body,$headers)


  echo $contact->send();

  
?>
