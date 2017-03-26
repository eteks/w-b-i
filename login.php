<?php
  include("config.php");
  include("telstrasms.php");
  session_start();
  if(!empty($_SESSION['login_status']) && $_SESSION['login_status']==1) 
    header("Location: welcome.php");
  
  if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $myusername = $_POST['username'];
    $password = $_POST['password'];
    $mypassword = md5($_POST['password']);

    // Check validation
    if($myusername != '' && $password != '') {
      $sql = mysql_query("SELECT * FROM ezikey_users WHERE user_name = '$myusername' and user_password = '$mypassword' and user_status=1");
      $count = mysql_num_rows($sql);

      if ($count == 1) {
        $user_array = mysql_fetch_array($sql);
        $_SESSION['user_id'] = $user_array['user_id'];
        $_SESSION['user_name'] = $user_array['user_name'];
        $_SESSION['login_status'] = 1;
        $error = "success";
        header("location: index.php");
      }
      else {
        $already_query = mysql_query("SELECT * FROM ezikey_users WHERE user_name = '$myusername'");
        $already_count = mysql_num_rows($already_query);
        if ($already_count == 1) {
          $error = "Already exists.";
        }
        else {
          // 61418136693 - fake 
          // 61404550076 - sathis
          // $msg = "The+".$myusername."+is+registered+with+us.+Please+approve+the+user+very+soon.";
          $msg = "Once you received the message. just reply ok for testing purpose.By Etekchnoservices";
          $sms = new TelstraSMS(); // Construct new SMS object
          $response = $sms->telstra_sms('61404550076',$msg);
          if($response) {
            $decode = json_decode($response,true);
            $message_id = $decode['messageId'];
            $token = $decode['token'];
            $_SESSION['approval_status'] = 1;
            $error = "Approval process";
            mysql_query("INSERT INTO ezikey_users (user_name,user_password,message_id,user_token,user_status) VALUES ('$myusername','$mypassword','$message_id','$token',0)");
            header("location: approval.php");   
          }
          else {
            $error = "Login process failed";
          } 
        }
      }
    }
    else {
      $error = "Please enter correct details";
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

    <header class="header-tp">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <!-- <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar_custom">
                        <span class="sr-only">Toggle navigation</span>
                        <a class="navbar_custom"><img src="images/user.svg" alt="ezi" /></a>
                    </button> -->
                    <a href="#"><img class="header_logo" src="images/ezi_logo.png" alt="ezi" /></a>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </header>

<body>
    <section>
        <div class="container">
          <div class="row">
            <div class="middle">
                <h2 class="login_form">Login</h2>
                    <div class="col-lg-6 col-lg-offset-4">
                              <div style="color: rgb(204, 0, 0); margin: 10px; font-size: 16px; text-align: center;"><?php if(isset($error)) echo $error; ?></div>
                            <form class="form-horizontal min" action="#" method="post">
                                <div class="form-group">

                                    <input type="text" class="form-control login_field" name="username" placeholder="Username" required autofocus>

                                </div>
                                <div class="form-group">

                                    <input type="password" class="form-control login_field" name="password" placeholder="Password" required autofocus>

                                </div>
                                <div class="form-group">

                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox">Keep me signed in</label>

                                    </div>
                                </div>
                                <div class="form-group">

                                    <button type="submit" class="btn btn-default btn-block subbutton">LOG IN</button>

                                </div>
                                <!-- <a href="#" class="forgot-password">Forgot password?</a><br> -->
                                <div class="form-group">
                                <!-- <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1#identifier" class="btn btn-block btn-social btn-google"><img src="images/gmail.svg" alt="ezi" />SIGN IN WITH GMAIL</a> -->
                            </div>
                            </form>
                    </div>
<!--                     <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <form class="form-horizontal mxn">
                            <div class="row">
                                <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1#identifier" class="btn btn-block btn-social btn-google"><img src="images/gmail.svg" alt="ezi" />SIGN IN WITH GMAIL</a>
                            </div>
                            <br>
                            <div class="row">
                                <a href="https://www.facebook.com/" class="btn btn-block btn-social btn-facebook"><img class="social_icon" src="images/facebook.svg" alt="ezi" style="height: 39px;" /></span>SIGN IN WITH FACEBOOK</a>
                            </div>
                            <br>
                            <div class="row">
                                <p class="text-center">OR</p>
                            </div>
                            <div class="row">
                                <button type="submit" class="btn btn-default btn-block acc">CREATE ACCOUNT</button>
                            </div>

                        </form>

                    </div> -->
                </div>
            </div>
            <!--middle-->
        </div>
        <!--container-->
    </section>
</body>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script> -->

</html>