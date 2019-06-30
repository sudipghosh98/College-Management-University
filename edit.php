<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
#admsn1{
	width:100%;
	margin-top:200px;
	height:auto;
	border:thick;
	border-color:#336;	
	
}
</style>
<?php
require("connection.php");
$ser=$_POST["num"];
$q="select * from COURSE where C_CODE='".$ser."'";
$res=mysql_query($q);
?>
<form id="form1" method="post" action="update.php">
<center>
<table border="1" style="margin-top:100px" width="500px" height="90%" >
<?php
while($row=mysql_fetch_array($res))
{
$code=$row[0];
$cid=$row[1];
$sub1=$row[2];
$sub2=$row[3];
$sub3=$row[4];
$fee=$row[5];
$seat=$row[6];
$status=$row[7];


?>

<tr><th>COURSE CODE</th><td><input type="text" name="code" id="code" value="<?php echo $code ?>" readonly="readonly"/></td></tr>
<tr><th>COURSE NAME</th><td><input type="text" name="cid" id="cid" value="<?php echo $cid ?>" readonly /></td></tr>
<tr><th>SUBJECT_1</th><td><?php
require("connection.php");
$q1="select * from subject";
$result1=mysql_query($q1);
?><select name="sub1" >
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result1))
{
	
	$nam=$row[0];
	//echo $id."<br>";
	//echo $nam."<br>";
?>
<option value="<?php echo $nam ?> ">
<?php echo $nam ?>
</option>
<?php
}
?></td></tr>
<tr><th>SUBJECT_2</th><td><?php
require("connection.php");
$q1="select * from subject1";
$result1=mysql_query($q1);
?><select name="sub2" >
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result1))
{
	
	$nam=$row[0];
	//echo $id."<br>";
	//echo $nam."<br>";
?>
<option value="<?php echo $nam ?> ">
<?php echo $nam ?>
</option>
<?php
}
?></td></tr>
<tr><th>SUBJECT_3</th><td><?php
require("connection.php");
$q1="select * from subject2";
$result1=mysql_query($q1);
?><select name="sub3" >
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result1))
{
	
	$nam=$row[0];
	//echo $id."<br>";
	//echo $nam."<br>";
?>
<option value="<?php echo $nam ?> ">
<?php echo $nam ?>
</option>
<?php
}
?></td></tr>
<tr><th>FEE</th><td><input type="number" name="fee" id="fee" value="<?php echo $fee ?>"/></td></tr>
<tr><th>NUMBER OF SEAT</th><td><input type="number" name="seat" id="seat" value="<?php echo $seat ?>"/></td></tr>
<tr><th>STATUS</th><td><input type="text" name="status" id="status" value="<?php echo $status ?>" /></td></tr>
<tr><th>&nbsp;</th><td><input type="submit" name="b1" id="b1" value="Save"/></td></tr>

<?php
}
?>
</table>
<center>
</form>
<body bgcolor="#249738">
</body>
</html>