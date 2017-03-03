<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Useful links</title> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bank Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/find-us.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">
    <link href="css/bank_universal.css" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="shortcut icon" type="image/png" href="images/favicon.jpg">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
      
      <?php
        include 'header.php';
    ?>              
    
<div class="row"></div>
   <div class="container-fluid" style="width: 90%; background-color: #444; margin-bottom:20px; box-shadow:rgba(0,0,0,0.3) 2px 4px 4px 4px"> 
        <h2 style="text-align: center; padding-top:10px;">Useful links</h2>

        <ol start="1" style="margin-bottom: 30px;">
            <li><a href="https://uidai.gov.in/beta">UIDAI ADHAR</a></li>
            <li><a href="http://rbi.org.in/">RBI</a></li>
            <li><a href="https://ceo.gujarat.gov.in/">Election Commission</a></li>
            <li><a href="http://npci.org.in/">NPCI</a></li>
            <li><a href="https://www.mygov.in/">MyGOV</a></li>
            <li><a href="https://swachhbharat.mygov.in/">Swachh Bharat Abhiyan</a></li>
            <li><a href="http://www.pmjdy.gov.in/">Pradhanmantri JAN-DHAN Yojna</a></li>
            <li><a href="http://apmcunjha.com/">APMC Unjha</a></li>
            <li><a href="http://petroleum.nic.in/dbt/">PAHAL</a></li>
        </ol>
        </div>
  <div class="row" style="margin-bottom: 20px;">  
<div class="secondCarousel">
<div class="container">
    <div class="row">
    <div id="anotherCarousel" class="carousel slide">
        <div class="carousel-inner">
            
            <div class="item active">
                <div class="row">
                    <div class="col-xs-3">
                        <a href="https://uidai.gov.in/beta"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/Aadhar.jpg"></a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="http://rbi.org.in/"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/RBI.jpeg">
                            
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="https://ceo.gujarat.gov.in/"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/ECI.jpg">
                            
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="http://npci.org.in/"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/npci.png">
                            
                        </a>
                    </div>
                          
                </div>
            </div>
            
            <div class="item">
                <div class="row">
                    <div class="col-xs-3">
                        <a href="https://www.mygov.in/"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/mygov.png">
                            
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="https://swachhbharat.mygov.in/"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/sb.jpg">
                            </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="http://www.pmjdy.gov.in/"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/pmjdylogo.png">
                            </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="http://apmcunjha.com/"><img class="img-responsive img-rounded" style="width:100%;height: 160px;" src="images/logo.jpg">
                             </a>
                    </div>
                          
                </div>
            </div>
                  
        </div>
        <a class="left carousel-control" href="#anotherCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#anotherCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    </div>
</div>
</div>      
</div>

<!--End of map container-->
      
<?php
    include 'footer.php';
?>
     
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
    <script>
        $(function(){
          $('.carousel').carousel({
              interval: 4000
          }); 
          })
        </script>
  </body>
</html>      