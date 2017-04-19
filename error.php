<!DOCTYPE html>
<html>
<head>
	<title>Page not found!</title>
	meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bank Website</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/hover-min.css" rel="stylesheet">  
    <link href="css/bank_universal.css" rel="stylesheet">  
    <link href="css/error.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
    <link rel="shortcut icon" type="image/png" href="images/favicon.jpg">
      
    <!-- HTML5 shim and Respond.js for IE8 support of php5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/php5shiv/3.7.3/5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
</head>
<body>
	<?php
        include 'header.php';
    ?>
	<div class="content_info">
        <div class="paddings">
            <div class="container">
                <div class="page-error">
                    <h1>404 <i class="fa fa-exclamation-triangle"></i></h1>
                     <hr class="tall">
                    <p class="lead">We're sorry, but the page you were looking for doesn't exist.</p>`      
                </div>
            </div>
        </div>
    </div>

    <?php
    include 'footer.php';
	?>

</body>
</html>