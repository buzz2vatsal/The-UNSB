
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
body {
      position: relative; 
  }
  .affix {
      top:0;
      width: 90%;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }

  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
  </style>
  <link href="css/abc.css" rel="stylesheet">
    <?php
    if(isset($_SESSION['Ulogin_user'])){ 
     echo "<link href=\"css\efg.css\" rel=\"stylesheet\">";
  }
    ?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="50">



<!--beginning of top strip-->      
      <div class="container" style="background-color: #444; width: auto; height: 35px;">
        <div class="row">
            <div class="col-md-1"></div>
            
            <div class="col-md-5 col-sm-6" id="email1" style="padding-top: 10px;">
                    <p style="color: white;"><span class = "glyphicon glyphicon-phone-alt"></span>&nbsp;&nbsp;<a href="tel: 02767-255900" style="color: white;">02767-255900</a>&nbsp;&nbsp;|&nbsp;
                    <!--</h5>
           
                    <h5 style="color: white; font-size: 14px;">--><span class = "glyphicon glyphicon-envelope"></span>&nbsp;&nbsp;<a href = "mailto:nagrik_unava12@rediffmail.com" style="color: white;">nagrik_unava12@rediffmail.com</a><br>
                    </p>
            </div>
            
            
            
        </div>
      </div>

<!--End of top strip-->
      
      
<!--Start of intro block-->
      
<div class="container-fluid" style="width: 90%; background-color: white; margin-bottom:20px; box-shadow:rgba(0,0,0,0.3) 2px 4px 4px 4px">
    <div class="row">
          <div class = "intro-block">
              <div class="container">
                    
                        <div class = "col-xs-2" id="image">
                            <a href="index.php"><img class="img-responsive tpad" src="images/UNSB_Grey.png" style="height: inherit; width: inherit;" title="Home"></a>
                        </div>

                        <div class = "col-xs-7" >
                            <p id="name" style="color: white; text-align: left;">The Unava Nagrik Sahakari Bank Ltd.</p>
                            <p id="regno" style="color: white; text-align: left;" >Registration no.: XYZ123</p>
                        </div>

                        <div class = "col-xs-3" >
                          <!--  <a href="login.php"><div class="btn btn-block"><h4 style="color: black;font-size: 1.5vw;">Login</h4></div></a>
                          -->

                          <button href="login.php" class="buttonLogin">
                            
                             <?php
                                 if(!isset($_SESSION['Ulogin_user']))
                                 echo "<span id='login'>Login</span>";
                                else
                                  echo "<span id='login'>Log out</span>";

                                  ?>
                          </button>
                        </div>

                    </div> 
            
            </div> 
    </div>

<!--End Intro-->

<!--Beginning of navbar-->
      <div class="row">
        <nav class = "navbar navbar-default" data-spy="affix" data-offset-top="203">
        <div class="container-fluid">
            <div class = "navbar-header">
                 <a class = "navbar-brand" href="index.php"><img class = "logo" src = "images/UNSB_White.png" title="Home"></a>
                <button type="button" class = "navbar-toggle" data-toggle="collapse" data-target="#nav">             
                    
                    <span class = "sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                
                
            </div>
        
            <div class = "navbar-collapse collapse custnav" id="nav">
               
                <ul class = "nav navbar-nav">
                    <li class = "active"><a href = "index.php" class="button hvr-underline-reveal">Home</a></li>
                    <li class="dropdown">
                    <a href = "#" onclick="return false" class="dropdown-toggle hvr-underline-reveal" data-toggle = "dropdown">Deposits<b class="caret"></b></a>
                      <ul class="dropdown-menu">
                        <li><a href="savings.php" class="button hvr-underline-reveal">Savings account</a></li>
                        <li><a href="current.php" class="button hvr-underline-reveal">Current account</a></li>
                      </ul>
                    </li>
                    <li><a href="services.php" class="button hvr-underline-reveal">Services</a></li>
                    <li><a href="rates.php" class="button hvr-underline-reveal">Interest Rates</a></li>
                    <li><a href="#" class="button hvr-underline-reveal">Downloads</a></li>
                     <li><a href="loan.php" class="button hvr-underline-reveal">Loans</a></li>
                    <li class = "dropdown">
                    <a href = "#" onclick="return false" class = "dropdown-toggle hvr-underline-reveal" data-toggle = "dropdown">About Bank<b class = "caret"></b></a>
                            <ul class = "dropdown-menu">
                                <li><a href="about-us.php" class="button hvr-underline-reveal">About UNSB</a></li>
                                <li><a href="bank-history.php" class="button hvr-underline-reveal">Bank History</a></li>
                                <li><a href="vision.php" class="button hvr-underline-reveal">Vision &amp; Mission</a></li>
                                <li><a href="chairman-msg.php" class="button hvr-underline-reveal">Chairman's message</a></li>
                                <li><a href="#" class="button hvr-underline-reveal">Board of Directors</a></li>
                                <li><a href="team.php" class="button hvr-underline-reveal">Current Team</a></li>
                                <li><a href="#" class="button hvr-underline-reveal">Progress at a Glance</a></li>
                                <li><a href="award.php" class="button hvr-underline-reveal">Awards &amp; Recognition</a></li>
                                
                            </ul>
                    </li>
                    
                    <li class="dropdown">
                    <a href = "#" onclick="return false" class = "dropdown-toggle hvr-underline-reveal" data-toggle = "dropdown">Customer Care<b class = "caret"></b></a>
                            <ul class = "dropdown-menu">
                                <li><a href="about-us.php" class="button hvr-underline-reveal">Branches</a></li>
                                <li><a href="bank-history.php" class="button hvr-underline-reveal">Useful Links</a></li>
                                <li><a href="holiday.php" class="button hvr-underline-reveal">Bank Holidays</a></li>
                                <li><a href="#" class="button hvr-underline-reveal">Loan/EMI Calculator</a></li>
                                <li><a href="faq.php" class="button hvr-underline-reveal">FAQ</a></li>
                                <li><a href="team.php" class="button hvr-underline-reveal">Help &amp; Support</a></li>
                                <li><a href="#" class="button hvr-underline-reveal">Feedback</a></li>
                            </ul>
                    </li>
                    
                </ul>
                
<!--                <p style="text-indent: 10em; padding-top: 15px; color: white;"><a href=Contact</p>-->
            </div>
            </div>
          </nav>
    </div>
    </div>

<!--Navigation bar end-->  
</body>
</html>
