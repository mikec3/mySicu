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

    
  
    
    <? include ("SICUFooter.html") ?>
</body>
</html>