<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("IMP_connection.php");
    $code1=$_POST["t1"];
    $act=$_POST["t2"];
    $date=$_POST["t3"];
    $actd=$_POST["t4"];
	$stat=$_POST["t5"];

$sql="update IMP_DATE set ACTIVITY='".$act."', DATE='".$date."', ACTIVITY_DATE='".$actd."', STATUS='".$stat."' where ID=".$code1."";
$r=mysql_query($sql);
if(!$r)
{
	die(mysql_error());
    echo"Record Updation Failed:-";
    header("Refresh:5;URL=p.php");
}
else
{
    echo"<h1>Record Successfully Updated:-</h1>";
    header("Refresh:5;URL=p.php");
}
mysql_close($con);	
?>
<body>
</body>
</html>