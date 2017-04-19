<?php
	include('config.php');
	date_default_timezone_set('Asia/Kolkata');
	if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
		$data = json_decode(file_get_contents('php://input'), true);
		// Approved
		if(!empty($data) && !empty($data['content']) && strtolower($data['content']) == "approved") {
			$messageid = $data['messageId'];
			$ack = date('Y-m-d',strtotime($data['acknowledgedTimestamp']));
			$current_dt = date('Y-m-d H:i:s');

			mysql_query("UPDATE ezikey_users SET user_approval_status='1',user_approval_date='$current_dt' WHERE message_id='$messageid'") or die(mysql_error());
		}
		// Not approved
		else if(!empty($data)) {
			$messageid = $data['messageId'];
			$ack = date('Y-m-d',strtotime($data['acknowledgedTimestamp']));
			$current_dt = date('Y-m-d H:i:s');

			mysql_query("UPDATE ezikey_users SET user_approval_status='2',user_approval_date='$current_dt' WHERE message_id='$messageid'") or die(mysql_error());
		}
	}
?>
