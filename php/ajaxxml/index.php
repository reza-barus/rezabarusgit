<?

$con = mysql_connect('localhost','root','barus87') or die (mysql_error());
mysql_select_db('ajax_demo');

?>

<html>
<head>
<script type="text/javascript">
function showUser(str)
{
if (str=="")
  {
  document.getElementById("txtHint").innerHTML="";
  return;
  } 
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","getuser.php?q="+str,true);
xmlhttp.send();
}
</script>
</head>
<body>
<a href="forminput.php">Input</a>
<a href="getxmlhtml/http_req.html">Get Xml From HTML</a>
<a href="getxmlphp/">Get Xml Php</a>

<form>
<select name="users" onchange="showUser(this.value)">
<option value="">Select a person:</option>
<?

$tampil = mysql_query("select * from user order by id") or die (mysql_error());
while($r=mysql_fetch_array($tampil)){
	echo "<option value=$r[id]>$r[firstname]</option>";
}

echo "</selected>";

?>

</select>
</form>
<br />
<div id="txtHint"><b>Person info will be listed here.</b></div>

</body>
</html>
