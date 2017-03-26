<?php
	include('config.php');
	date_default_timezone_set('Asia/Kolkata');
	if(strcasecmp($_SERVER['REQUEST_METHOD'], 'POST') == 0){
		$data = json_decode($_GET['inspect'],true);
		if(!empty($data)) {
			$messageid = $data['messageId'];
			$ack = date('Y-m-d',strtotime($data['acknowledgedTimestamp']));
			$current_dt = date('Y-m-d H:i:s');
			$message = "You request is approved. Now, you can login with our site.";

			$already = mysql_query("SELECT * FROM ezikey_users WHERE message_id = '$messageid'") or die(mysql_error());
			$already_count = mysql_num_rows($already);
			if($already_count == 1) {
				$user_array = mysql_fetch_array($already);
				mysql_query("UPDATE ezikey_users SET user_status = '1',user_approval_date='$current_dt' WHERE message_id='$messageid'") or die(mysql_error());
				$telstra_key = "E51D0ffqeZAKnGZ3awgM7oygDoqtveva";
    			$telstra_secret = "eHZSNaXlLUHmR0MD";
    	        $url = "https://api.telstra.com/v1/oauth/token?client_id=" . $telstra_key . "&client_secret=" . $telstra_secret . "&grant_type=client_credentials&scope=SMS";
		        $ch = curl_init($url);
		        curl_setopt($ch, CURLOPT_HEADER, 0);
		        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		        $response = curl_exec($ch);
		        curl_close($ch);
		        $token = json_decode($response, true);
		        if (!empty($token['access_token'])) {
		        	$url = "https://api.telstra.com/v1/sms/messages";
            		$ch = curl_init($url);
            		$headers = array('Authorization: Bearer ' . $token['access_token']);
            		$msg = array('to' => $user_array['user_name'], 'body' => $message);
            		curl_setopt($ch, CURLOPT_HEADER, 0);
            		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($msg));
            		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
            		$response = curl_exec($ch);
            		curl_close($ch);
            	}
			}
		}
	}
?>