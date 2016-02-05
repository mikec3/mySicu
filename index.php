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

	<!-- START OF header/nav bar -->
   <div class="header">
       <div class="container">
         <? include ("SICUMenu.html") ?>  

       </div>
    </div> 
     <!-- END OF header/nav bar -->
     
     
     <!-- START OR SLIDER -->
   
    <div class="slider">
    
    <div class="slide active-slide">
        <div class="container">
            <div class="row">
            <div class="slide-copy col-xs-5">
           <a href="SICUeducationalMaterials.php"> <h1> Educational Materials</h1> </a>
                <p> Surgical Case Info Sheets: information to guide your decision making for common surgical post-op patients. The info represented is for educational purposes only, does not represent policy or procedure, refer to your institutional policy and procedures.</p>
             </div>
                
                <div class="slide-copy col-xs-7">
               <a href="SICUeducationalMaterials.php">  <img src="/Assets/stockvault-stethoscope169807.jpg"> </a>
            
                </div>
            </div>
        </div>
        </div>
    
        
        
        
        
        
        <div class="slide">
            <div class="container">
            <div class="row">
                <div class="slide-copy col-xs-5">
                    <h1> Leadership </h1>
                    <p> Leadership resources UNDER CONSTRUCTION </p>
                    </div>
                
                <div class="slide-copy col-xs-7">
                <img src="/Assets/teamwork.jpg">
                
                </div>
                </div>
            </div>
        </div>
        
        
        
        
    <div class="slide">
        <div class="container">
            <div class="row">
                <div class="slide-copy col-xs-5">
                    <h1> MySICU</h1>
                    <p> Surgical Intensive Care Unit: educational, clinical, and leadership resources </p>
                </div>
                
                <div class="slide-copy col-xs-7">
                <img src="/Assets/Xray.jpg">
                </div>
            </div>
        </div>
        </div>
        
        
    </div>  
    
    <!-- END OF SLIDER -->
     
     
     <!-- START OF SLIDER NAV -->
    <div class="slider-nav">
     <a href="#" class="arrow-prev"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-prev.png"></a>
      <ul class="slider-dots">
        <li class="dot active-dot">&bull;</li>
          <li class="dot">&bull;</li>
          <li class="dot">&bull;</li>
      </ul>
      <a href="#" class="arrow-next"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-next.png"></a>
    
    
    </div>
    
    
    <!-- END OF SLIDER NAV -->
     
     
     
     
     
     
     
    <? include ("SICUFooter.html") ?> 
</body>
</html>