<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Find Us on Maps</title> 
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
        include 'header.inc.php';
    ?>          

      </div>
    
<div class="container-fluid" style="max-width: 1250px;">
    <div class="locator">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6" style="background-color: #444; height: 350px;">
                    <address><br>
                                <h3><b>The Unava Nagarik Sahakari Bank Ltd.</b></h3>
                                Marketyard Compound,<br>At & Post :- Unava - 384160<br>
                                Ta-Unjha Dist-Mehsana (N. Guj)<br><br>
                                <b>Contact: </b>(O) <a href="tel: 02767-255900" title="Call office">02767-255900</a>, <a href="tel: 02767-258976" title="Call office">258976</a><br>
                                <b>M. No.: </b><a href="tel: 9879246694" title="Call mobile">9879246694</a><br>
                                <b>Fax :-</b>02767-258976<br>
                                <b>Email: </b><a href="mailto: nagrik_unava12@rediffmail.com" title="Send direct mail">nagrik_unava12@rediffmail.com</a>
                            </address><br>
                </div>

                <div class="col-md-4 col-sm-6" style="background-color: #444; height: 350px; padding-top: 20px;">
                    <h4 style="color: white;">Find The UNSB on Google Maps!</h4>
                        <div id="map"></div>
                            <script>
                                 function initMap() {
                                    var uluru = {lat: 23.7707292, lng: 72.3648574};
                                    var map = new google.maps.Map(document.getElementById('map'), {
                                    zoom: 4,
                                    center: uluru
                                    });
                                    var marker = new google.maps.Marker({
                                    position: uluru,
                                    map: map
                                    });
                                }
                             </script>

                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpZ_Q6TVPyBIWLMCl3Wjp_SWlmNcpSv5I&callback=initMap"></script>

                </div>
                
                <div class="marquee-up col-md-4 col-sm-12" style="background-color: #444; height: 350px; padding-top:10px;">
                    <h3 style="color: white"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Important Info</h3><hr>
                    
                        <marquee direction="up" onmouseover="this.stop();" onmouseout="this.start();" style="color: #93ce33; height: 210px;">
                            <h5><li>This text is a demo of marquee.</li><br>
                            <li>Hello there!</li><br>
                            <li>This is a demo</li><br>
                            <li>Lorem Ipsum, bro!</li><br>
                            <li>Why the hell Latin?!</li><br>
                            <li>Why couldn't they just use English!</li><br>
                            <li>Lorem Ipsum again!</li><br>
                            <li>Because why not?</li><br>
                            <li>Haha! LOL. -_-</li><br>                                
                            <li>Download form&nbsp;&raquo;&nbsp;<a href="login.php" style="color: #93ce33"><b>Click here</b></a></li><br></h5>
                        </marquee>
                    
                </div>
            </div>
        </div>
    </div>
</div>
      
<!--End of map container-->
      
<?php
    include 'footer.inc.php';
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