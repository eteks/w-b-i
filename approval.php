<?php
session_start();
if(!isset($_SESSION['approval_status']))
	header("Location:login.php")
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	    <meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">
	    <title>EZI KEY</title>

	    <!-- Bootstrap Core CSS -->
    	<link href="css/bootstrap.min.css" rel="stylesheet">

	    <!-- Theme CSS -->
	    <link href="custom.css" rel="stylesheet">

	    <!-- Custom Fonts -->
	    <!-- <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
	    <link href="css/bootstrap-social.css" rel="stylesheet">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	</head>
	  
	<body>
		<header class="header-tp">
	        <nav class="navbar navbar-inverse navbar-static-top">
            	<div class="container">
	                <div class="navbar-header">
                    	<a href="index.php"><img class="header_logo" src="images/ezi_logo.png" alt="ezi" /></a>
                	</div>
                	<!--/.nav-collapse -->
            	</div>
            	<!--/.container-fluid -->
       	 	</nav>
    	</header>
    	<section>
	        <div class="container">
		        <div class="row">
                	<h2 class="login_form">Welcome</h2>
                	<h3 style="color:#a6a6a6;text-align: center;">Waiting for approval. We will contact you very soon.</h3> 
                	<a href="login.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to home</a> 
            	</div> <!--middle-->
	    	</div> <!--container-->
    	</section>
	</body>
</html>
<?php
unset($_SESSION['approval_status']);
?>