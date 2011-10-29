<?php

mysql_connect("localhost", "root", "barus87");
mysql_select_db("xmltester");

$namaTabel = "data_dua";

$spase = "------------------------";


header('Content-Type: text/xml');

$query = "SELECT * FROM $namaTabel";
$hasil = mysql_query($query);
$jumField = mysql_num_fields($hasil);

echo "<?xml version='1.0'?>";
echo "<data>";
while ($data = mysql_fetch_array($hasil))
{
   echo "<" .$namaTabel . ">";
   for ($i=0; $i<=$jumField-1; $i++)
   {
      $namaField = mysql_field_name($hasil, $i);
      echo "<".$namaField.">".$data[$namaField]."</".$namaField.">";
   }
   echo "</" .$namaTabel . ">";
}
echo "</data>";
?>