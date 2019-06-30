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
echo $c_code;

$q4="select * from form_price where c_code='".$c_code."'";
$res2=mysql_query($q4);
while($row=mysql_fetch_array($res2))
{
	$price12=$row[1];

}
echo $price12;
$q1="select * from card_details ";
$n1=mysql_query($q1);
while($row=mysql_fetch_array($n1))
{
	$card_no=$row[0];
	$acc_no=$row[1];
	$type=$row[2];
	$date=$row[3];
	$cvv=$row[4];
	$pin=$row[5];
	$amu=$row[6];
	
}


$card1=$_POST["card_number"];
$acc_no1=$_POST["a_h_nm"];
$type1=$_POST["cardtype"];
$date1=$_POST["expd"];
$date2=$_POST["expm"];
$cvv1=$_POST["cvv"];
$pin1=$_POST["pno"];
$amu1=$_POST["bln"];

echo "hello";
if($card_no==$card1 && $acc_no==$acc_no1 && $type==$type1 ){
$a="complete";
echo $a;
echo $price12;
$q5=" update card_details set balance=balance-".$price12." ";

$n2=mysql_query($q5);

$q6="update application set payment_status='".$a."' where form_no=".$form."";
$n3=mysql_query($q6);

header("location:practise1.php");
}
else{
	
	header("location:card details1.php");
	}

mysql_close($con);

?>
<body>
</body>
</html>