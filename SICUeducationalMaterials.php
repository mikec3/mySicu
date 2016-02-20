<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
    <link href="http://s3.amazonaws.com/codecademy-content/courses/ltp2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
    <script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>    
    <script src="main.js"></script>
    
</head>
<body>
   <div class="header">
       <div class="container">
           <? include ("SICUMenu.html") ?>

       </div>
    </div>
    
    <div class="educationalMaterialsPageContainer">
    
        <div id="SCISEducationPage" class="educationBoxes">
            <a href="SCIS.php"> Surgical Cases </br> Info Sheets </a>
        </div>
        
        <div id="orientationPacketEducationPage" class="educationBoxes">
            <a href="mySicuPdf/SICUOrientationPacket.pdf"> Orientation </br> Packet </a>
        </div>
        
        
    
        <div id="pickListEducationPage" class="educationBoxes">
            <a href="pickList.php"> </br> Pick Lists </a>
        </div>
        
        
    </div>  
    <? include ("SICUFooter.html") ?>
</body>
</html>