<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection.php");
session_start();
$e=$_POST["f3"];
$f=$_POST["f4"];
$_SESSION["slg"]=$e;
$_SESSION["sde"]=$f;

$q="select * from application ";
$result=mysql_query($q);
while($row=mysql_fetch_array($result)){
	$id=$row[0];
	$d=$row[3];
	if($e==$id&&$f==$d){
	header("location:CANDIDATE_LOGIN2.php");
	break;
	}
	else 
	{
		$q1=1;
	}
}
if($q1==1){
echo "invalid USER";
header("Refresh:5;url=login.php");	
}

?>
<body>
</body>
</html>