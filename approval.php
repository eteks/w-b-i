<?php
include("config.php");
session_start();
if(!isset($_SESSION['approval_status']))
	header("Location:login.php")
?>
<?php
	if(!empty($_SESSION['user_name'])) {
		$myusername = $_SESSION['user_name'];
		$sql = mysql_query("SELECT * FROM ezikey_users WHERE user_name = '$myusername'") or die(mysql_error());
		$count = mysql_num_rows($sql);
		if($count == 1) {
			$user_array = mysql_fetch_array($sql);
			if($user_array['user_approval_status'] == 0) {
				$message = "Registration waiting for approval. We will contact you very soon.";
			}
			else if($user_array['user_approval_status'] == 1) {
				$message = "Approved";
	           	$_SESSION['user_id'] = $user_array['user_id'];
           		$_SESSION['user_name'] = $user_array['user_name'];
        		$_SESSION['login_status'] = 1;
	            header("location: index.php");
			}
			else if($user_array['user_approval_status'] == 2) {
				$message = "Registration approval was denied.";
			}
		}
		else {
			$message = "error.";
			header("location: login.php");
		}
	}
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
                	<h3 style="color:#a6a6a6;text-align: center;"> <?php if(isset($message)) echo $message; ?></h3> 
                	<a href="login.php"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back to home</a> 
            	</div> <!--middle-->
	    	</div> <!--container-->
    	</section>
	</body>
</html>
<?php
// unset($_SESSION['approval_status']);
?>