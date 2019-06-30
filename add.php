<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>
<?php
require("connection.php");
//$code=$_POST["code"];

$q1="select count(*)+1001 from course";
$n1=mysql_query($q1);
while($row=mysql_fetch_array($n1))
{
	$cid=$row[0];
}
$c_id="C".$cid;

$cname=$_POST["cname"];
$sub1=$_POST["sub1"];
$sub2=$_POST["sub2"];
$sub3=$_POST["sub3"];
$fee=$_POST["fee"];
$seat=$_POST["seat"];
//$status=$_POST["status"];
$status="ACTIVE";

$q="insert into COURSE values('".$c_id."','".$cname."','".$sub1."','".$sub2."','".$sub3."',".$fee.",".$seat.",'".$status."')";
$n=mysql_query($q);
if(!$n){
echo "<h1>Record insertion failed</h1>";
}
else{

	
	header("Refresh:1;URL=insert_form_price.php");
}
mysql_close($con);
?>
</center> 
<body bgcolor="#CCCCCC" text="#FF0000">
</body>
</html>