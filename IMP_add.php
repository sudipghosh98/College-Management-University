<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection.php");
    $id=$_POST["t1"];
    $act=$_POST["t2"];
    $date=$_POST["t3"];
    $actd=$_POST["t4"];
	$stat=$_POST["t5"];

 $q="insert into IMP_DATE values(".$id.",'".$act."','".$date."','".$actd."','".$stat."')";
 $r=mysql_query($q);
 if(!$r)
 {
	 echo"RECORD INSERTION FAILED:-";
     header("Refresh:5;URL=p.php");	
 }
 else
 {
	 echo"RECORD SUCCESSFULLY INSERTED:-";
     header("Refresh:5;URL=p.php");	
 }
mysql_close($con);
?>
<body>
</body>
</html>