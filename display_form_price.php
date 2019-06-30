<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>
<br />
<br />
<br />
<br />
<br />
<br />
<div align="center" style="height:500px; width:500px; margin-left:30px">
<fieldset >
<legend align="center" ><h1>Course Form Price</h1></legend>
<?php
require("connection.php");
$q="select FORM_PRICE.c_code,FORM_PRICE.price,course.c_name from FORM_PRICE inner join course on form_price.c_code=course.c_code";
$res=mysql_query($q);
?>

<table border="0" cellspacing="5px">
<tr> <th> COURSE CODE </th><th>COURSE NAME</th><th>PRICE</th></tr>
<?php
while($row=mysql_fetch_array($res))
{
	$code=$row[0];
$price=$row[1];
$na=$row[2];


?>
<tr><td align="center"><?php echo $code ?></td>
<td align="left" ><?php echo $na ?></td>
<td align="center"><?php echo $price ?></td>
</tr>
<?php } ?>
</table>
<?php 
mysql_close($con); ?>
</center>
</fieldset>
</div>
<body bgcolor="#99FFCC">
</body>
</html>