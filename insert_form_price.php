<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#FFFF99">
<br />
<br />
<br />
<br />
<br />
<div align="center" style="height:500px; width:500px; margin-left:400px">
<fieldset >
<legend align="center" ><h2>SELECT COURSE NAME AND COMBINATION</h2></legend>

<form id="form1" method="post" action="add_form_price.php">
<table cellpadding="10">
<tr><th>COURSE NAME AND FORM PRICE</th><td><?php
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

<tr><th>PRICE</th><td><input type="number" name="price" id="price" /></td></tr>


<tr><th>&nbsp;</th><td><input type="submit" name="b1" id="b1" value="Save"/></td></tr>
</table>
</form>

</body>
</html>