<?php

include "config/konekdb.php";
mysql_select_db("xmltester");

$nama = $_POST['nama'];
$description = $_POST['description'];
$status = $_POST['status'];

$input = mysql_query("insert into data_dua(name, status, description) values('$nama','$status','$description')");

if($input){
	echo "<META HTTP-EQUIV=Refresh CONTENT='3; URL=data.php'>";
}
else {
	echo "input something";
}


//import ke file xml
mysql_connect("localhost", "root", "barus87");
	mysql_select_db("xmltester");
	
	$namatabel = "data_dua";
		
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