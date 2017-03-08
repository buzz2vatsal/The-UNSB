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
        include 'header.php';
    ?>
      
<!--Beginning of first carousel-->
      <div class="container-fluid" style="width: 90%; background-color: #444; margin-bottom:20px; box-shadow:rgba(0,0,0,0.3) 2px 4px 4px 4px">
        <p style="text-align: center;padding-top: 30px;font-size: 30px;">CURRENT ACCOUNT</p>
        <p style="text-align: justify;"><strong>Initial Amount To Open Savings Account</strong></p>
        <ul style="text-align: justify;">
          <li>Rs.3000</li>
        </ul>
        <p style="text-align: justify;"><strong>Benifits</strong></p>
        <ul style="text-align: justify;">
          <li>Any Branch Banking</li>
          <li>RTGS/ NEFT Facility</li>
          <li>Free SMS Alerts on Request</li>
          <li>Cheque Book Facility</li>
          <li>Standing Instructions</li>
          <li>A/c. view facility on internet.</li>
        </ul>
        <p style="text-align: justify;">Documents to be submitted for opening Savings Account.</p>
        <p style="text-align: justify;"><strong>(A) Individual</strong></p>
        <ul style="text-align: justify;">
          <li>Recent Photograph of the applicant customer.</li>
          <li>Copy of PAN card.</li>
          <li>Copy of Photo Identity such as passport, Driving License, Election ID Card or PAN card – Any one of these to be submitted.</li>
          <li>Proof of Residence such as Electricity Bill, Gas Bill, Telephone Bill of landline (BSNL), Municipal tax bill and receipt, LIC policy last premium paid notice and receipt – Any one of these to be obtained.</li>
          <li>If staying in rented premises than copy of rent agreement, or letter from society and copy of proof of resident from above.</li>
          <li>Details of existing Bank account. If enjoying credit limit from other bank, then NOC from that Bank is must.</li>
        </ul>
        <p style="text-align: justify;"><strong>(B) PROPRIETORSHIP FIRM</strong></p>
        <ul style="text-align: justify;">
          <li>Recent Photograph of all the office bearers with designation.</li>  
          <li>Copy of PAN Card.</li>
          <li>Copy of Photo Identity such as passport, Driving License, Election ID Card or PAN card – Any one of these to be submitted.</li>
          <li>Proof of Residence such as Electricity Bill, Gas Bill, Telephone Bill of landline (BSNL), Municipal tax bill and receipt, LIC policy last premium paid notice and receipt – Any one of these to be obtained.</li>
          <li>If staying in rented premises than copy of rent agreement, or letter from society and copy of proof of resident from above.</li>
          <li>Details of existing Bank account. If enjoying credit limit from other bank, then NOC from that Bank is must.</li>
          <li>Proof of Proprietorship such as Registration with Sales Tax authority, or SSI Registration Certificate, Copy of Registration with Local Authority like Municipal corp., Food Drug License etc.</li>
          <li>Proof of place of business like Municipal Tax Bill, Rent Agreement Copy, etc.</li>
        </ul>
        <p style="text-align: justify;"><strong>(C) PARTNERSHIP FIRM</strong></p>
        <ul style="text-align: justify;">
          <li>Recent photograph of all the partners of the firm.</li>
          <li>Copy of PAN card for Firm and all the partners.</li>
          <li>Copy of Photo Identity such as Passport, Driving License, Election Card, or PAN card-any one of these to be obtained for all the partners of the firm</li>
          <li>Proof of Residence such as Electricity bill, Gas bill, Telephone bill of landline (BSNL), Municipal Tax bill and receipt, LIC policy last premium paid notice and receipt-any one from these to be obtained for all the partners of the firm.</li>
          <li>If staying in rented premises than copy of rent agreement, or letter from society and copy of proof of resident from above.</li>
          <li>Details of existing bank account. If enjoying credit limit from other bank, then N.O.C. from that bank is must.</li>
          <li>Proof of partnership such as Registration with Sales Tax authority, or SSI Registration Certificate, Copy of Registration with Local Authority like municipal corp., Food Drug License etc.</li>
          <li>Proof of place of business like Municipal Tax Bill, Rent Agreement copy, etc.</li>
          <li>Copy of Partnership Deed and copy of Partnership deed registration with registrar of Firms.</li>
        </ul>
               
        <p style="text-align: justify;padding-bottom: 30px;"><strong>Note : Original documents to be presented with copy for verification.</strong></p>

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