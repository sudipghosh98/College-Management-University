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
<div align="center" style="height:500px; width:500px; margin-left:40px">
<fieldset >
<legend align="center" ><h2>SELECT COURSE NAME AND COMBINATION</h2></legend>

<form id="form2" method="post" action="edit_form_price.php">
<table>
<tr> <th>SELECT COURSE NAME AND COMBINATION</th> <td>
<?php
require("connection.php");
$q1="select * from course";
$result1=mysql_query($q1);
?><select name="num" >
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
?>
<option value="<?php echo $code ?> ">
<?php echo "".$nam."------->".$com1."----".$com2."-----".$com3.""  ?>
</option>
<?php
}
?>
</td></tr>
<tr> <td>&nbsp;</td><td><input type="submit" id="b2" name="b2" value="search" /></td></tr>
</table>
</form>
</fieldset>
<div>

<body bgcolor="#66FF99">
</body>
</html>