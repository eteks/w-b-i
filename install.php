<?php
   include('session.php');
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
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato:700i" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

</head>

<body onload="StartTimers();" onmousemove="ResetTimers();" onkeyup="ResetTimers();">
    <!-- Navigation -->
    <header class="header-tp">
        <nav class="navbar navbar-inverse navbar-static-top">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar_custom">
                        <span class="sr-only">Toggle navigation</span>
                        <a class="navbar_custom"><img src="images/user.svg" alt="ezi" /></a>
                    </button>
                    <a href="index.php"><img class="header_logo" src="images/ezi_logo.png" alt="ezi" /></a>
                </div>
                <div class="navbar-collapse collapse navbar_custom">
                    <!-- <ul class="nav navbar-nav navbar-right">
                    <img src="images/user.svg" alt="ezi" />
                        <a href="" class="navbar_custom">Username<span class="caret"></span></a>
                    </ul> -->
                    <ul>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle navbar_custom" data-toggle="dropdown"><img src="images/user.svg" alt="ezi" />Welcome <?php if(isset($login_username)) echo $login_username; ?><span class="caret"></span></a>
                            <ul class="dropdown-menu">
                               <!--  <li><a href="#"> Profile</a></li>
                                <li><a href="#"> Settings</a></li> -->
                                <li><a href="logout.php"> Logout</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
            <!--/.container-fluid -->
        </nav>
    </header>
    <section class="install">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <h2>Webfleet.sync.Test.Toolkit.UI</h2>
                    <br/>
                    <div id="no-more-tables">
                        <table class="table-borderless">
                            <tbody>
                                <tr>
                                    <td><strong> Name: </strong></td>
                                    <td>Webfleet.sync.Test.Toolkit.UI</td>
                                </tr>
                                <tr>
                                    <td><strong> Version: </strong></td>
                                    <td>1.0.0.0 </td>
                                </tr>
                                <tr>
                                    <td><strong> Publisher: </strong></td>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div><br/>
                    <div class="prerequisites"> 
                        <p>
                            The Following prerequisites are required:
                        </p>
                        <ul>
                            <li>
                                <img src="images/select.svg" alt="ezi" /><span>Windows Installer 3.1</span>
                            </li>
                            <li>
                                <img src="images/select.svg" alt="ezi" /><span>Microsoft .NET Framework 4 Client Profile(x86 and x64)</span>
                            </li>
                        </ul>
                        <p>
                            If these components are already installed, you can launch the application now. Otherwise, click the button below to install the prerequisites and run the application.
                        </p><br/>
                    </div>
                    <div class="dwnld_holder col-md-12 nopadding">
                        <div id="btn_install" class="pull-right col-xs-12 col-sm-6 col-md-6 nopadding">
                            <button type="button" class="btn btn-large install_btn">Install</button>
                        </div>
                        <div class="pull-left col-xs-12 col-sm-6 col-md-6 nopadding">
                            <a href="#"> Click Once and .NET Framework resources </a>
                        </div>    
                        <div class='clearfix'></div>
                    </div>    
                </div><!--BS-->    
            </div> <!--row-->   
        </div><!--container-->
    </section>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script type="text/javascript">
        // var timoutWarning = 1800000 ; // Display warning in 14 Mins.
        var timoutEnd = 3600000; // Timeout in 1 hr.
        var logoutUrl = 'logout.php'; // URL to logout page.

        // var warningTimer;
        var timeoutTimer;

        // Start timers.
        function StartTimers() {
            // warningTimer = setTimeout("IdleWarning()", timoutWarning);
            timeoutTimer = setTimeout("IdleTimeout()", timoutEnd);
        }

        // Reset timers.
        function ResetTimers() {
            // clearTimeout(warningTimer);
            clearTimeout(timeoutTimer);
            StartTimers();
        }

        // Show idle timeout warning dialog.
        // function IdleWarning() {
        //     alert("System Ideal!");
        // }
    </script>
    </body>
</html>