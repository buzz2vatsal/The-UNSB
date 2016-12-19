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
    <link href="css/rates.css" rel="stylesheet">
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
<div class="interest_table" style="margin-top:20px; margin-bottom:20px; color:black;">
    <div class="row">
    <div class="col-md-8">
        <table id="rates" style="width:100%;">
            <tr style="text-align:center;">
                <td ><strong>Sr no.</strong></td>
                <td ><strong>Types of Loans/Advances</strong></td>
                <td ><stong>Interest Rates</stong></td>
            </tr>
            <tr>
                <td><strong>1.</strong></td>
                <td>Cash Credit Loan(Self Security)</td>
                <td>13.50% (Max: 20,000)</td>
            </tr>
            <tr>
                <td><strong>2.</strong></td>
                <td>Industrial Loan<br>Less than ₹2,00,000<br>More than ₹2,00,000</td>
                <td><br>13.50%<br>14.00%</td>
            </tr>
            <tr>
                <td><strong>3.</strong></td>
                <td>Housing Loan</td>
                <td>Only for staff</td>
            </tr>
            <tr>
                <td><strong>4.</strong></td>
                <td>Loan against NSC/KVP/UTI/RBI BOND<br>Less than ₹2,00,000<br>More than ₹2,00,000</td>
                <td><br>13.50%<br>14.00%</td>
            </tr>
            <tr>
                <td><strong>5.</strong></td>
                <td>Loan against Fixed-deposit</td>
                <td></td>
            </tr>
            <tr>
                <td><strong>6.</strong></td>
                <td>Hypothecation Loan<br>Less than ₹2,00,000<br>More than ₹2,00,000</td>
                <td><br>13.50%<br>14.00%</td>
            </tr>
            
            <tr>
                <td><strong>7.</strong></td>
                <td>Vehicle</td>
                <td>11.05%</td>
            </tr>
            <tr>
                <td><strong>8.</strong></td>
                <td>Fixed-Rate Mortgage Loan<br>Less than ₹2,00,000<br>More than ₹2,00,000</td>
                <td><br>13.50%<br>14.00%</td>
            </tr>
            <tr>
                <td><strong>9.</strong></td>
                <td>Loan against Overdraft</td>
                <td></td>
            </tr>
            <tr>
                <td><strong>10.</strong></td>
                <td>Gold Loan<br>Less than ₹2,00,000<br>More than ₹2,00,000</td>
                <td><br>13.50%<br>14.00%</td>
            </tr>
            
            <tr>
                <td><strong>11.</strong></td>
                <td>Loan agianst Stock-in-trade<br>Less than ₹2,00,000<br>More than ₹2,00,000</td>
                <td><br>13.50%<br>14.00%</td>
            </tr>
            <tr>
                <td><strong>12.</strong></td>
                <td>Fixed Rate term Loan<br>Less than ₹2,00,000<br>More than ₹2,00,000</td>
                <td><br>13.50%<br>14.00%</td>
            </tr>
        </table>
    </div>


    <div class="col-md-4">
        
    </div>

    </div>
</div>


    <?php
        include 'footer.inc.php';
    ?>
     <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
      
      <script type="text/javascript" src="js/style.js"></script>
  </body>
</html>