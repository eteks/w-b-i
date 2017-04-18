<?php
include("config.php");
if($_POST) {
	$user_id = $_POST['user'];
	$sql = mysql_query("SELECT * FROM ezikey_users WHERE user_id = '$user_id'");
    $array = mysql_fetch_array($sql);
    if($array['user_approval_status'] == 1) {
    	echo "true";
    }
    else if($array['user_approval_status'] == 2) {
        echo "true";
    }
    else {
    	echo "false";
    }
}
else {
    echo "false";
}


?>