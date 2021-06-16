<?php

// Replace this with your own email address
$to = 'okkopsiu@gmail.com';

function url()
{
   return sprintf(
      "%s://%s",
      isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
      $_SERVER['SERVER_NAME']
   );
}

if ($_POST) {

   $name = trim(stripslashes($_POST['name']));
   $email = trim(stripslashes($_POST['email']));
   $telefone = trim(stripslashes($_POST['telefone']));
   $cnpj = trim(stripslashes($_POST['cnpj']));
   $periodo = trim(stripslashes($_POST['periodo']));
   $subject = trim(stripslashes($_POST['subject']));
   // $contact_message = trim(stripslashes($_POST['message']));

   if ($subject == '') {
      $subject = "Contact Form Submission";
   }

   // Set Message
   $message .= "Email de: " . $name . "<br />";
   $message .= "Email: " . $email . "<br />";
   $message .= "Telefone: " . $telefone . "<br />";
   $message .= "CNPJ: " . $cnpj . "<br />";
   $message .= "O cliente quer receber um contato no período de: ".$periodo."<br />";
   // $message .= nl2br($contact_message);
   $message .= "<br /> ----- <br /> O email foi enviado de seu site " . url() . " contact form. <br />";

   // Set From: header
   $from =  $name . " <" . $email . ">";

   // Email Headers
   $headers = "From: " . $from . "\r\n";
   $headers .= "Reply-To: " . $email . "\r\n";
   $headers .= "MIME-Version: 1.0\r\n";
   $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";

   ini_set("sendmail_from", $to); // for windows server
   $mail = mail($to, $subject, $message, $headers);

   if ($mail) {
      echo "OK";
   } else {
      echo "Algo deu errado. Por favor tente novamente.";
   }
}
