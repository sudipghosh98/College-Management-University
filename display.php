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
<br />
<br />

<div align="center" style="height:500px; width:500px; margin-left:300px">
<fieldset >
<legend align="center" ><h1>Course Details</h1></legend>
<?php
require("connection.php");
$q="select * from COURSE";
$res=mysql_query($q);
?>
<center>
<table width="90%" height="90%" cellpadding="5px" cellspacing="5px"  >
<tr> <th> COURSE CODE </th><th>COURSE NAME</th><th>C_SUB1</th><th>C_SUB2</th><th>C_SUB3</th><th>FEE</th><th>NO OF SEAT</th></tr>
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
<tr><td align="left"><?php echo $code ?></td>
<td align="left"><?php echo $cid ?></td>
<td align="left"><?php echo $sub1 ?></td>
<td align="left"><?php echo $sub2 ?></td>
<td align="left"><?php echo $sub3 ?></td>
<td align="left"><?php echo $fee ?></td>
<td align="left"><?php echo $seat ?></td>
</tr>
<?php } ?>
</table>
</center>
<?php
mysql_close($con); ?>
</fieldset>
</div>
<body>
</body>
</html>