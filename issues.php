<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Issues</title> 
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/issues.css" rel="stylesheet">
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
                              <a href="admin-panel.php"><li>Dashboard</li></a>
                              <a href="#"><li class="active">Issues</li></a>
                              <a href="#"><li>Cheque-book Requests</li></a>
                              <a href="#"><li>List of Unused Accounts (NPA)</li></a>
                              <a href="#"><li>Interest Rate Table</li></a>
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
                    <button class="btn btn-primary">Refresh Data</button>
                    
                    <div id="calendar">
                        <p id="calendar-full-date"></p>
                        <p id="calendar-time"></p>
                    </div>
                </div>
                
                <div class="row table-row">
                    <table align="center" class="issue-table">
                        <tr>
                            <th>Unresolved</th>
                            <th>Resolved</th>
                        </tr>

                        <tr>
                            <td>
                                <div class="unresolved-panel panel-default">
                                    <h4>Ticket ID: <span id="tick_id"></span></h4>
                                    <h4>Name: <span id="tick_name"></span></h4>
                                    <h4>A/C No.: <span id="tick_ac"></span></h4>
                                    <h4>Date:<span id="tick_date"></span></h4>
                                    <button class="btn btn-danger"><i class="fa fa-reply"></i>&nbsp;&nbsp;Reply</button>
                                    <button class="btn btn-success"><i class="fa fa-check"></i>&nbsp;&nbsp;Solved</button>
                                </div>
                            </td>

                            <td>
                                <div class="resolved-panel panel-default">
                                    <h4>Ticket ID: <span id="tick_id_res"></span></h4>
                                    <h4>Resolved on:<span id="tick_date_res"></span></h4>
                                    <button class="btn btn-danger"><i class="fa fa-trash"></i>&nbsp;&nbsp;Delete</button>
                                    <button class="btn btn-success"><i class="fa fa-edit"></i>&nbsp;&nbsp;Reopen</button>
                                </div>
                            </td>
                        </tr>
                    </table>
                </div>
                
                
<!--
                <div class="row">
                    <div class="col-md-3">
                        <div class="panel panel-default cal-panel">
                            <div id="calendar">
                                <p id="calendar-day"></p>
                                <p id="calendar-date"></p>
                                <p id="calendar-month-year"></p>
                            </div>
                        </div>
                    </div>
                </div>
-->

            </div>
        </div>
      </div>
    
      
<!--Download form end-->      

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