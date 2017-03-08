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
    <link href="css/admin-rates.css" rel="stylesheet">
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
      
          <div class="row">
              <div class="col-md-3 nopadding">
                  <div class="side-bar">
                      <div class="top-left-bar">
                          <img class="img-responsive" src="images/sq_7.jpg">
                          <h3 style="color: white;">
                              Pancham Khaitan<br>
                              <small style="color: white;">talktopancham@gmail.com</small>
                          </h3>
                      </div>
              
                      <div class="list-item">
                          <ul>
                              <a href="#"><li>Dashboard</li></a>
                              <a href="issues.php"><li>Issues</li></a>
                              <a href="#"><li>Cheque-book Requests</li></a>
                              <a href="#"><li>List of Unused Accounts (NPA)</li></a>
                              <a href="#"><li class="active">Interest Rate Table</li></a>
                              <a href="#"><li>Important Notice Upload</li></a>
                              <a href="#"><li>KYC Incomplete</li></a>
                              <a href="#"><li>Feedback</li></a>
                              <a href="#"><li>Photo Management System (PMS)</li></a>  
                          </ul>
                      </div>
                  </div>
              </div>
         
       
        
        <div class="col-md-9 nopadding">
            <div class="right-bar">
                
                <div class="nav">
                    <a href="index.php"><img class="img-responsive" src="images/UNSB_Grey.png"></a>
                    <h3>The Unava Nagrik Sahakari Bank Ltd.</h3>
                    
                    <div id="calendar">
                        <p id="calendar-full-date"></p>
                        <p id="calendar-time"></p>
                    </div>
                </div>


                <div class="container">
                  <p style="color: black;">Interest Rates</p>
                  <table style="float: left;">
                    <tr>
                      <th>Loan</th>
                      <th>Rates</th>
                    </tr>
                    <tr>
                      <td>Cash Credit</td>
                      <td><input type="text" name="cashcreditrate"></td>
                    </tr>
                    <tr>
                      <td>Housing Loan</td>
                      <td><input type="text" name="housingloanrate"></td>
                    </tr>
                    <tr>
                      <td>Loan against fixed deposit</td>
                      <td><input type="text" name="fixeddepositrate"></td>
                    </tr>
                    <tr>
                      <td>Vehicle</td>
                      <td><input type="text" name="vehiclerate"></td>
                    </tr>
                    <tr>
                      <td>Loan against Overdraft</td>
                      <td><input type="text" name="overdraftrate"></td>
                    </tr>
                  </table>
                  <table style="float: left;">
                    <tr>
                      <th>Type of loan</th>
                      <th>Less then</th>
                      <th>More then</th>
                      <th>Less then(rates)</th>
                      <th>More then(rates)</th>
                    </tr>
                    <tr>
                      <td>Industrial Loan</td>
                      <td><input type="text" name="industrialltm"></td>
                      <td><input type="text" name="industrialmtm"></td>
                      <td><input type="text" name="industrialltr"></td>
                      <td><input type="text" name="industrialmtr"></td>
                    </tr>
                    <tr>
                      <td>Loan against RBI bond</td>
                      <td><input type="text" name="rbiltm"></td>
                      <td><input type="text" name="rbimtm"></td>
                      <td><input type="text" name="rbiltr"></td>
                      <td><input type="text" name="rbimtr"></td>
                    </tr>                    
                    <tr>
                      <td>Hypothecation Loan</td>
                      <td><input type="text" name="hypoltm"></td>
                      <td><input type="text" name="hypomtm"></td>
                      <td><input type="text" name="hypoltr"></td>
                      <td><input type="text" name="hypomtr"></td>
                    </tr>
                    <tr>
                      <td>Fixed rate Mortgage Loan</td>
                      <td><input type="text" name="mortgageltm"></td>
                      <td><input type="text" name="mortgagemtm"></td>
                      <td><input type="text" name="mortgageltr"></td>
                      <td><input type="text" name="mortgagemtr"></td>
                    </tr>
                    <tr>
                      <td>Gold Loan</td>
                      <td><input type="text" name="goldltm"></td>
                      <td><input type="text" name="goldmtm"></td>
                      <td><input type="text" name="goldltr"></td>
                      <td><input type="text" name="goldmtr"></td>
                    </tr>
                    <tr>
                      <td>Loan against stock-in-trade</td>
                      <td><input type="text" name="stockltm"></td>
                      <td><input type="text" name="stockmtm"></td>
                      <td><input type="text" name="stockltr"></td>
                      <td><input type="text" name="stockmtr"></td>
                    </tr>
                    <tr>
                      <td>Fixed Rate term Loan</td>
                      <td><input type="text" name="termltm"></td>
                      <td><input type="text" name="termmtm"></td>
                      <td><input type="text" name="termltr"></td>
                      <td><input type="text" name="termmtr"></td>
                    </tr>
                  </table>



                  




            </div>
            <button type="button" class="btn-success" style="margin-top: 30px;float: left;">Submit</button>
        </div>

      <a href="javascript:void(0);" id="scroll" title="Scroll to Top" style="display: none;">Top<span></span></a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/style.js"></script>
    <script type="text/javascript" src="js/plugin-script.js"></script>
    <script type="text/javascript" src="js/calendar.js"></script>  
  </body>
</html>