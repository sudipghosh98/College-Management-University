<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
require("connection.php");

session_start();


$code=$_POST["code"];
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
$cap=$_POST["app"];
$cco=$_POST["cid"];


//$email=$_SESSION['semail'];  // for taking out the data 
$sel=$_POST["ast"];
$pay=$_POST["pst"];

$q="update application set name='".$name."',father_name='".$fname."',dob='".$dob."',address='".$add."',city='".$city."',state='".$state."',cast='".$cast."',religion='".$reg."',contact_no=".$cont.",email_id='".$email."',course_applied='".$cap."',c_code='".$cco."',sel_status='".$sel."',payment_status='".$pay."' where form_no=".$code."";

$n=mysql_query($q);
/*if(mysql_query($con,$q)){
$e=mysql_insert_id($con);
echo $e;
}*/

if(!$n){
echo "Record insertion failed";

}
else{
	echo "Record insertion sucessful";
}

mysql_close($con);
header("location:login.php");
?>

<body>

</body>
</html>