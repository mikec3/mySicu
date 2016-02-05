<?php
date_default_timezone_set('Etc/UTC');
require '../external/external1.php';			// stores the $SMTPPassword variable. thats external(#one).php
require 'PHPMailer-master/PHPMailerAutoload.php';	// required by PHPMailer
//require 'class.phpmailer.php';
$mail = new PHPMailer;

//$mail->SMTPDebug = 4;                               // Enable verbose debug output


$procedure = $_REQUEST['procedure'];				// takes the name from the contact form 
$suggestions = $_REQUEST['suggestions'];				// takes the e-mail from the contact form



$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'mbox.freehostia.com';  			// Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'user@mysicu.com';                 // SMTP username
$mail->Password = $SMTPPassword;                           // SMTP password as listed in ../external/external1.php
$mail->SMTPSecure = 'NONE';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 2525;                                    // TCP port to connect to

			
$mail->addAddress('mikecouch@mysicu.com');     // Add a recipient


$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'contact form from: ' . $procedure ;	// $email variable set above from contact form
$mail->Body    = ' ' . $suggestions;				// $message variable set above from contact form
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
   if(isset($_REQUEST["destination"])){				// validates if browser sent the hidden form with requesting uri info
      header("Location: {$_REQUEST["destination"]}");		// if above is validated, returns to the sending page 
  }else if(isset($_SERVER["HTTP_REFERER"])){			// a backup for above, some browsers dont log this one
      header("Location: {$_SERVER["HTTP_REFERER"]}");		// sends user back to the page that sent them here.
  }else{
       /* some fallback, maybe redirect to index.php */
      header("Location: http://www.mysicu.com");		// above examples are not 100% reliable on all broswers, this is a backup
  }
}

?>