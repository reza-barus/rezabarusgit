<?php
    
	$hosting = 'localhost';
	$user = 'root';
	$pass = 'barus87';
	$db = 'xmltester';
	
	mysql_connect($hosting, $user, $pass) or die (mysql_error());
	mysql_select_db($db);
	
	
    
?>