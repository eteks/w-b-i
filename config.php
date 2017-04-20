<?php
// In server
// define('DB_SERVER','mysql1110.ixwebhosting.com');
// define('DB_USERNAME','BBBmcmf_webezi');
// define('DB_PASSWORD','Webezi_123');
// define('DB_NAME', 'BBBmcmf_webezi');

// In local
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME', 'ezikey');

$con = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
?>
