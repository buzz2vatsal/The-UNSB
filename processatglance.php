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
  <style type="text/css">
    td{
      padding: 5px;
      text-align: center;
      border: 1px solid black;
      border-collapse: collapse;
    }
  </style>
  </head>

  <body>

    <?php
        include 'header.php';
    ?>
      
<!--Beginning of first carousel-->
      <div class="container-fluid" style="width: 90%; background-color: white; margin-bottom:20px; box-shadow:rgba(0,0,0,0.3) 2px 4px 4px 4px">
        <div class="row">
        <p style="text-align: center;font-size: 30px;margin-top: 20px;">Process at Glance</p>
        <table align="center" style="margin-bottom: 30px;">
          <tr>
            <td colspan="9" style="float: right;"><strong>RUPEES IN THOUSANDS</strong></td>
          </tr>
          <tr>
            <td>Sr No.</td>
            <td>Year Ending</td>
            <td>Membership</td>
            <td>Share Capital</td>
            <td>Reserve</td>
            <td>Deposits</td>
            <td>Advances</td>
            <td>Profit</td>
            <td>Dividend</td>
          </tr>
          <tr>
            <td>1.</td>
            <td>2000</td>
            <td>191919</td>
            <td>342342</td>
            <td>34234234</td>
            <td>34345435</td>
            <td>435345435</td>
            <td>567567</td>
            <td>15%</td>
          </tr>
          <tr>
            <td>1.</td>
            <td>2000</td>
            <td>191919</td>
            <td>342342</td>
            <td>34234234</td>
            <td>34345435</td>
            <td>435345435</td>
            <td>567567</td>
            <td>15%</td>
          </tr>
          <tr>
            <td>1.</td>
            <td>2000</td>
            <td>191919</td>
            <td>342342</td>
            <td>34234234</td>
            <td>34345435</td>
            <td>435345435</td>
            <td>567567</td>
            <td>15%</td>
          </tr>
          <tr>
            <td>1.</td>
            <td>2000</td>
            <td>191919</td>
            <td>342342</td>
            <td>34234234</td>
            <td>34345435</td>
            <td>435345435</td>
            <td>567567</td>
            <td>15%</td>
          </tr>
        </table>

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
      <script>
        $(function(){
          $('.carousel').carousel({
              interval: 4000
          }); 
          })
        </script>
  </body>
</html>



