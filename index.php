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

    <title>eziKey</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link href="css/custom.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <!-- <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->
    <!-- <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"> -->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">

</head>

<body onload="StartTimers();" onmousemove="ResetTimers();" onkeyup="ResetTimers();">
    <!-- Navigation -->
    <header class="header-tp">
        <nav class="navbar navbar-inverse navbar-static-top example6">
            <div class="container">
                <div class="navbar-header">
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="navbar_custom">
                        <span class="sr-only">Toggle navigation</span>
                        <a class="navbar_custom"><img src="images/user.svg" alt="ezi" /></a>
                    </button>
                    <a href="index.html"><img class="header_logo" src="images/ezi_logo.png" alt="ezi" /></a>
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
    <section>
        <div class="container">
            <div class="row section_panel">
                <div class="col-md-6">
                    <div class="row sub-log-title">
                        <div class="ezi_tool col-md-12 col-sm-4 col-xs-4">
                            <img src="images/tools.svg" alt="ezi" />
                        </div>
                        <div class="col-md-12 col-sm-8 col-xs-8">
                            <h1>EziKey Tools and Drivers</h1>
                        </div>
                    </div>
                    <!--row end-->
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom">
                            <h3 class="panel-title">
                            <a href="#">LogMein<img class="dwnld_svg" src="images/download.svg" alt="ezi" /></a></h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom">
                            <h3 class="panel-title">
                            <a href="#">LINQ PAD 4<img class="dwnld_svg" src="images/download.svg" alt="ezi" /></a></h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom">
                            <h3 class="panel-title">
                            <a href="#">Property Key Empty Database<img class="dwnld_svg" src="images/download.svg" alt="ezi" /></a></h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom">
                            <h3 class="panel-title">
                            <a href="#">Webfleet Key Box Util Tools<img class="dwnld_svg" src="images/download.svg" alt="ezi" /></a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 panel_custom2_col">
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a target="_blank" href="install.php">Webfleet Sync Test Toolkit <img class="arrw_svg" src="images/arrow.svg" alt="ezi" /></a> 
                </h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a target="_blank" href="install.php">EziKey Test Tools<img class="arrw_svg" src="images/arrow.svg" alt="ezi" /></a>
                </h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a target="_blank" href="install.php">Sql Server Compact View<img class="arrw_svg" src="images/arrow.svg" alt="ezi" /></a> 
                </h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a target="_blank" href="install.php">EziKey Virtual Key Box<img class="arrw_svg" src="images/arrow.svg" alt="ezi" /></a> 
                </h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a target="_blank" href="install.php">EziKey Database Deploy Tools<img class="arrw_svg" src="images/arrow.svg" alt="ezi" /></a> 
                </h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a target="_blank" href="install.php">EziKey Schedule Watch Dog2.0<img class="arrw_svg" src="images/arrow.svg" alt="ezi" /></a> 
                </h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a target="_blank" href="install.php">EziKey Upgrade Packing<img class="arrw_svg" src="images/arrow.svg" alt="ezi" /></a> 
                </h3>
                        </div>
                    </div>
                    <div class="panel panel-success">
                        <div class="panel-heading panel_custom_2">
                            <h3 class="panel-title">
                    <a href="https://skydrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%21306#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216076">EziKey Encrypt/Decrypt Tool Kit<img class="arrw_svg" src="images/arrow.svg" alt="ezi" /> </a>
                </h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<div class="touch_system">    
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>EziKey Touch System</h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12 no-padding">
                                <ul class="envr">
                                    <li>
                                        Environment
                                    </li>
                                    <li>
                                        <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey Touch Environment 1.1.zip" class="box">Ezikey Environment 1.1</a>
                                    </li>
                                    <li>
                                        <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey Touch Environment 1.2.zip" class="box">Ezikey Environment 1.2(suppor surface)</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <div class="comment_mob">
                            <!--mob-res-table-->
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="#">EziKey_Touch_Application_1_2_3_0(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/10/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216229"><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_1.1.2.0 </a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_0(For Windows 7 Professional SP1 32 bit)/Sql/Task15.sql"><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_0(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.0.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_0(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_1(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.2.3.1.zip">EziKey_Touch_Application_1_2_3_1(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">06/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_1(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.1.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_1(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.1.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_10(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System V1.2.3.10.zip">EziKey_Touch_Application_1_2_3_10(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">17/06/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_10(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle -20150921.zip"><img alt="ezi" src="images/select.svg"> Loan Vehicle -20150921.zip </a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_10(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive - 20150921.zip"><img alt="ezi" src="images/select.svg"> Test Drive - 20150921.zip</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_10(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Screen 1.2.3.10.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_10(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.10.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_2(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.2.3.2.zip">EziKey_Touch_Application_1_2_3_2(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_2(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.2.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_2(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.2.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_3(For Windows 7 Professional SP1 32 bit)/App/EzikeyTouchApplication_1.2.3.3.zip">EziKey_Touch_Application_1_2_3_3(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">10/02/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_3(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.3.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_3(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.3.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_4(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System  1.2.3.4.zip">EziKey_Touch_Application_1_2_3_4(For Windows 7 Professional SP1 32 bit)</a></div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_4(For Windows 7 Professional SP1 32 bit)/Sql/18_ezikey admin tool Release SQL.sql"><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_4(For Windows 7 Professional SP1 32 bit)/Sql/18_ezikey admin tool Release SQL.sql"><img alt="ezi" src="images/select.svg"> Ezikey Admin Empty no 578 1.1.2.4</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_4(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.4.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_4(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.4.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_5(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.2.3.5.zip">EziKey_Touch_Application_1_2_3_5(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">23/06/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_5(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.5.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_5(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.5.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_6(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.2.3.6.zip">EziKey_Touch_Application_1_2_3_6(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">28/08/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219429"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.4 </a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_6(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.6.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_6(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.6.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_7(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.2.3.7.zip">EziKey_Touch_Application_1_2_3_7(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">02/12/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219429"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.4 </a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_7(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.7.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_7(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.7.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_8(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System V1.2.3.8.zip">EziKey_Touch_Application_1_2_3_8(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">05/03/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110730"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.6</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_8(For Windows 7 Professional SP1 32 bit)/Sql/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql"><img alt="ezi" src="images/select.svg"> ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_8(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.8.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_8(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.8.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_9(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System V1.2.3.9.zip">EziKey_Touch_Application_1_2_3_9(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">03/04/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110848"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.7</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_9(For Windows 7 Professional SP1 32 bit)/Sql/task 75.sql"><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_9(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.9.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_9(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.9.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.3.1.0.zip">EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/10/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216230"><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_has578_1.2.1.0</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip"><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Sql/Task15.sql"><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip"><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.0.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.3.1.1.zip">EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">06/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.1.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.1.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System V1.3.1.10.zip">EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">17/06/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip"><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip"><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Screen 1.3.1.10.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.10.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.3.1.2.zip">EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.2.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.2.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)/App/EzikeyTouchApplication_1.3.1.3.zip">EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">10/02/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.3.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.3.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.3.1.4.zip">EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">25/03/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Sql/18_ezikey admin tool Release SQL.sql"><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                            </li>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217997#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217998"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip"><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip"><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.4.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.4.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.3.1.5.zip">EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">23/06/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.5.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.5.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="#">EziKey_Touch_Application_1_3_1_6(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">28/08/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219431"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                            </li>

                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_6(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.6.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_6(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.6.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.3.1.7.zip">EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">02/12/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219431"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle Agreement template April 2012_BMW V7.docx"><img alt="ezi" src="images/select.svg"> Loan Vehicle Agreement template April 2012_BMW V7.docx</a>
                                            </li>

                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.7.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.7.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System  V1.3.1.8.zip">EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">05/03/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110728"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.6</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Sql/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql"><img alt="ezi" src="images/select.svg"> ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip"><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip"><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.8.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.8.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System V1.3.1.9.zip">EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">03/04/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110849"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.7</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip"><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Sql/task 75.sql"><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip"><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.9.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.9.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div>  <!--.comment-->     
                        <!---end mob-res-table-->

                        <!--For DESKTOP view-->
                        <div class="show_touchsystem">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.0/EziKeyTouchAplication_1.2.3.0.zip'>EziKey_Touch_Application_1_2_3_0(For Windows 7 Professional SP1 32 bit)</a></td>
                                        <td>
                                            <img src="images/select.svg" alt="ezi" />
                                            <a href='https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216229'>EziKey_Empty_Admin_1.1.2.0</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.0/Task15.sql'><img src="images/select.svg" alt="ezi" />Task15.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.0/Release Note.txt"><img src="images/notes.svg" alt="ezi" /></a>
                                            </i>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.0/Ezikey Touch Application 1.2.3.0.pdf"><img src="images/pdf.svg" alt="ezi" /></a>
                                        </td>
                                        <td>14/10/2013</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.1/EziKeyTouchApplication_1.2.3.1.zip'>EziKey_Touch_Application_1_2_3_1(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.1/Release Notes.txt"><img src="images/notes.svg" alt="ezi" /></a>
                                            </i>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.1/Ezikey Touch Application 1.2.3.1.pdf"><img src="images/pdf.svg" alt="ezi" /></a>
                                        </td>
                                        <td>06/11/2013</td>
                                    </tr>

                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.10/Ezikey Touchscreen System V1.2.3.10.zip'>EziKey_Touch_Application_1_2_3_10(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td>
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.10/Loan Vehicle -20150921.zip'><img src="images/select.svg" alt="ezi" />Loan Vehicle -20150921.zip</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.10/Test Drive - 20150921.zip'><img src="images/select.svg" alt="ezi" />Test Drive - 20150921.zip</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.10/Ezikey Touch Application 1.2.3.10.txt"><img src="images/notes.svg" alt="ezi" /></a>
                                            </i>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.10/Ezikey Touch Application 1.2.3.10.pdf"><img src="images/pdf.svg" alt="ezi" /></a>
                                        </td>
                                        <td>17/06/2015</td>
                                    </tr>

                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.2/EziKeyTouchApplication_1.2.3.2.zip'>EziKey_Touch_Application_1_2_3_2(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td></td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.2/Ezikey Touch Application 1.2.3.2.txt"><img src="images/notes.svg" alt="ezi" /></a>
                                            </i>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.2/Ezikey Touch Application 1.2.3.2.pdf"><img src="images/pdf.svg" alt="ezi" /></a>
                                        </td>
                                        <td>14/11/2013</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.3/EzikeyTouchApplication_1.2.3.3.zip'>EziKey_Touch_Application_1_2_3_3(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.3/Ezikey Touch Application 1.2.3.3.txt"><img src="images/notes.svg" alt="ezi" /></a>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.3/Ezikey Touch Application 1.2.3.3.pdf"><img src="images/pdf.svg" alt="ezi" /></a>
                                        </td>
                                        <td>10/02/2014</td>
                                    </tr>

                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.4/Ezikey Touchscreen System  1.2.3.4.zip'>EziKey_Touch_Application_1_2_3_4(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.4/18_ezikey admin tool Release SQL.sql'><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                            <br/>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216229#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217997'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.4</a>
                                            <br/>
                                        </td>
                                        <td class="text-center"><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.4/Ezikey Touch Application 1.2.3.4.txt' <img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.4/Ezikey Touch Application 1.2.3.4.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>25/03/2014</td>
                                    </tr>

                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.5/Ezikey Touchscreen System 1.2.3.5.zip'>EziKey_Touch_Application_1_2_3_5(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.5/Ezikey Touch Application 1.2.3.5.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.5/Ezikey Touch Application 1.2.3.5.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>23/06/2014</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.6/Ezikey Touchscreen System 1.2.3.6.zip'>EziKey_Touch_Application_1_2_3_6(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219429'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.4</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.6/Ezikey Touch Application 1.2.3.6.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.6/Ezikey Touch Application 1.2.3.6.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>28/08/2014</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.7/Ezikey Touchscreen System 1.2.3.7.zip'>EziKey_Touch_Application_1_2_3_7(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219429'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.4</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.7/Ezikey Touch Application 1.2.3.7.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.7/Ezikey Touch Application 1.2.3.7.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>02/12/2014</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.8/Ezikey Touchscreen System V1.2.3.8.zip'>EziKey_Touch_Application_1_2_3_8(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td>
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.8/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0 (1).sql'><img alt="ezi" src="images/select.svg"> Ezikey Admin Empty no 578 1.1.2.6</a>
                                            <br/>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110730'><img alt="ezi" src="images/select.svg"> EziKey admin tool Release SQL(Task 24 25&31 ) - Release V1.0.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.8/Ezikey Touch Application 1.2.3.8.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.8/Ezikey Touch Application 1.2.3.8.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>05/03/2015</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.9/Ezikey Touchscreen System V1.2.3.9.zip'>EziKey_Touch_Application_1_2_3_9(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110848'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.7</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.9/task 75.sql'><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.9/Ezikey Touch Application 1.2.3.9.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Ezikey/Ezikey_Touchsystem/versions/1.2.3.9/Ezikey Touch Application 1.2.3.9.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>03/04/2015</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.3.1.0.zip'>EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216230'><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_has578_1.2.1.0</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip'><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Sql/Task15.sql'><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip'><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.0.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_0(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.0.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>14/10/2013</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.3.1.1.zip'>EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.1.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_1(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.1.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>06/11/2013</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System V1.3.1.10.zip'>EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip'><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip'><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Screen 1.3.1.10.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_10(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.10.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>17/06/2015</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)/App/EziKeyTouchApplication_1.3.1.2.zip'>EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.2.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_2(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.2.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>14/11/2013</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)/App/EzikeyTouchApplication_1.3.1.3.zip'>EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.3.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_3(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.3.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>10/02/2014</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.3.1.4.zip'>EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Sql/18_ezikey admin tool Release SQL.sql'><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                            <br/>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217997#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217998'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip'><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip'><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.4.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_4(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.4.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>25/03/2014</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.3.1.5.zip'>EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.5.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_5(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.5.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>23/06/2014</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_6(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.3.1.6.zip'>EziKey_Touch_Application_1_3_1_6(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219431'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_6(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.6.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_6(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.6.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>28/08/2014</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System 1.3.1.7.zip'>EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219431'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle Agreement template April 2012_BMW V7.docx'><img alt="ezi" src="images/select.svg"> Loan Vehicle Agreement template April 2012_BMW V7.docx</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.7.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_7(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.7.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>02/12/2014</td>
                                    </tr>
                                    <tr>
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System  V1.3.1.8.zip'>EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110728'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.6</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Sql/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql'><img alt="ezi" src="images/select.svg"> ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip'><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip'><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.8.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_8(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.8.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>05/03/2015</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/App/Ezikey Touchscreen System V1.3.1.9.zip'>EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)</a>
                                            <br/>
                                        </td>

                                        <td><a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110849'><img alt="ezi" src="images/select.svg"> Ezikey Admin Empty has 578 1.s2.1.7</a>
                                            <br/><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Sql/Loan Vehicle.zip'><img alt="ezi" src="images/select.svg"> Loan Vehicle.zip</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Sql/task 75.sql'><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            <br/><a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Sql/Test Drive.zip'><img alt="ezi" src="images/select.svg"> Test Drive.zip</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.3.1.9.txt'><img src="images/notes.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_3_1_9(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.3.1.9.pdf'><img src="images/pdf.svg" alt="ezi" /></a>
                                            <br/>
                                        </td>
                                        <td>03/04/2015</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!--.comment-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>EziKey Management Tools</h4>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-10 col-xs-12 no-padding">
                                <ul class="envr">
                                    <li>
                                        Environment
                                    </li>
                                    <li>
                                        <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Management_Tools_Environment 1_2.zip" class="box">Management Tools Environment 1.2</a>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/App/EziKeyAdminTool_1.1.2.0.zip">Ezikey_Admin_Tool_1_1_2_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/10/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216224"><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_1.1.2.0</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/Sql/Task15.sql"><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/Release Notes/Ezikey Admin Tool 1.1.2.0.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/UserMannual/EziKey Admin Tool 1.1.2.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_1/App/EziKeyAdminTool_1.1.2.1.zip">Ezikey_Admin_Tool_1_1_2_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">24/10/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_1/Release Notes/Ezikey Admin Tool 1.1.2.1.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_1/UserMannual/EziKey Admin Tool 1.1.2.1.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_2/App/EziKeyAdminTool_1.1.2.2.zip">Ezikey_Admin_Tool_1_1_2_2</a></div>
                                        <div class="col-xs-3 text-right no-padding">07/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_2/Release Notes/Ezikey Admin Tool 1.1.2.2.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_2/UserMannual/EziKey Admin Tool 1.1.2.2.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_3/App/EziKeyAdminTool_1.1.2.3.zip">Ezikey_Admin_Tool_1_1_2_3</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">

                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_3/Release Notes/Ezikey Admin Tool 1.1.2.3.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_3/UserMannual/EziKey Admin Tool 1.1.2.3.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/App/Ezikey Admin Tool 1.1.2.4.zip">Ezikey_Admin_Tool_1_1_2_4</a></div>
                                        <div class="col-xs-3 text-right no-padding">25/03/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/Sql/18_ezikey admin tool Release SQL.sql"><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                            </li>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216229#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217997"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.4</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/Release Notes/Ezikey Admin Tool 1.1.2.4.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/UserMannual/EziKey Admin Tool 1.1.2.4.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_5/App/Ezikey Admin Tool 1.1.2.5.zip">Ezikey_Admin_Tool_1_1_2_5</a></div>
                                        <div class="col-xs-3 text-right no-padding">23/06/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219429"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.5</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_5/Release Notes/Ezikey Admin Tool 1.1.2.5.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_5/UserMannual/EziKey Admin Tool 1.1.2.5.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_6/App/Ezikey Admin Tool  V1.1.2.6.zip">Ezikey_Admin_Tool_1_1_2_6</a></div>
                                        <div class="col-xs-3 text-right no-padding">05/03/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110730"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.6</a>
                                            </li>
                                            <li>
                                            <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_6/Sql/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql"><img alt="ezi" src="images/select.svg"> ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="EziKey Admin Tool 1.1.2.6.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_6/UserMannual/EziKey Admin Tool 1.1.2.6.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/App/Ezikey Admin Tool V1.1.2.7.zip">Ezikey_Admin_Tool_1_1_2_7</a></div>
                                        <div class="col-xs-3 text-right no-padding">03/04/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110848"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.7 </a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/Sql/task 75.sql"><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/Release Notes/Ezikey Admin Tool 1.1.2.7.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/UserMannual/EziKey Admin Tool 1.1.2.7.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/Release Notes/Ezikey Admin Tool 1.2.1.0.txt">Ezikey Admin Tool 1.2.1.0.txt</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/10/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216225"><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_has578_1.2.1.0</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/Sql/Task15.sql"><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/Release Notes/Ezikey Admin Tool 1.2.1.0.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/UserMannual/EziKey Admin Tool 1.2.1.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_1/App/EziKeyAdminTool_1.2.1.1.zip">Ezikey_Admin_Tool_1_2_1_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">24/10/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_1/Release Notes/Ezikey Admin Tool 1.2.1.1.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_1/UserMannual/EziKey Admin Tool 1.2.1.1.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_2/App/EziKeyAdminTool_1.2.1.2.zip">Ezikey_Admin_Tool_1_2_1_2</a></div>
                                        <div class="col-xs-3 text-right no-padding">07/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_2/Release Notes/Ezikey Admin Tool 1.2.1.2.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_2/UserMannual/EziKey Admin Tool 1.2.1.2.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_3/App/EziKeyAdminTool_1.2.1.3.zip">Ezikey_Admin_Tool_1_2_1_3</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_3/Release Notes/Ezikey Admin Tool 1.2.1.3.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_3/UserMannual/EziKey Admin Tool 1.2.1.3.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/App/Ezikey Admin Tool 1.2.1.4.zip">Ezikey_Admin_Tool_1_2_1_4</a></div>
                                        <div class="col-xs-3 text-right no-padding">25/03/2014</div>
                                    </div>
                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/Sql/18_ezikey admin tool Release SQL.sql"><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                            </li>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217997#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217998"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/Release Notes/Ezikey Admin Tool 1.2.1.4.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/UserMannual/EziKey Admin Tool 1.2.1.4.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_5/App/Ezikey Admin Tool 1.2.1.5.zip">Ezikey_Admin_Tool_1_2_1_5</a></div>
                                        <div class="col-xs-3 text-right no-padding">23/06/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219431"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.5</a>
                                            </li>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110728"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.6</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_5/Release Notes/Ezikey Admin Tool 1.2.1.5.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_5/UserMannual/EziKey Admin Tool 1.2.1.5.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/App/Ezikey Admin Tool  1.2.1.6.zip">Ezikey_Admin_Tool_1_2_1_6</a></div>
                                        <div class="col-xs-3 text-right no-padding">05/03/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110728"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.6</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/Sql/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql"><img alt="ezi" src="images/select.svg"> ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/Release Notes/Ezikey Admin Tool 1.2.1.6.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/UserMannual/EziKey Admin Tool 1.2.1.6.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/App/Ezikey Admin Tool V1.2.1.7.zip">Ezikey_Admin_Tool_1_2_1_7</a></div>
                                        <div class="col-xs-3 text-right no-padding">03/04/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110849"><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.7</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/Sql/task 75.sql"><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/Release Notes/Ezikey Admin Tool 1.2.1.7.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/UserMannual/EziKey Admin Tool 1.2.1.7.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div> <!--.comment_mob-->    
                        <!---end mob-res-table-->
                        
                        <!--For Desktop-->
                        <div class="show_mgmt_tools">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/App/EziKeyAdminTool_1.1.2.0.zip'>Ezikey_Admin_Tool_1_1_2_0</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216224'><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_1.1.2.0
                                            </a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/Sql/Task15.sql'><img alt="ezi" src="images/select.svg"> Task15.sql
                                            </a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/Release Notes/Ezikey Admin Tool 1.1.2.0.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_0/UserMannual/EziKey Admin Tool 1.1.2.0.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>14/10/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_1/App/EziKeyAdminTool_1.1.2.1.zip'>Ezikey_Admin_Tool_1_1_2_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_1/Release Notes/Ezikey Admin Tool 1.1.2.1.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_1/UserMannual/EziKey Admin Tool 1.1.2.1.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>24/10/2013</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_2/App/EziKeyAdminTool_1.1.2.2.zip'>Ezikey_Admin_Tool_1_1_2_2</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_2/Release Notes/Ezikey Admin Tool 1.1.2.2.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_2/UserMannual/EziKey Admin Tool 1.1.2.2.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>07/11/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_3/App/EziKeyAdminTool_1.1.2.3.zip'>Ezikey_Admin_Tool_1_1_2_3</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_3/Release Notes/Ezikey Admin Tool 1.1.2.3.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_3/UserMannual/EziKey Admin Tool 1.1.2.3.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>14/11/2013</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/App/Ezikey Admin Tool 1.1.2.4.zip'>Ezikey_Admin_Tool_1_1_2_4</a>
                                            <br/>
                                        </td>
                                        <td>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/Sql/18_ezikey admin tool Release SQL.sql'><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                            <br/>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216229#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217997'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.4</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/Release Notes/Ezikey Admin Tool 1.1.2.4.txt' <img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_4/UserMannual/EziKey Admin Tool 1.1.2.4.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>25/03/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_5/App/Ezikey Admin Tool 1.1.2.5.zip'>Ezikey_Admin_Tool_1_1_2_5</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219429'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.5</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_5/Release Notes/Ezikey Admin Tool 1.1.2.5.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_5/UserMannual/EziKey Admin Tool 1.1.2.5.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>23/06/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_6/App/Ezikey Admin Tool  V1.1.2.6.zip'>Ezikey_Admin_Tool_1_1_2_6</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110730'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.6</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_6/Sql/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql'><img alt="ezi" src="images/select.svg"> ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_6/Release Notes/Ezikey Admin Tool 1.1.2.6.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_6/UserMannual/EziKey Admin Tool 1.1.2.6.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>05/03/2015</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/App/Ezikey Admin Tool V1.1.2.7.zip'>Ezikey_Admin_Tool_1_1_2_7</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110848'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty no 578 1.1.2.7</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/Sql/task 75.sql'><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/Release Notes/Ezikey Admin Tool 1.1.2.7.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_1_2_7/UserMannual/EziKey Admin Tool 1.1.2.7.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>03/04/2015</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/App/EziKeyAdminTool_1.2.1.0.zip'>Ezikey_Admin_Tool_1_2_1_0</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://skydrive.live.com/?qt=shared#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%216225'><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_has578_1.2.1.0</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/Sql/Task15.sql'><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/Release Notes/Ezikey Admin Tool 1.2.1.0.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_0/UserMannual/EziKey Admin Tool 1.2.1.0.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>14/10/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_1/App/EziKeyAdminTool_1.2.1.1.zip'>Ezikey_Admin_Tool_1_2_1_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_1/Release Notes/Ezikey Admin Tool 1.2.1.1.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_1/UserMannual/EziKey Admin Tool 1.2.1.1.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>24/10/2013</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_2/App/EziKeyAdminTool_1.2.1.2.zip'>Ezikey_Admin_Tool_1_2_1_2</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_2/Release Notes/Ezikey Admin Tool 1.2.1.2.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_2/UserMannual/EziKey Admin Tool 1.2.1.2.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>07/11/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_3/App/EziKeyAdminTool_1.2.1.3.zip'>Ezikey_Admin_Tool_1_2_1_3</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_3/Release Notes/Ezikey Admin Tool 1.2.1.3.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_3/UserMannual/EziKey Admin Tool 1.2.1.3.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>14/11/2013</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/App/Ezikey Admin Tool 1.2.1.4.zip'>Ezikey_Admin_Tool_1_2_1_4</a>
                                            <br/>
                                            <td>
                                                <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/Sql/18_ezikey admin tool Release SQL.sql'><img alt="ezi" src="images/select.svg"> 18_ezikey admin tool Release SQL.sql</a>
                                                <br/>
                                                <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217997#cid=7A50AB693C5268A9&id=7A50AB693C5268A9%217998'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.4</a>
                                                <br/>
                                            </td>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/Release Notes/Ezikey Admin Tool 1.2.1.4.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_4/UserMannual/EziKey Admin Tool 1.2.1.4.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>25/03/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_5/App/Ezikey Admin Tool 1.2.1.5.zip'>Ezikey_Admin_Tool_1_2_1_5</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%219431'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.5</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_5/Release Notes/Ezikey Admin Tool 1.2.1.5.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_5/UserMannual/EziKey Admin Tool 1.2.1.5.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>23/06/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/App/Ezikey Admin Tool  1.2.1.6.zip'>Ezikey_Admin_Tool_1_2_1_6</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7A50AB693C5268A9%2110728'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.6</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/Sql/ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql'><img alt="ezi" src="images/select.svg"> ezikey admin tool Release SQL(task 24 25&31 ) - Release V1.0.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/Release Notes/Ezikey Admin Tool 1.2.1.6.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_6/UserMannual/EziKey Admin Tool 1.2.1.6.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>05/03/2015</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/App/Ezikey Admin Tool V1.2.1.7.zip'>Ezikey_Admin_Tool_1_2_1_7</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='https://onedrive.live.com/?cid=7A50AB693C5268A9&id=7a50ab693c5268a9%2110849'><img alt="ezi" src="images/select.svg"> EziKey Admin Empty has 578 1.2.1.7</a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/Sql/task 75.sql'><img alt="ezi" src="images/select.svg"> task 75.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/Release Notes/Ezikey Admin Tool 1.2.1.7.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Management/Ezikey_Admin_Tool_1_2_1_7/UserMannual/EziKey Admin Tool 1.2.1.7.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>03/04/2015</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!--.comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>EziKey Report Service</h4>
                            </div>
                        </div>
                        
                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/App/KeyReportService_1.0.4.0.zip">EziKey Report Service_1_0_4_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">14/10/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/Sql/Task15.sql"><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/Release Notes/Ezikey Report Service 1.0.4.0.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/UserMannual/Report Service.docx"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_5_0/App/EziKeyReportService_1.0.5.0.zip">EziKey Report Service_1_0_5_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">15/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_5_0/Release Notes/Ezikey Report Service 1.0.5.0.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_5_0/UserMannual/Report Service.docx"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div><!--comment_mob-->    
                        <!---end mob-res-table-->

                        <div class="show_report_service">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/App/KeyReportService_1.0.4.0.zip'>EziKey Report Service_1_0_4_0</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/Sql/Task15.sql'><img alt="ezi" src="images/select.svg"> Task15.sql
                                            </a>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/Release Notes/Ezikey Report Service 1.0.4.0.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_4_0/UserMannual/Report Service.docx'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>14/10/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_5_0/App/EziKeyReportService_1.0.5.0.zip'>EziKey Report Service_1_0_5_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_5_0/Release Notes/Ezikey Report Service 1.0.5.0.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Report_Service/EziKey Report Service_1_0_5_0/UserMannual/Report Service.docx'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>15/11/2013</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!--.comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>EziKey Schedule Service</h4>
                            </div>
                        </div>

                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_4/App/EziKeyScheduleService_1.0.1.4.zip">EziKey_Schedule_Service_1_0_1_4</a></div>
                                        <div class="col-xs-3 text-right no-padding">25/09/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_4/Release Notes/Ezikey Schedule Service 1.0.1.4.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_5/App/Ezikey Schedule Service 1.0.1.5.zip">EziKey_Schedule_Service_1_0_1_5</a></div>
                                        <div class="col-xs-3 text-right no-padding">23/06/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_5/Release Notes/Ezikey Schedul Service 1.0.1.5.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_6/App/Ezikey Schedule Service  V1.0.1.6.zip">EziKey_Schedule_Service_1_0_1_6</a></div>
                                        <div class="col-xs-3 text-right no-padding">05/03/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_6/Release Notes/Ezikey Schedul Service 1.0.1.6.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_7/App/Ezikey Schedule Service V1.0.1.7.zip">EziKey_Schedule_Service_1_0_1_7</a></div>
                                        <div class="col-xs-3 text-right no-padding">08/06/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_7/Release Notes/Ezikey Schedul Service 1.0.1.7.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_8/App/Ezikey Schedule Service Test V1.0.1.8.zip">EziKey_Schedule_Service_1_0_1_8</a></div>
                                        <div class="col-xs-3 text-right no-padding">28/08/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_8/Release Notes/Ezikey Schedul Service 1.0.1.8.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/App/Ezikey Schedule Service Test V1.0.1.9.zip">EziKey_Schedule_Service_1_0_1_9</a></div>
                                        <div class="col-xs-3 text-right no-padding">28/08/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href=""><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div>    
                        <!---end mob-res-table-->

                        <div class="show_schedule_service">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_4/App/EziKeyScheduleService_1.0.1.4.zip'>EziKey_Schedule_Service_1_0_1_4</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_4/Release Notes/Ezikey Schedule Service 1.0.1.4.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>25/09/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_5/App/Ezikey Schedule Service 1.0.1.5.zip'>EziKey_Schedule_Service_1_0_1_5</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_5/Release Notes/Ezikey Schedul Service 1.0.1.5.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>23/06/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_6/App/Ezikey Schedule Service  V1.0.1.6.zip'>EziKey_Schedule_Service_1_0_1_6</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_6/Release Notes/Ezikey Schedul Service 1.0.1.6.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>05/03/2015</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_7/App/Ezikey Schedule Service V1.0.1.7.zip'>EziKey_Schedule_Service_1_0_1_7</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_7/Release Notes/Ezikey Schedul Service 1.0.1.7.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>08/06/2015</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_8/App/Ezikey Schedule Service Test V1.0.1.8.zip'>EziKey_Schedule_Service_1_0_1_8</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_8/Release Notes/Ezikey Schedul Service 1.0.1.8.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>28/08/2015</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/App/Ezikey Schedule Service Test V1.0.1.9.zip'>EziKey_Schedule_Service_1_0_1_9</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>28/08/2015</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!--comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>Webfleet KeyBox Sync</h4>
                            </div>
                        </div>
                        
                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_6_2/App/WebfleetKeyBoxSync_1_2_6_2.zip">WebfleetKeyBoxSync_1_2_6_2</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_6_2/Release Notes/Release Note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href=""><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_0/App/Webfleet Key Box Sync 1.2.7.0.zip">WebfleetKeyBoxSync_1_2_7_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">28/06/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href=""><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_1/App/WebfleetKeyBoxSync_1_2_7_1.zip">WebfleetKeyBoxSync_1_2_7_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_1/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href=""><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_0_0/Release Notes/release note.txt">WebfleetKeyBoxSync_1_3_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_0_0/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href=""><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_1_0/App/WebfleetKeyBoxSync Release V1.3.1.0.zip">WebfleetKeyBoxSync_1_3_1_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">03/03/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_1_0/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_4_0_1/App/WebfleetKeyBoxSync Release V1.4.0.1.zip">WebfleetKeyBoxSync_1_4_0_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">18/04/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_4_0_1/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_5_0_0/App/WebfleetKeyBoxSync TestV1.5.0.0-06131422.zip">WebfleetKeyBoxSync_1_5_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">20/06/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_5_0_0/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_6_0_0/App/WebfleetKeyBoxSync TestV1.6.0.0-07241049.zip">WebfleetKeyBoxSync_1_6_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">29/07/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_6_0_0/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->
                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_0/App/WebfleetKeyBoxSync V1.8.0.0-10291551.zip">WebfleetKeyBoxSync_1_8_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">07/11/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_0/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_1/App/WebfleetKeyBoxSync V1.8.0.1-11191334.zip">WebfleetKeyBoxSync_1_8_0_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">19/11/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_1/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_3/App/WebfleetKeyBoxSync V1.8.0.3-03201237.zip">WebfleetKeyBoxSync_1_8_0_3</a></div>
                                        <div class="col-xs-3 text-right no-padding">20/03/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_3/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_4/App/WebfleetKeyBoxSync V1.8.0.4-03311541.zip">WebfleetKeyBoxSync_1_8_0_4</a></div>
                                        <div class="col-xs-3 text-right no-padding">01/04/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_4/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_5/App/WebfleetKeyBoxSync V1.8.0.5-05051115.zip">WebfleetKeyBoxSync_1_8_0_5</a></div>
                                        <div class="col-xs-3 text-right no-padding">11/05/2015</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_5/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Schedule_Service/EziKey_Schedule_Service_1_0_1_9/Release Notes/Ezikey Schedul Service 1.0.1.9.txt"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <!--mobile-res-tab-->
                        </div> <!--comment_mob-->    
                        <!---end mob-res-table-->

                        <div class="show_webfleet_keybox_sync">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_6_2/App/WebfleetKeyBoxSync_1_2_6_2.zip'>WebfleetKeyBoxSync_1_2_6_2</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_6_2/Release Notes/Release Note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_0/App/Webfleet Key Box Sync 1.2.7.0.zip'>WebfleetKeyBoxSync_1_2_7_0</a>
                                           <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>28/06/2013</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_1/App/WebfleetKeyBoxSync_1_2_7_1.zip'>WebfleetKeyBoxSync_1_2_7_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_2_7_1/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_0_0/App/WebfleetKeyBoxSync_1.3.0.0.zip'>WebfleetKeyBoxSync_1_3_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_0_0/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_1_0/App/WebfleetKeyBoxSync Release V1.3.1.0.zip'>WebfleetKeyBoxSync_1_3_1_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_3_1_0/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>03/03/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_4_0_1/App/WebfleetKeyBoxSync Release V1.4.0.1.zip'>WebfleetKeyBoxSync_1_4_0_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_4_0_1/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>18/04/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_5_0_0/App/WebfleetKeyBoxSync TestV1.5.0.0-06131422.zip'>WebfleetKeyBoxSync_1_5_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_5_0_0/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>20/06/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_6_0_0/App/WebfleetKeyBoxSync TestV1.6.0.0-07241049.zip'>WebfleetKeyBoxSync_1_6_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_6_0_0/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>29/07/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_0/App/WebfleetKeyBoxSync V1.8.0.0-10291551.zip'>WebfleetKeyBoxSync_1_8_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_0/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>07/11/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_1/App/WebfleetKeyBoxSync V1.8.0.1-11191334.zip'>WebfleetKeyBoxSync_1_8_0_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_1/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>19/11/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_3/App/WebfleetKeyBoxSync V1.8.0.3-03201237.zip'>WebfleetKeyBoxSync_1_8_0_3</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_3/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>20/03/2015</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_4/App/WebfleetKeyBoxSync V1.8.0.4-03311541.zip'>WebfleetKeyBoxSync_1_8_0_4</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_4/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>01/04/2015</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_5/App/WebfleetKeyBoxSync V1.8.0.5-05051115.zip'>WebfleetKeyBoxSync_1_8_0_5</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/fleetKeyBoxSync/WebfleetKeyBoxSync_1_8_0_5/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>11/05/2015</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!--comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>Webfleet KeyBox</h4>
                            </div>
                        </div>
                        
                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_1/App/WebfleetKeyBox_1_2_6_1.zip">WebfleetKeyBox_1_2_6_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <!--                                         <li>
                                                <a href="#"><img alt="ezi" src="images/select.svg"> EziKey_Empty_Admin_1.1.2.0 </a>
                                            </li>
                                            <li>
                                                <a href="#"><img alt="ezi" src="images/select.svg"> Task15.sql</a>
                                            </li> -->
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_1/Release Notes/Release Note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href=""><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_2 BETA/App/WebfleetKeyBox 1.2.6.2 BETA.zip">WebfleetKeyBox_1_2_6_2 BETA</a></div>
                                        <div class="col-xs-3 text-right no-padding">08/02/2012</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_2 BETA/Release Notes/Release Note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_0/App/Webfleet Key Box 1.2.7.0.zip">WebfleetKeyBox_1_2_7_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">26/07/2012</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_0/Release Notes/Release Note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_1/App/Webfleet Keybox 1.2.7.1.zip">WebfleetKeyBox_1_2_7_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">10/08/2012</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_1/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_3/App/WebfleetKeyBox 1.2.7.3.zip">WebfleetKeyBox_1_2_7_3</a></div>
                                        <div class="col-xs-3 text-right no-padding">27/09/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_3/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_4/App/WebfleetKeyBox_1_2_7_4.zip">WebfleetKeyBox_1_2_7_4</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_4/Release Notes/release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_2_8_0/App/Smart Fleet Key Box 1.2.8.0.zip">Webfleetkeybox_1_2_8_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_2_8_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_0/App/SmartFleetKeyBox_1.3.0.0.zip">Webfleetkeybox_1_3_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_1/App/SmartFleetKeyBox_1.3.0.1.zip">Webfleetkeybox_1_3_0_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_1/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_2/App/Smartfleet Keybox V1.3.0.2.zip">Webfleetkeybox_1_3_0_2</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_2/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_3/App/Smartfleet Keybox V1.3.0.3.zip">Webfleetkeybox_1_3_0_3</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_3/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_1_0/App/Smartfleet Keybox Release V1.3.1.0.zip">Webfleetkeybox_1_3_1_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">03/03/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_1_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_4_0_1/App/Smartfleet Keybox Release V1.4.0.1.zip">Webfleetkeybox_1_4_0_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">18/04/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_4_0_1/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_5_0_0/App/Smartfleet Keybox TestV1.5.0.0-06161444.zip">Webfleetkeybox_1_5_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">20/06/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_5_0_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_0/App/Smartfleet Keybox TestV1.6.0.0-07290946.zip">Webfleetkeybox_1_6_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">29/07/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_1/App/Smartfleet Keybox V1.6.0.1-08051247.zip">Webfleetkeybox_1_6_0_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">21/08/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_1/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_7_0_0/App/Smartfleet Keybox TestV1.7.0.0-09091714.zip">Webfleetkeybox_1_7_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">09/09/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_7_0_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_0/App/Smartfleet Keybox V1.8.0.0-10291552.zip">Webfleetkeybox_1_8_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">07/11/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_0/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_1/App/Smartfleet Keybox V1.8.0.1-11191334.zip">Webfleetkeybox_1_8_0_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">19/11/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_1/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_2/App/Smartfleet Keybox V1.8.0.2-12181541.zip">Webfleetkeybox_1_8_0_2</a></div>
                                        <div class="col-xs-3 text-right no-padding">19/12/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_2/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_3/App/Smartfleet Keybox V1.8.0.3-20160509.zip">Webfleetkeybox_1_8_0_3</a></div>
                                        <div class="col-xs-3 text-right no-padding">09/05/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_3/Release Notes/Release note.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div> <!--Comment_mob-->    
                        <!---end mob-res-table-->

                        <div class='show_webfleet_keybox'>
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_1/App/WebfleetKeyBox_1_2_6_1.zip'>WebfleetKeyBox_1_2_6_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_1/Release Notes/Release Note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_2 BETA/App/WebfleetKeyBox 1.2.6.2 BETA.zip'>WebfleetKeyBox_1_2_6_2 BETA</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_6_2 BETA/Release Notes/Release Note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>08/02/2012</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_0/App/Webfleet Key Box 1.2.7.0.zip'>WebfleetKeyBox_1_2_7_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_0/Release Notes/Release Note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>26/07/2012</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_1/App/Webfleet Keybox 1.2.7.1.zip'>WebfleetKeyBox_1_2_7_1</a>
                                            <br/>
                                        </td>

                                        <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_1/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <td>&nbsp;</td>
                                            <td>10/08/2012</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_3/App/WebfleetKeyBox 1.2.7.3.zip'>WebfleetKeyBox_1_2_7_3</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_3/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>27/09/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_4/App/WebfleetKeyBox_1_2_7_4.zip'>WebfleetKeyBox_1_2_7_4</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/WebfleetKeyBox_1_2_7_4/Release Notes/release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_2_8_0/App/Smart Fleet Key Box 1.2.8.0.zip'>Webfleetkeybox_1_2_8_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_2_8_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_0/App/SmartFleetKeyBox_1.3.0.0.zip'>Webfleetkeybox_1_3_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_1/App/SmartFleetKeyBox_1.3.0.1.zip'>Webfleetkeybox_1_3_0_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_1/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_2/App/Smartfleet Keybox V1.3.0.2.zip'>Webfleetkeybox_1_3_0_2</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_2/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_3/App/Smartfleet Keybox V1.3.0.3.zip'>Webfleetkeybox_1_3_0_3</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_0_3/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_1_0/App/Smartfleet Keybox Release V1.3.1.0.zip'>Webfleetkeybox_1_3_1_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_3_1_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>03/03/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_4_0_1/App/Smartfleet Keybox Release V1.4.0.1.zip'>Webfleetkeybox_1_4_0_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_4_0_1/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>18/04/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_5_0_0/App/Smartfleet Keybox TestV1.5.0.0-06161444.zip'>Webfleetkeybox_1_5_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_5_0_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>20/06/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_0/App/Smartfleet Keybox TestV1.6.0.0-07290946.zip'>Webfleetkeybox_1_6_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>29/07/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_1/App/Smartfleet Keybox V1.6.0.1-08051247.zip'>Webfleetkeybox_1_6_0_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_6_0_1/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>21/08/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_7_0_0/App/Smartfleet Keybox TestV1.7.0.0-09091714.zip'>Webfleetkeybox_1_7_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_7_0_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>09/09/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_0/App/Smartfleet Keybox V1.8.0.0-10291552.zip'>Webfleetkeybox_1_8_0_0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_0/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>07/11/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_1/App/Smartfleet Keybox V1.8.0.1-11191334.zip'>Webfleetkeybox_1_8_0_1</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_1/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>19/11/2014</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_2/App/Smartfleet Keybox V1.8.0.2-12181541.zip'>Webfleetkeybox_1_8_0_2</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_2/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>19/12/2014</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_3/App/Smartfleet Keybox V1.8.0.3-20160509.zip'>Webfleetkeybox_1_8_0_3</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Webfleet Key Box/WebfleetKeyBox/Webfleetkeybox_1_8_0_3/Release Notes/Release note.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>09/05/2016</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!--.comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>Property Key Admin Tool</h4>
                            </div>
                        </div>
                        
                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.0.0/App/Property Key Admin Tool 1.0.0.0.zip">Property Key Admin Tool 1.0.0.0</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <!-- <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul> -->
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.1.0/App/PropertyAdminTool 1.0.1.0.zip">Property Key Admin Tool 1.0.1.0</a></div>
                                        <div class="col-xs-3 text-right no-padding">24/09/2012</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.1.0/Sql/552.sql"><img alt="ezi" src="images/select.svg"> 552.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.1.0/Release Notes/Property Key Admin Tool1.0.1.0-note.xlsx"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.1.0/UserMannual/Property Key Admin Tool 1.0.1.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div> <!--comment_mob-->    
                        <!---end mob-res-table-->

                        <div class="show_property_key_admin_tool">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.0.0/App/Property Key Admin Tool 1.0.0.0.zip">Property Key Admin Tool 1.0.0.0</a></td>
                                        <td>
                                            <img src="images/select.svg" alt="ezi" /><a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.1.0/Sql/552.sql">552.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_0(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.0.txt"><img src="images/notes.svg" alt="ezi" /></a>
                                            </i>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_0(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.0.pdf"><img src="images/pdf.svg" alt="ezi" /></a>
                                        </td>
                                        <td>00/00/0000</td>
                                    </tr>
                                    <tr class="info">
                                        <td><a href="/EZIKEY TOOLS/Property Key/Property Key Admin Tool/Property Key Admin Tool 1.0.1.0/App/PropertyAdminTool 1.0.1.0.zip">Property Key Admin Tool 1.0.1.0</a>
                                            <br/>

                                        </td>
                                        <td>

                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_1(For Windows 7 Professional SP1 32 bit)/Release Notes/Ezikey Touch Application 1.2.3.1.txt"><img src="images/notes.svg" alt="ezi" /></a>
                                            </i>
                                        </td>
                                        <td class="text-center">
                                            <a href="/EZIKEY TOOLS/EziKey/EziKey_Touch/EziKey_Touch_Application_1_2_3_1(For Windows 7 Professional SP1 32 bit)/UserMannual/Ezikey Touch Application 1.2.3.1.pdf"><img src="images/pdf.svg" alt="ezi" /></a>
                                        </td>
                                        <td>06/11/2013</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div> <!--comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>Property Key Management</h4>
                            </div>
                        </div>
                        
                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.0.0/App/Property Key Management 1.0.0.0.zip">Property Key Management 1.0.0.0</a></div>
                                        <div class="col-xs-3 text-right no-padding">00/00/0000</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.0.0/Release Notes/Readme.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <!-- <li class="box" role="">
                                                <a href="#"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li> -->

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/App/Property Key Management 1.0.1.0.zip">Property Key Management 1.0.1.0</a></div>
                                        <div class="col-xs-3 text-right no-padding">24/09/2012</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/Sql/552.sql"><img alt="ezi" src="images/select.svg"> 552.sql</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/Release Notes/Property Key Management1.0.1.0-note.xlsx"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/UserMannual/Property Key Management 1.0.1.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.1.0.0/App/Property Key Management 1.1.0.0.zip">Property Key Management 1.1.0.0(For Windows 7 Professional SP1 32 bit)</a></div>
                                        <div class="col-xs-3 text-right no-padding">13/03/2014</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.1.0.0/Release Notes/Property Key Management 1.1.0.0.txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.1.0.0/UserMannual/Property Key Management 1.1.0.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div> <!--.comment_mob-->    
                        <!---end mob-res-table-->

                        <div class="show_property_key_mgmt">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.0.0/App/Property Key Management 1.0.0.0.zip'>Property Key Management 1.0.0.0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.0.0/Release Notes/Readme.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td>&nbsp;</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/App/Property Key Management 1.0.1.0.zip'>Property Key Management 1.0.1.0</a>
                                            <br/>
                                        </td>

                                        <td>
                                            <a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/Sql/552.sql'><img alt="ezi" src="images/select.svg"> 552.sql</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/Release Notes/Property Key Management1.0.1.0-note.xlsx'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.0.1.0/UserMannual/Property Key Management 1.0.1.0.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>24/9/2012</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.1.0.0/App/Property Key Management 1.1.0.0.zip'>Property Key Management 1.1.0.0</a>
                                            <br/>
                                        </td>

                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.1.0.0/Release Notes/Property Key Management 1.1.0.0.txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/Property Key/Property Key Management/Property Key Management 1.1.0.0/UserMannual/Property Key Management 1.1.0.0.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>13/03/2014</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!--comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="last_section">
        <div class="container container_table">
            <div class="row">
                <div class="col-xs-12">
                    <div class="table-responsive">
                        <div class="ezi-touch">
                            <div class="col-lg-6 col-md-6 col-sm-2 col-xs-12 no-padding-left">
                                <h4>EziKey Web Admin Tool</h4>
                            </div>
                        </div>
                        
                        <!--mob-res-table-->
                        <div class="comment_mob">
                            <div class="mobile-res-tab">
                                <div class="row topic-bg">
                                    <div class="col-xs-8 link-ver no-padding">Version</div>
                                    <div class="col-xs-3 text-right no-padding">Release Date</div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/App/Ezikey-Web Admin System 1.0.0.0.zip">EziKey_Web_Admin_Tool_1_0_0_0</a></div>
                                        <div class="col-xs-3 text-right no-padding">01/08/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Sql/607.sql"><img alt="ezi" src="images/select.svg"> 607.sql</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Sql/Web-EzikeyEmpty_1.3.0.3.zip"><img alt="ezi" src="images/select.svg"> Web-EzikeyEmpty_1.3.0.3.zip</a>
                                            </li>
                                            <li>
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Sql/Web-EzikeyEmpty_has578_1.3.0.3.zip"><img alt="ezi" src="images/select.svg"> Web-EzikeyEmpty_has578_1.3.0.3.zip</a>
                                            </li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Release Notes/EziKey Admin Tool .txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/UserMannual/Ezikey-Web Admin Tool_1.0.0.0.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_1/App/EziKey_Web_Admin_Tool_1_0_0_1.zip">EziKey_Web_Admin_Tool_1_0_0_1</a></div>
                                        <div class="col-xs-3 text-right no-padding">12/08/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_1/Release Notes/EziKey Admin Tool_1.0.0.1 .txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_1/UserMannual/Ezikey-Web Admin Tool_1.0.0.1.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                                <div class="ezi-touch">
                                    <div class="row">
                                        <div class="col-xs-8 link-ver no-padding"><a href="#">EziKey_Web_Admin_Tool_1_0_0_2</a></div>
                                        <div class="col-xs-3 text-right no-padding">15/11/2013</div>
                                    </div>

                                    <div class="sql">
                                        <h4>Sql</h4>
                                        <ul>
                                            <li>-</li>
                                        </ul>
                                        <ul role="tablist" class="nav nav-pills">
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_2/Release Notes/EziKey Admin Tool_1.0.0.2 .txt"><img alt="ezi" src="images/notes.svg"> Release Notes</a>
                                            </li>
                                            <li class="box" role="">
                                                <a href="/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_2/UserMannual/Ezikey-Web Admin Tool_1.0.0.2.pdf"><img alt="ezi" src="images/pdf.svg"> User Manual</a>
                                            </li>

                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--mobile-res-tab-->
                        </div> <!--comment_mob-->    
                        <!---end mob-res-table-->

                        <div class="show_web_admin_tool">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="width:35%">Version</th>
                                        <th style="width:35%">Sql</th>
                                        <th class="release_notes">Release Notes</th>
                                        <th class="release_notes">User Manual</th>
                                        <th class="release_date">Release Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/App/Ezikey-Web Admin System 1.0.0.0.zip'>EziKey_Web_Admin_Tool_1_0_0_0</a>
                                            <br/>
                                        </td>
                                        <td>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Sql/607.sql'><img alt="ezi" src="images/select.svg"> 607.sql
                                            </a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Sql/Web-EzikeyEmpty_1.3.0.3.zip'><img alt="ezi" src="images/select.svg"> Web-EzikeyEmpty_1.3.0.3.zip
                                            </a>
                                            <br/>
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Sql/Web-EzikeyEmpty_has578_1.3.0.3.zip'><img alt="ezi" src="images/select.svg"> Web-EzikeyEmpty_has578_1.3.0.3.zip</a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/Release Notes/EziKey Admin Tool .txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_0/UserMannual/Ezikey-Web Admin Tool_1.0.0.0.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>01/08/2013</td>
                                    </tr>
                                    <tr style="background-color:White;">
                                        <td><a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_1/App/EziKey_Web_Admin_Tool_1_0_0_1.zip'>EziKey_Web_Admin_Tool_1_0_0_1</a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_1/Release Notes/EziKey Admin Tool_1.0.0.1 .txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_1/UserMannual/Ezikey-Web Admin Tool_1.0.0.1.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>12/08/2013</td>
                                    </tr>
                                    <tr style="background-color:#EFF3FB;">
                                        <td><a href='#'>EziKey_Web_Admin_Tool_1_0_0_2</a>
                                            <br/>
                                        </td>
                                        <td>&nbsp;</td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_2/Release Notes/EziKey Admin Tool_1.0.0.2 .txt'><img alt="ezi" src="images/notes.svg"></a>
                                            <br/>
                                        </td>
                                        <td class="text-center">
                                            <a href='/EZIKEY TOOLS/EziKey/EziKey_Web_Admin_Tool/EziKey_Web_Admin_Tool_1_0_0_2/UserMannual/Ezikey-Web Admin Tool_1.0.0.2.pdf'><img alt="ezi" src="images/pdf.svg"></a>
                                            <br/>
                                        </td>
                                        <td>15/11/2013</td>
                                    </tr>

                                </tbody>
                            </table>
                        </div> <!--comment-->    
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.1/js/bootstrap.min.js"></script>
    <script src="js/jquery.shorten.js" type="text/javascript"></script>
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

    // Logout the user.
    function IdleTimeout() {
        window.location = logoutUrl;
    }

    //Shorten jquery plugin
    $(document).ready(function() {
    
        $(".show_touchsystem").shorten({

            "showChars" : 2060,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });
        
        $(".show_mgmt_tools").shorten({

            "showChars" : 2065,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });

        $(".show_report_service").shorten({

            "showChars" : 2055,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });

        $(".show_schedule_service").shorten({

            "showChars" : 1687,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });

        $(".show_webfleet_keybox_sync").shorten({

            "showChars" : 1500,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });

        $(".show_webfleet_keybox").shorten({

            "showChars" : 1500,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });
        

        $(".show_property_key_admin_tool").shorten({

            "showChars" : 2055,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });

        $(".show_property_key_mgmt").shorten({

            "showChars" : 1550,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });

        $(".show_web_admin_tool").shorten({

            "showChars" : 2200,
            "moreText"  : "Show more",
            "lessText"  : "Show less",
            
        });
        
        //for mobile
        $(".comment_mob").shorten({

            "showChars" : 2000,
            "moreText"  : "Show more",
            "lessText"  : "Show less",

        });
    
    });

    </script>

</body>
</html>