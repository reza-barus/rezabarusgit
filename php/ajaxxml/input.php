<?php

mysql_connect('localhost','root','barus87');
mysql_select_db('ajax_demo');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$age = $_POST['age'];
$hometown = $_POST['hometown'];
$job = $_POST['job'];



$sql = mysql_query("insert into user (firstname, lastname, age, hometown,job) values ('$firstname','$lastname','$age','$hometown','$job')");

if($sql)
{
	echo "success";
} else 
{
	echo "failed";
}



//import ke file xml
mysql_connect("localhost", "root", "barus87");
	mysql_select_db("ajax_demo");
	
	$namatabel = "user";
		
	$hasil = mysql_query("select * from $namatabel");
	
	$jmlField = mysql_num_fields($hasil);
	
	$file = fopen("file.xml", "w") or exit ("unable to open this file");
	
	fwrite($file,"<?xml version=\"1.0\" encoding=\"UTF-8\"?>");
	fwrite($file,"<DATA>");
	while ($data=mysql_fetch_array($hasil)){
		fwrite($file, "<". $namatabel . ">");
		echo "<br>";
		for ($i=1; $i<=$jmlField-1; $i++)
		{
			$namaField = mysql_field_name($hasil, $i);
			fwrite($file, "<". $namaField. ">" . $data[$namaField]. "</" . $namaField. ">");
		}
		fwrite($file,"</" . $namatabel. ">");
	}
	fwrite($file, "</DATA>");
	fclose($file);
//import ke file xml


?>
