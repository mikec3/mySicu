<!doctype html>


<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="SCISCss.css">
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
    
    <div class="topSCISMenu">
        
         
    <div class="surgicalCases">
   <a href="SCIS.php" style=" color: black; font-size: 30px;"> Surgical cases info sheets </a>
        <ul>
            <div class="dropdown-container" style="background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcS8n0GVJZiHlomF6gFRMUw9W1vSkdSkN9vgWlnedLkiSiTHLAt5Rg');">
        <li class="dropdown">
            <a href="SCIS.php#cardiothoracic" class="dropdown-toggle">Cardiothoracic </a>
            <ul class="dropdown-menu">
              <li><a href="SCIS.php#AAACardio">AAA</a></li>
              <li><a href="SCIS.php#CABG/valve">CABG/valve</a></li>
            </ul>
            </li>
            </div>
            
            
            
            <div class="dropdown-container" style="background-image: url('http://dietricksurgery.com/wp-content/uploads/2013/04/General-Surgery.jpg');">
        <li class="dropdown">
            <a href="SCIS.php#general" class="dropdown-toggle">General </a>
                <ul class="dropdown-menu">
                    <li> <a href="SCIS.php#BowelResection">  Bowel resection </a></li>
                    <li> <a href="SCIS.php#ERCP">  ERCP </a></li>
                    <li> <a href="SCIS.php#Gastrectomy">  Gastrectomy </a></li>
                    <li> <a href="SCIS.php#Hernia">  Hernia repair </a></li>
            </ul>
                </li>
            </div>
            
           
            
            
            
            <div class="dropdown-container" style="background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQCOIIBn3gOU05h4aFByEgygfKfz_-pUi33_cLbUv7HQFJNQP2J');">
        <li class="dropdown">
            <a href="SCIS.php#neuro" class="dropdown-toggle">Neuro</a>
            <ul class="dropdown-menu">
            <li> <a href="SCIS.php#LumbarDrain"> Lumbar drain </a></li>
            </ul>
             </li>
            </div>
            
            
            <div class="dropdown-container" style="background-image: url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSFsUAPVU1-yTR9W6CuyAxzi0UYykJDoar1unZ9Vik5gaffz6To');">
        <li class="dropdown">
            <a href="SCIS.php#OTO" class="dropdown-toggle">OTO</a>
            <ul class="dropdown-menu">
            <li> <a href="SCIS.php#Neck"> Neck dissection & thyroidectomy </a></li>
                <li> <a href="SCIS.php#Tracheostomy"> Tracheostomy </a></li>
            </ul>
             </li>
            </div>
            
            
            
            <div class="dropdown-container" style="background-image: url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTtDUeC3Sw0hkiF5NISaEmbr7eCmYXCVWxk-xU2Cj0zrR1yoCzs');">
        <li class="dropdown">
            <a href="SCIS.php#thoracic" class="dropdown-toggle">Thoracic</a>
                <ul class="dropdown-menu">
            <li> <a href="SCIS.php#Esophagectomy"> Esophagectomy </a></li>
                    <li> <a href="SCIS.php#Lobectomy"> Lobectomy/Wedge resection </a></li>
            </ul>
                </li> 
            </div>
            
           <div class="dropdown-container" style="background-image:url('https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRx1ykv02rPQfvUUzDjC3hq397OTHBww2N5vIkxqS7B5eYEAMjaKA');">
        <li class="dropdown">
            <a href="SCIS.php#urology" class="dropdown-toggle">Urology</a>
               <ul class="dropdown-menu">
            <li> <a href="SCIS.php#Cystectomy"> Cystectomy </a></li>
                   <li> <a href="SCIS.php#Nephrectomy"> Nephrectomy </a></li>
            </ul>
               </li>
            </div>
            
            
            
            <div class="dropdown-container" id ="vascular" style="background-image:url('https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTrsDUGJyKK3gp9nXpLYCzIOujOr_F7x4UMSqjGF9j_sAw7FMyoJA');">
        <li class="dropdown">
            <a href="SCIS.php#vascular" class="dropdown-toggle">Vascular</a>
                <ul class="dropdown-menu">
                <li> <a href="SCIS.php#AAA"> AAA </a></li>
                    <li> <a href="SCIS.php#CEA"> CEA </a></li>
                    <li> <a href="SCIS.php#Fem-pop"> Fem-pop bypass </a></li>
                </ul>
                </li>
            </div>
        </ul>
    </div>

    
        
    </div>
    
   <div class="logocontainer" >
       <div class="dropdown-containerHeaders" id="cardiothoracic">
        <li class="dropdown">
            <a href="#cardiothoracic" class="dropdown-toggleHeaders">Cardiothoracic </a>
            <ul class="dropdown-menu">
              <li><a href="#AAACardio">AAA</a></li>
              <li><a href="#CABG/valve">CABG/valve</a></li> 
            </ul>
            </li>
            </div>
    </div>
   
    
    <? include ("AAACardio.html") ?>
    <? include ("CABG.html") ?>
    
    

    <div class="logocontainer">
    <div class="dropdown-containerHeaders" id="general">
        <li class="dropdown">
            <a href="#general" class="dropdown-toggleHeaders">General </a>
                <ul class="dropdown-menu">
                    <li> <a href="#BowelResection">  Bowel resection </a></li>
                    <li> <a href="#ERCP">  ERCP </a></li>
                    <li> <a href="#Gastrectomy">  Gastrectomy </a></li>
                    <li> <a href="#Hernia">  Hernia repair </a></li>
            </ul>
                </li>
            </div>
    </div>
  
    
    <? include("BowelResection.html") ?>
    <? include("ERCP.html") ?>
    <? include ("Gastrectomy.html") ?>
     <? include("Hernia.html") ?>
    
    
    
    
   
     <div class="dropdown-containerHeaders" id="neuro">
        <li class="dropdown">
            <a href="#neuro" class="dropdown-toggleHeaders">Neuro</a>
            <ul class="dropdown-menu">
            <li> <a href="#LumbarDrain"> Lumbar drain </a></li>
            </ul>
             </li>
            </div>
  
    
    <? include ("LumbarDrain.html") ?>
    
    
    
    
       <div class="dropdown-containerHeaders" id="OTO">
        <li class="dropdown">
            <a href="SCIS.php#OTO" class="dropdown-toggleHeaders">OTO</a>
            <ul class="dropdown-menu">
            <li> <a href="#Neck"> Neck dissection & thyroidectomy </a></li>
                <li> <a href="#Tracheostomy"> Tracheostomy </a></li>
            </ul>
             </li>
            </div>
    
    
    <? include ("Neck.html") ?>
    
    <? include ("Tracheostomy.html") ?>
    
    
     <div class="dropdown-containerHeaders" id="thoracic" >
        <li class="dropdown">
            <a href="#thoracic" class="dropdown-toggleHeaders">Thoracic</a>
                <ul class="dropdown-menu">
            <li> <a href="#Esophagectomy"> Esophagectomy </a></li>
                    <li> <a href="#Lobectomy"> Lobectomy/Wedge resection </a></li>
            </ul>
                </li> 
            </div>
    
    
    <? include ("Esophagectomy.html") ?>
        
    <? include ("Lobectomy.html") ?>
    
   
    <div class="dropdown-containerHeaders" id="urology">
        <li class="dropdown">
            <a href="#urology" class="dropdown-toggleHeaders">Urology</a>
               <ul class="dropdown-menu">
            <li> <a href="#Cystectomy"> Cystectomy </a></li>
                   <li> <a href="#Nephrectomy"> Nephrectomy </a></li>
            </ul>
               </li>
            </div>
    
   
    
    <? include ("Cystectomy.html") ?>
    
    <? include ("Nephrectomy.html") ?>
    
   
     <div class="dropdown-containerHeaders" id="vascular">
        <li class="dropdown">
            <a href="#vascular" class="dropdown-toggleHeaders">Vascular</a>
                <ul class="dropdown-menu">
                <li> <a href="#AAA"> AAA </a></li>
                    <li> <a href="#CEA"> CEA </a></li>
                    <li> <a href="#Fem-pop"> Fem-pop bypass </a></li>
                </ul>
                </li>
            </div>
        </ul>
   
    
    <? include ("AAA.html") ?>
    
   <? include ("CEA.html") ?>
    
    <? include ("Fem-pop Bypass.html") ?>

<!-- BEGIN SCIS input pop-up box and  PHPmailer code -->

<div id='SCISInputX' class='SCISInput'>
    
    <p> Please fill out this form to critique the info sheets! Please don't forget to type which procedure you are reviewing, thank you!</p>
    <img id="close" src="/Assets/dialog_close.png">
    <form method='post' id='critique'  >
  
    <input id='procedure' name='procedure' placeholder='procedure' type='text' required autofocus>  <!-- cursor autofocus to this box -->
    <textarea id='suggestions' name='suggestions' placeholder='suggestions' type='text'></textarea>
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

   <? include ("SICUFooter.html") ?>
    </body>
</html>