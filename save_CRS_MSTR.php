<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>

<?php
require("connection_CRS_MSTR.php");
    $cn=$_POST["t1"];
	 $cn1=$_POST["t2"];
	 $sql1="update course set C_NAME='".$cn1."' where C_NAME='".$cn."'";
	 $r1=mysql_query($sql1);
$sql="update COURSE_MASTER set C_NAME='".$cn1."' where C_NAME='".$cn."'";
$r=mysql_query($sql);
if(!$r)
{
	
	echo"Record Updation Failed:-";
}
else
{
	echo"Record Successfully Updated:-";
	header("Refresh:4;URL=p.php");
}
mysql_close($con);	
?></center>
<body bgcolor="#CCCCCC" text="#FF0000">

</body>
</html>