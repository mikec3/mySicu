<!doctype html>


<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="pickList.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    
   <script src="SCIS.js"></script>
    
</head>
<body>
    
<div class="header">
       <div class="container">
           <? include ("SICUMenu.html") ?>

       </div>
    </div>
    
    <div id="pickListMenu">
        <ul> <a href='/pickList/pickListFull.pdf'><p>Pick Lists</p></a>
            <li><a href='#ALineInsertion'> A-line insertion</a></li>
            <li><a href='#ALineRemoval'> A-line removal</a></li>
            <li><a href='#bladderPressure'> Bladder pressure</a></li>
            <li><a href='#bronchoscopy'> Bronchoscopy</a></li>
            <li><a href='#cardioversion'> Cardioversion</a></li>
            <li><a href='#centralLineInsertion'> Central line insertion</a></li>
            <li><a href='#centralLineRemoval'> Central line removal</a></li>
            <li><a href='#chestTubeInsertion'> Chest tube insertion</a></li>
            <li><a href='#chestTubeRemoval'> Chest tube removal</a></li>
            <li><a href='#epidural'> Epidural</a></li>
            <li><a href='#intubation'> Intubation</a></li>
            <li><a href='#pacerWireRemoval'> Pacer wire removal</a></li>
            <li><a href='#percutaneousTrach'> Percutaneous trach</a></li>
            <li><a href='#splitChestTubes'> Split chest tubes</a></li>
            <li><a href='#thoracentesis'> Thoracentesis</a></li>
        </ul>
    </div>
    
    
    
    <? include ("pickList/ALineInsertion.html") ?>
    
    <? include ('pickList/ALineRemoval.html') ?>
    
    <? include ('pickList/bladderPressure.html') ?>
    
    <? include ('pickList/bronchoscopy.html') ?>
    
    <? include ('pickList/cardioversion.html') ?>
    
    <? include ('pickList/centralLineInsertion.html') ?>
    
    <? include ('pickList/centralLineRemoval.html') ?>
    
    <? include ('pickList/chestTubeInsertion.html') ?>
    
    <? include ('pickList/chestTubeRemoval.html') ?>
    
    <? include ('pickList/epidural.html') ?>
    
    <? include ('pickList/extubation.html') ?>
    
    <? include ('pickList/intubation.html') ?>
    
    <? include ('pickList/pacerWireRemoval.html') ?>
    
    <? include ('pickList/percutaneousTrach.html') ?>
    
    <? include ('pickList/splitChestTubes.html') ?>
    
    <? include ('pickList/thoracentesis.html') ?>
    
    
    
    
    
    
    
    
    
    <!-- BEGIN SCIS input pop-up box and  PHPmailer code -->

<div id='SCISInputX' class='SCISInput'>
    
    <p> Please fill out this form to critique the info sheets! </p>
    <img id="close" src="/Assets/dialog_close.png">
    <form method='post' id='critique'  >
  
    <input id='procedure' name='procedure' placeholder='procedure' value="procedure" type='text' required> 
    <textarea id='suggestions' name='suggestions' placeholder='suggestions' type='text' required autofocus></textarea>
    <input type='submit' name='submit' id='suggest' value='submit'>   <!-- Forgive me code gods, I know not of what i do -->
    
    </form>
    </div>
    
 <?php
 if(isset($_POST['submit'])) {
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

$mail->Subject =  $procedure ;	// $email variable set above from contact form
$mail->Body    = $suggestions;				// $message variable set above from contact form
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} 

};

?>
   <!-- END OF SCIS INPUT box -->
    
    
    </body>
</html>