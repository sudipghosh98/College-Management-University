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
<?php
require("connection.php");
$code=$_POST["code"];
$cid=$_POST["cid"];
$sub1=$_POST["sub1"];
$sub2=$_POST["sub2"];
$sub3=$_POST["sub3"];
$fee=$_POST["fee"];
$seat=$_POST["seat"];
$status=$_POST["status"];

$q="update COURSE set C_NAME='".$cid."'  , C_SUB1='".$sub1."' , C_SUB2='".$sub2."' , C_SUB3='".$sub3."' ,FEES=".$fee.",
NO_OF_SEATS=".$seat.", STATUS='".$status."' where C_CODE='".$code."'";
$n=mysql_query($q);
if(!$n){
	die(mysql_error());
echo "Record updation failed";
}
else{
	echo "<h1>Record updation successfully</h1>";
	header("Refresh:4;URL=p.php");
}
mysql_close($con);
?>
<body bgcolor="#336699">
</body>
</html>