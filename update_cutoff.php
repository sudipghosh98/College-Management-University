
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
#admsn1{
	width:100%;
	margin-top:200px;
	height:auto;
	border:thick;
	border-color:#336;	
	
}
</style>
<center>
<?php
require("connection.php");
$code=$_POST["code"];
$cat=$_POST["cat"];
$tot=$_POST["tot"];
$best=$_POST["best"];

$q="update CUTOFF_MARKS set CATEGORY='".$cat."'  , SUB_MARKS=".$tot." , BEST_OF_FOUR=".$best." where C_CODE='".$code."'";
$n=mysql_query($q);
if(!$n){
	die(mysql_error());
echo "<h1>Record updation failed</h1>";
}
else{
	echo "<h1>Record updation successfully</h1>";
	header("Refresh:4;URL=p.php");
}
mysql_close($con);
?>
</center>
<body bgcolor="#CCCCCC" text="#FF0000">
</body>
</html>