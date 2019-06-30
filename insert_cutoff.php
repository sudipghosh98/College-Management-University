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

<form id="form1" method="post" action="add_cutoff.php">
<center>
<div class="adm_inst_ctof">
<table border="0" bordercolordark="#339999" bordercolor="#CCFFCC" frame="box" style="margin-top:100px" width="500px" height="90%" >
<tr><th>COURSE NAME</th><td><?php
require("connection.php");
$q1="select * from course";
$result1=mysql_query($q1);
?><select name="code" >
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result1))
{
	
	$code=$row[0];
	$nam=$row[1];
	$com1=$row[2];
	$com2=$row[3];
	$com3=$row[4];
	//echo $id."<br>";
	//echo $nam."<br>";
}
?>
<option value="<?php echo $code ?> ">
<?php echo "".$nam.""  ?>
</option>
</td></tr>

<tr><th>TOTAL MARKS</th><td><input type="number" name="tot" id="tot" /></td></tr>
<tr><th>BEST OF FOUR </th><td><input type="number" name="best" id="best" /></td></tr>
</table>

<tr><th>&nbsp;</th><td><input type="submit" name="b1" id="b1" value="Save"/></td></tr>
</div>
</center>
</form>

</body>
</html>