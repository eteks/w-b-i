<?php
// In server
// define('DB_SERVER','mysql1110.ixwebhosting.com');
// define('DB_USERNAME','BBBmcmf_ezikey');
// define('DB_PASSWORD','Ezi_123');
// define('DB_NAME', 'BBBmcmf_ezikey');

// In local
define('DB_SERVER','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','root');
define('DB_NAME', 'ezikey');

$con = mysql_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD) or die(mysql_error());
mysql_select_db(DB_NAME);
?>