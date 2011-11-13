<?php
/*
 *      index.php
 *      
 *      Copyright 2011 root <root@reza-K42JE>
 *      
 *      This program is free software; you can redistribute it and/or modify
 *      it under the terms of the GNU General Public License as published by
 *      the Free Software Foundation; either version 2 of the License, or
 *      (at your option) any later version.
 *      
 *      This program is distributed in the hope that it will be useful,
 *      but WITHOUT ANY WARRANTY; without even the implied warranty of
 *      MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *      GNU General Public License for more details.
 *      
 *      You should have received a copy of the GNU General Public License
 *      along with this program; if not, write to the Free Software
 *      Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston,
 *      MA 02110-1301, USA.
 *      
 *      
 */

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 0.20" />
</head>

<body>
	<table border='1'>
	
	<th>No</th>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Age</th>
	<th>Hometown</th>
	<th>Job</th>
	
	<?php
	
	$dataxml = simplexml_load_file('../file.xml');
	
	$no = 1;
	foreach($dataxml->user as $hasil){
		echo "<tr>";
		echo "<td>". $no . "</td>";
		echo "<td>". $hasil->firstname. "</td>";
		echo "<td>". $hasil->lastname. "</td>";
		echo "<td>". $hasil->age. "</td>";
		echo "<td>". $hasil->hometown. "</td>";
		echo "<td>". $hasil->job. "</td>";
		echo "</tr>";
		$no++;
	}
	?>
	
	<a href="../file.xml">See The Xml </a>
	<a href="../index.php">Index Menu</a>
	</table>
</body>

</html>
