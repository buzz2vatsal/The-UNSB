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
    <link href="css/login.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">  
    <link href="css/bank_universal.css" rel="stylesheet">  
    <link href="css/font-awesome.min.css" rel="stylesheet">  
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
        include 'login-header.inc.php';
    ?> 
      </div>

<div class="container">
    <div class="col-md-4 center">
    <div class="panel panel-default" style="max-width: 350px; padding-bottom:10px; margin: 20px 0 40px 0;">
    <form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        
            <label for="inputEmail" class="sr-only">Email address</label>
            <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
            
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        
            <div class="checkbox">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
        
            <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
        
            <a href="https://www.forgotpassword.com" style="float: right">Forgot password?</a><br><br>
        
        <center><h5>Don't have an account? <a href="www.signup.php"><b>Sign up now!</b></a></h5></center>
    </form>    
</div>
</div> 
</div>
      </div>
<!--Form end-->
      
                 
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
  </body>
</html>