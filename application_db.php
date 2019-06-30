<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
require("connection.php");

session_start();
$q1="select count(*)+1 from application";
$n1=mysql_query($q1);
while($row=mysql_fetch_array($n1))
{
	$cid=$row[0];
}

//echo $cid;
$name=$_POST["name"];
$fname=$_POST["fname"];
$add=$_POST["add"];
$dob=$_POST["dob"];
$city=$_POST["city"];
$state=$_POST["state"];
$cast=$_POST["caste"];
$reg=$_POST["reg"];
$cont=$_POST["mob"];
$email=$_POST["e_mail"];
$_SESSION['sfrm']=$cid;
$_SESSION['sname']=$name;
$_SESSION['sfname']=$fname;
$_SESSION['sadd']=$add;
$_SESSION['sdob']=$dob;
$_SESSION['scity']=$city;
$_SESSION['sstate']=$state;
$_SESSION['scast']=$cast;
$_SESSION['sreg']=$reg;
$_SESSION['smob']=$cont;
$_SESSION['semail']=$email;

//$email=$_SESSION['semail'];  // for taking out the data 
$sel="In progress";
$pay="pending";
/*
$q="insert into application(FORM_NO,NAME,FATHER_NAME,DOB,ADDRESS,CITY,STATE,CAST,RELIGION,CONTACT_NO,EMAIL_ID,SEL_STATUS,PAYMENT_STATUS) values(".$cid.",'".$name."','".$fname."','".$dob."','".$add."','".$city."','".$state."','".$cast."','".$reg."',".$cont.",'".$email."','".$sel."','".$pay."')";

$n=mysql_query($q);*/
/*if(mysql_query($con,$q)){
$e=mysql_insert_id($con);
echo $e;
}*/

/*if(!$n){
echo "Record insertion failed";
die(mysql_error());
}
else{
	echo "Record insertion sucessful";
}
*/
    
mysql_close($con);
header("location:sch_detail.php");
?>

<body>

</body>
</html>