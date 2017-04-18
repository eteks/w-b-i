<?php
include("config.php");
if($_POST) {
	$user_id = $_POST['user'];
	$sql = mysql_query("SELECT * FROM ezikey_users WHERE user_id = '$user_id'");
    $array = mysql_fetch_array($sql);
    if($array['user_status'] == 0 && $array['user_approval_status'] == 0) {
    	echo "false";
    }
    else {
    	echo "true";
    }
}
else {
    echo "false";
}

?>