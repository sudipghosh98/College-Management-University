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
<body bgcolor="#000033" bgproperties="blur" text="#FFFFFF" style="font-style:italic" >
<center>
<br />
<br />
<br />
<br />
<br />
<br />
<br />

<div align="center" style="height:500px; width:500px; margin-left:70px">
<fieldset >
<legend align="center" ><h2>INSERT COURSE NAME</h2></legend>
<form id="form1" method="post" action="add.php">
<center>

<table border="0" bordercolordark="#339999" bordercolor="#CCFFCC"  width="500px" height="90%" >


<tr><th>COURSE NAME</th><td>
<?php
require("connection.php");
$q="select * from course_MASTER";
$result=mysql_query($q);
?>
<form name="form2" method="post" action="add.php">
<select name="cname" >
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result))
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
?>
</td></tr>

<tr><th>C_SUB1</th><td>
<?php
//require("connection.php");
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

<tr><th>C_SUB2</th><td><?php
//require("connection.php");
$q2="select * from subject1";
$result2=mysql_query($q2);
?><select name="sub2" >
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result2))
{
	
	$nam1=$row[0];
	//echo $id."<br>";
	//echo $nam."<br>";
?>
<option value="<?php echo $nam1 ?> ">
<?php echo $nam1 ?>
</option>
<?php
}
?></td></tr>

<tr><th>C_SUB3</th><td><?php
//require("connection.php");
$q3="select * from subject2";
$result3=mysql_query($q3);
?><select name="sub3" >
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result3))
{
	
	$nam3=$row[0];
	//echo $id."<br>";
	//echo $nam."<br>";
?>
<option value="<?php echo $nam3 ?> ">
<?php echo $nam3 ?>
</option>
<?php
}
?></td></tr>

<tr><th>FEES</th><td><input type="number" name="fee" id="fee" /></td></tr>

<tr><th>NO_OF_SEATS</th><td><input type="number" name="seat" id="seat" /></td></tr>


</table>
<tr><th>&nbsp;</th><td><input type="submit" name="b1" id="b1" value="     Save     "/></td></tr>

</div>
</center>
</fieldset>
</div>

</form>

</body>
</html>