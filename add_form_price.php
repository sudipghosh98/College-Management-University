<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>

<?php
require("connection.php");
$code=$_POST["code"];
$price=$_POST["price"];


$q="insert into FORM_PRICE values('".$code."',".$price.")";
$n=mysql_query($q);
if(!$n){
echo "<h1>Record insertion failed</h1>";
}
else{
	
	header("Refresh:1;URL=insert_cutoff.php");
}
mysql_close($con);
?>
</center>

<body bgcolor="#CCCCCC" text="#FF0000" >  
</body>
</html>