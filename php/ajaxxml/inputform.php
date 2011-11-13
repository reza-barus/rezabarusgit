<?php

mysql_connect('localhost','root','barus87');
mysql_select_db('ajax_demo');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$hometown = $_POST['hometown'];
$job = $_POST['job'];

print_r mysql_error();

$sql = mysql_query("insert into user (firstname, lastname,age,hometown,job) values('$firstname','$lastname','$age','$hometown','$job')");

if($sql)
{
	echo "success";
} else 
{
	echo "failed";
}
?>
