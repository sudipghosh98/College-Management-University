<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection.php");
$e=$_POST["f1"];
$f=$_POST["f2"];




$q="select * from admin ";
$result=mysql_query($q);
while($row=mysql_fetch_array($result)){
	$id=$row[0];
	$d=$row[1];
	if($e==$id && $f==$d){
	header("location:p.php");
		$q1=0;
	break;
	}
	else 
	{
		$q1=1;
	}
}
if($q1==1){
echo "Wrong id or password";
//header("location:login.php");	
}

?>
?>
<body>
</body>
</html>