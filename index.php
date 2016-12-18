<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UNSB</title> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bank Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">  
    <link href="css/index.css" rel="stylesheet">
    <link href="css/bank_universal.css" rel="stylesheet">  
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="shortcut icon" type="image/png" href="images/favicon.jpg">
      
    <!-- HTML5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.3/5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <?php
        include 'header.inc.php';
    ?>
      
<!--Beginning of first carousel-->
      
        <div class="row">
            <div class = "carouselInfo" style="margin-top: 5px; ">
                <div class="col-md-8 col-sm-12" style="padding: 0;">
                    <div id="myCarousel" class = "carousel slide">
                        <ol class = "carousel-indicators">
                            <li data-target = "#myCarousel" data-slide-to="0" class = "active"></li>
                            <li data-target = "#myCarousel" data-slide-to="1"></li>
                            <li data-target = "#myCarousel" data-slide-to="2"></li>
                        </ol>
    
                        <div class = "carousel-inner">

                            <div class = "item active">
                                <img src="images/1.jpg">
                                <div class = "container active">
                                    <div class="carousel-caption">
                                        <h1>SLIDE 1</h1>
                                        <p>This is a demo. Slide number 1.</p>
                                        <p><a href = "#" onclick="return false" class = "btn btn-primary btn-large">Know More!</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class = "item">
                                <img src="images/2.jpg">
                                <div class = "container">
                                    <div class="carousel-caption">
                                        <h1>SLIDE 2</h1>
                                        <p>This is a demo. Slide number 2.</p>
                                        <p><a href = "#" onclick="return false" class = "btn btn-primary btn-large">Know More!</a></p>
                                    </div>
                                </div>
                            </div>

                            <div class = "item">
                                <img src="images/3.jpg">
                                <div class = "container">
                                    <div class="carousel-caption">
                                        <h1>SLIDE 3</h1>
                                        <p>This is a demo. Slide number 3.</p>
                                        <p><a href = "#" onclick="return false" class = "btn btn-primary btn-large">Know More!</a></p>
                                    </div>
                                </div>
                            </div>

                        </div>

        <a class = "left carousel-control" href="#myCarousel" data-slide="prev"><span class = "glyphicon glyphicon-chevron-left"></span></a>
        <a class = "right carousel-control" href="#myCarousel" data-slide="next"><span class = "glyphicon glyphicon-chevron-right"></span></a>
                       
                    </div>     
                </div>
            </div>
        
            <div class="marquee-up col-md-4 col-sm-12">
                <h3 style="color: white"><span class="glyphicon glyphicon-th-list"></span>&nbsp;Important Info</h3><hr>
                    <marquee direction="up" scrolldelay="80" onmouseover="this.stop();" onmouseout="this.start();" style="color: #93ce33; height: 400px;">
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
           

<!--Carousel end--> 

<!--parallax image-->
<div class="row">
<div class="parallax_1">
    <div class="tint">
        <div class="caption">
            <span class="border">Experience care like a family.</span><br><br>
            <a href="vision.php">
                <div class="btn myButton">
                    <h4 style="color: black">Click here to know more&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></h4>
                </div>
            </a>
        </div>
    </div>
</div>    
      
<div class="parallax_2">
    <div class="tint">
        <div class="caption">
            <span class="border">Your satisfaction is our first priority.</span><br><br>
            <a href="vision.php">
                <div class="btn myButton">
                    <h4 style="color: black">Click here to know more&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></h4>
                </div>
            </a>
        </div>
    </div>
</div>            
</div>
<!--End of parallax image-->
      
<!--Next image block-->
<div class="row">
<div class="img" style="background: #444">
    <div class="container-fluid" style="max-width: 1250px;">
        <div class="row">

                <div class="col-md-4 col-sm-12">
                    <div class="imgPanel panel-default" style="padding-top:15px; margin-top:7px;">
                        <center><a href="index.php"><img class="img-responsive img-circle" style="width: 300px; height: 300px;" src="images/sq_1.jpg"></a></center>

                        <div class="panel-body">

                            <center><h5 style="color: black;">Lorem Ipsum. Established in the year 1982 with an authorized Share Capital of Rs. 25.00 lacs and the paid up Share Capital of Rs. 4.00 lacs  The Sarvodaya Sahakari Bank Ltd., Surat is rightly bracketed as one of the leading and top-most co-op. banks of the city. This is just a test. Know more is a clickable link. And yeah, I am awesome!</h5></center><br>

                            <h4><a href="demo.php" style="color: black;"><center>Know more&nbsp;&raquo;</center></a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="imgPanel panel-default" style="padding-top:15px;  margin-top:7px;">
                        <center><a href="index.php"><img class="img-responsive img-circle" style="width: 300px; height: 300px;" src="images/sq_2.jpg"></a></center>
                        <div class="panel-body">

                            <center><h5 style="color: black;">Lorem Ipsum. Established in the year 1982 with an authorized Share Capital of Rs. 25.00 lacs and the paid up Share Capital of Rs. 4.00 lacs  The Sarvodaya Sahakari Bank Ltd., Surat is rightly bracketed as one of the leading and top-most co-op. banks of the city. This is just a test. Know more is a clickable link. And yeah, I am awesome!</h5></center><br>

                            <h4><a href="demo.php" style="color: black;"><center>Know more&nbsp;&raquo;</center></a></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-12">
                    <div class="imgPanel panel-default" style="padding-top:15px;  margin-top:7px;">
                        <center><a href="index.php"><img class="img-responsive img-circle" style="width: 300px; height: 300px;" src="images/sq_3.jpg"></a></center>

                        <div class="panel-body">

                            <center><h5 style="color: black;">Lorem Ipsum. Established in the year 1982 with an authorized Share Capital of Rs. 25.00 lacs and the paid up Share Capital of Rs. 4.00 lacs  The Sarvodaya Sahakari Bank Ltd., Surat is rightly bracketed as one of the leading and top-most co-op. banks of the city. This is just a test. Know more is a clickable link. And yeah, I am awesome!</h5></center><br>

                            <h4><a href="demo.php" style="color: black;"><center>Know more&nbsp;&raquo;</center></a></h4>
                        </div>
                    </div>
                </div>

        </div>  
    </div>
</div>          
</div>            
 </div>         
<!--End of image block-->
    
      
<!--Beginning of second carousel--> 

<div class="secondCarousel">
<div class="container">
    <div class="row">
    <div id="anotherCarousel" class="carousel slide">
        <div class="carousel-inner">
            
            <div class="item active">
                <div class="row">
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_1.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 1</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_2.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 2</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_3.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 3</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_4.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 4</span>
                            </div>
                        </a>
                    </div>
                          
                </div>
            </div>
            
            <div class="item">
                <div class="row">
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_5.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 5</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_6.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 6</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_7.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 7</span>
                            </div>
                        </a>
                    </div>
                    
                    <div class="col-xs-3">
                        <a href="#"><img class="img-responsive img-rounded" src="images/sq_8.jpg">
                            <div class="carousel-caption" style="color: white; font-size: 20px;">
                                <span>Demo Image 8</span>
                            </div>
                        </a>
                    </div>
                          
                </div>
            </div>
                  
        </div>
        <a class="left carousel-control" href="#anotherCarousel" data-slide="prev" style="top:25%"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#anotherCarousel" data-slide="next" style="top:25%"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
    </div>
</div>
</div>      

<!--End of second carousel-->      
      
<!--
<div class="fa-icon">
<div class="container" >
    <div class="row hbtbox">
        

                <div class="col-lg-2 col-sm-6">
                    <a href="find-us.php" >
                        <div class="hbox box1">
                            <i class="fa fa-map-marker fa-4x" style="color: white;"></i><br>
                            <h4>Find us</h4>
                        </div>
                    </a>
                </div>
        

            
                <div class="col-lg-2 col-sm-6">
                    <a href="#" >
                        <div class="hbox box1">
                            <i class="fa fa-exchange fa-4x" style="color: white;"></i>
                            <h4>IFS Codes</h4>
                        </div>
                    </a>
                </div>

            
                <div class="col-lg-2 col-sm-6">
                    <a href="#" >
                        <div class="hbox box1">
                            <i class="fa fa-download fa-4x" style="color: white;"></i>
                            <h4>Downloads</h4>
                        </div>
                    </a>
                </div>

            
                <div class="col-lg-2 cl-sm-6">
                    <a href="#" >
                        <div class="hbox box1">
                            <i class="fa fa-exclamation fa-4x" style="color: white;"></i>
                            <h4>Important Links</h4>
                        </div>
                    </a>
                </div>
            
                <div class="col-lg-2 col-sm-12">
                    <a href="#" >
                        <div class="hbox box1">
                            <i class="fa fa-question fa-4x" style="color: white;"></i>
                            <h4>Help & Support</h4>
                        </div>
                    </a>
                </div>
              
        
    </div>
</div>
</div>      
-->
      
<?php
    include 'footer.inc.php';
?>
      
<!--Download form end-->      
    
    <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
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