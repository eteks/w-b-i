<?php
include('config.php');
session_start();
 

if(isset($_SESSION['login_status']) && $_SESSION['login_status']==1) {
	$login_username = $_SESSION['user_name'];
    // header("location:login.php");
}
else {
	header("Location: login.php");
}

?>