<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection.php");
session_start();
$c_code=$_SESSION["scc"];
$form=$_SESSION["slg"];
echo $form;

$q4="select * from form_price where c_code='".$c_code."'";
$res2=mysql_query($q4);

while($row=mysql_fetch_array($res2))
{
	$price12=$row[1];

}
echo $price12;
$q1="select count(*)+123456789 from form_fillup_tr";
$n1=mysql_query($q1);
while($row=mysql_fetch_array($n1))
{
	$cid=$row[0];
}
$c_id="SBI".$cid;
echo $c_id;

$date=date("Y-m-d");
$a="insert into FORM_FILLUP_TR values (".$form.",'".$c_id."',".$price12.",'".$date."')";
$b=mysql_query($a);

if(!$b)
	echo "failed";
	else
	echo "sucess";
	
	
	header("location:tran_db1.php");
?>
<body>
</body>
</html>