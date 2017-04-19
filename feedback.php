<!DOCTYPE html>
<html lang="en">
  <head>
    <title>UNSB</title> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Feedback Page</title>

    <!-- Bootstrap -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">  
    <link href="css/bank_universal.css" rel="stylesheet">  
    <link href="css/feedback.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="shortcut icon" type="image/png" href="images/favicon.jpg">
      
    <!-- HTML5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.3/5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src='https://www.google.com/recaptcha/api.js'></script>
  </head>
  <body>

    <?php
        include 'header.php';
    ?>
    <div class="container-fluid" style="width: 90%; background-color: rgb(222,222,222); margin-bottom:20px; box-shadow:rgba(0,0,0,0.3) 2px 4px 4px 4px">
        <div class="row">
        <p style="text-align: center;font-size: 30px;padding-top: 20px;">FeedBack Form</p>
            <form action="#" method="post">
                <table align="center" style="margin-top: 30px;margin-bottom: 30px;">
                <tr><td>Title:</td>
                <td>
                <select>
                    <option>Mr.</option>    
                    <option>Mrs.</option>    
                    <option>Miss.</option>    
                </select>
                </td>
                </tr>
                <tr><td>
                Full Name:</td><td><input type="text" name="First Name" placeholder="Full name"></td></tr>
                <tr><td>
                Account Number:</td><td><input type="Number" name="Account Number" placeholder="Account number"></td></tr>
                <tr><td>
                E-mail Id:</td><td><input type="E-mail" name="E-mail" placeholder="E-mail"></td></tr>
                <tr><td>
                Mobile No:</td><td><input type="number" name="Contact-no" placeholder="Mobile number"></td></tr>
                <tr><td>
                Subject:</td><td><input type="text" name="Subject" placeholder="Subject"></td></tr>
                <tr><td>
                Existing Customer:</td><td>
                <input type="radio" name="Existing-customer" value="yes" checked="">Yes
                <input type="radio" name="Existing-customer" value="no">no</td></tr>
                <tr><td>
                Comments:</td><td>
                <textarea rows="7" cols="50" placeholder="Comments"></textarea></td></tr>
                <tr><td><input type="submit" name="submit"></td><td><input type="reset" name="reset"></td>
                </tr>
                </table>
            </form>
            <center><h4 class="one-line">Please call to <a href="tel: 02767-255900" style="color: #444;">02767-255900</a> or mail to the <a href = "mailto:nagrik_unava12@rediffmail.com" style="color: #444;">nagrik_unava12@rediffmail.com</a> incase of emergency</h4></center>
        </div>
    </div>
    <?php
    include 'footer.php';
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