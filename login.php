<?php
include("config.php");
include("telstrasms.php");
session_start();
unset($_SESSION['approval_status']);
// unset($_SESSION['temp_otp']);
// unset($_SESSION['temp_mobile']);
// unset($_SESSION['temp_password']);

if(!empty($_SESSION['login_status']) && $_SESSION['login_status']==1) 
    header("location: index.php");
  
if($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form 
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];
    $user_mobile = "61".$_POST['mobile'];
    $user_password = md5($_POST['password']);

    // Check validation
    if($mobile != '' && $password != '') {
        $sql = mysql_query("SELECT * FROM ezikey_users WHERE mobile_number = '$mobile' AND user_password = '$user_password'");
        $count = mysql_num_rows($sql);
        if ($count == 1 && empty($_SESSION['temp_otp'])) {
            $user_array = mysql_fetch_array($sql);
            $mob = $user_array['mobile_number'];
            $name = $user_array['user_name'];
            $id = $user_array['user_id'];
            $admin = $user_array['is_admin'];
            /*
                61418136693 - fake 
                61404550076 - sathis
                Ok - approved, otherwise not approved.
            */
            if($admin == 1) {
                $_SESSION['user_id'] = $id;
                $_SESSION['user_name'] = $name;
                $_SESSION['login_status'] = 1;
                $error = "success";
                header("location: index.php");
            }
            else {
                $msg = "Hello, A new user ".$name." is registered with us by ".$mob.".Please send approval status to the user very soon.";
                $sms = new TelstraSMS(); // Construct new SMS object
                $response = $sms->telstra_sms('61404550076',$msg);
                if($response) {
                    $decode = json_decode($response,true);
                    $message_id = $decode['messageId'];
                    $token = $decode['token'];
                    mysql_query("UPDATE ezikey_users SET message_id='$message_id',user_token='$token',user_approval_status=0 WHERE user_id='$id'");
                    $_SESSION['user_id'] = $id;
                    $_SESSION['approval_status'] = 1;
                    $error = "Approval process";
                    header("location: approval.php");   
                }
            }
        }
        else {
            $already_sql = mysql_query("SELECT * FROM ezikey_users WHERE mobile_number = '$mobile'");
            $already_sql_count = mysql_num_rows($already_sql);
            if($already_sql_count == 1 && empty($_SESSION['temp_otp'])) {
                $error = "Password didnot match.";
            }
            else {
                $otp = "true";
                if(empty($_SESSION['temp_otp'])) {
                    $_SESSION['temp_mobile']  = $mobile;
                    $_SESSION['temp_password']  = $user_password;
                    $mobile_num  = "61".$_SESSION['temp_mobile'];
                    $_SESSION['temp_otp']  = rand(100000,999999);
                    $otp_value = $_SESSION['temp_otp'];
                    $msg = "Hello, your verfication code is ".$otp_value."";
                    $sms = new TelstraSMS(); // Construct new SMS object
                    $response = $sms->telstra_sms($mobile_num,$msg);
                    $error = "Check your mobile for verfication code.";
                }
                else {
                    $new_username = $_POST['username'];
                    $otp_entered = $_POST['otp'];
                    if($new_username != '' && $otp_entered != '') {
                        if($otp_entered == $_SESSION['temp_otp']) {
                            $mobile_num  = $_SESSION['temp_mobile'];
                            $password_val  = md5($_SESSION['temp_password']);
                            $msg = "Hello, A new user ".$new_username." is registered with us by ".$mobile_num.".Please send approval status to the user very soon.";
                            $sms = new TelstraSMS(); // Construct new SMS object
                            $response = $sms->telstra_sms('61404550076',$msg);
                            if($response) {
                                $decode = json_decode($response,true);
                                $message_id = $decode['messageId'];
                                $token = $decode['token'];
                                $_SESSION['approval_status'] = 1;
                                $error = "Approval process";
                                mysql_query("INSERT INTO ezikey_users (user_name,mobile_number,user_password,message_id,user_token,user_approval_status) VALUES ('$new_username','$mobile_num','$password_val','$message_id','$token',0)");
                                $_SESSION['user_id'] = mysql_insert_id();
                                header("location: approval.php");   
                            }
                        }
                        else {
                            $error = "Please enter valid credentials.";
                        }
                    }
                    else {
                        $error = "Please enter valid credentials.";
                    }
                }
            }        
        }
    }
    else {
        $error = "Please enter valid credentials.";
    }  
}
else {
    unset($_SESSION['temp_otp']);
    unset($_SESSION['temp_mobile']);
    unset($_SESSION['temp_password']);
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
                        <div class="col-lg-6 col-lg-offset-4">
                            <h2 class="login_form">Login</h2>
                            <div style="color: rgb(204, 0, 0); margin: 10px; font-size: 16px; text-align: center;margin-bottom: 20px;"><?php if(isset($error)) echo $error; ?></div>
                            <form class="form-horizontal min" action="#" method="post">
                                <div class="col-lg-8 margin_section col-md-6 col-sm-6 col-xs-12">
                                    <?php
                                    if(!isset($otp)) {
                                    ?>
                                    <div class="form-group mobile_country_section">
                                        <input type="text" class="form-control login_field mobile_number_p" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="20" value="" autocomplete="off" required />
                                        <span class="country_code"> +61 </span>
                                    </div> 
                                    <div class="form-group">
                                       <input type="password" class="form-control login_field" name="password" placeholder="Password" maxlength="20" autocomplete="off" required />
                                    </div>
                                    <div class="form-group">
                                        <div class="checkbox">
                                            <label><input type="checkbox">Keep me signed in</label>
                                        </div>
                                    </div>
                                    <?php
                                    }
                                    else {
                                    $mobile = $_SESSION['temp_mobile'];
                                    $password = $_SESSION['temp_password'];
                                    ?>
                                    <input type="hidden" name="mobile" value="<?php echo $mobile; ?>" />
                                    <input type="hidden" name="password" value="<?php echo $password; ?>" />
                                    <div class="form-group">
                                        <input type="text" class="form-control login_field" name="username" placeholder="Name" maxlength="20" autocomplete="off" required />    
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control login_field" name="otp" placeholder="OTP" maxlength="20" autocomplete="off" required />
                                    </div>   
                                    <?php
                                    }
                                    ?>
                                   <!-- <div class="form-group mobile_country_section">
                                    <input type="text" class="form-control login_field mobile_number_p" name="mobile" id="mobile" placeholder="Mobile Number" maxlength="20" autocomplete="off" />
                                        <span class="country_code"> +61 </span>
                                </div>     -->                            
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-default btn-block subbutton">LOG IN</button>
                                    </div>
                                </div>
                                <!-- <a href="#" class="forgot-password">Forgot password?</a><br> -->
                                <div class="form-group">
                                    <!-- <a href="https://accounts.google.com/ServiceLogin?continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&service=mail&sacu=1&rip=1#identifier" class="btn btn-block btn-social btn-google"><img src="images/gmail.svg" alt="ezi" />SIGN IN WITH GMAIL</a> -->
                                </div>
                            </form>
                        </div>
                            <!-- <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                // Key controls
                $('#mobile').on('keypress',function (e) {
                    if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)) {
                        // $("#error_test").html("Digits Only").show().fadeOut("slow");
                        return false;
                    }   
                });
                // To prevent cut copy paste event
                $('body').bind("cut copy paste",function(e) {
                    e.preventDefault();
                });
            }); // End
        </script>
    </body>
</html>