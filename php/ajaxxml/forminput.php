<?php
/*
 *      forminput.php
 *      
 *      Copyright 2011 reza <reza@reza-K42JE>
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
	<script type="text/javascript" src="js/jquery-1.3.2.min.js"></script>
	<script type="text/javascript">
	
	$(document).ready(function(){
		$("#save").click(function(){
			var firstname = $("#firstname").val();
			var lastname = $("#lastname").val();
			var age = $("#age").val();
			var hometown = $("#hometown").val();
			var job = $("#job").val();
			
			$.ajax({
				type:"POST",
				url:"input.php",
				
				data : "firstname= " + firstname + "&lastname= " + lastname + "&age= " + age + "&hometown= " + hometown + "&job= " + job,
				success : function(data){
					$("#info").html(data);
					}
				});
			});
		});
	
	</script>
</head>

<body>
<a href="index.php">Back</a>
	
	
	<p><span>First Name</span><input type="text" name="firstname" id="firstname"></p>
	<p><span>Last Name</span><input type="text" name="lastname" id="lastname"></p>
	<p><span>Age</span><input type="text" name="age" id="age"></p>
	<p><span>Hometown</span><input type="text" name="hometown" id="hometown"></p>
	<p><span>Job</span><input type="text" name="job" id="job"></p>
	<p><input type="submit" value="input" id="save"><input type="reset" value="reset"></p>
	
	<div id="info"></div>
</body>

</html>
