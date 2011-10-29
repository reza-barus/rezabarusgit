<?php

include "config/konekdb.php";
mysql_select_db("xmltester");

$nama = $_POST['nama'];
$description = $_POST['description'];

$input = mysql_query("insert into data_dua(name, description) values('$nama','$description')");

if($input){
	echo "<META HTTP-EQUIV=Refresh CONTENT='3; URL=form_index.php'>";
}
else {
	echo "input something";
}

?>