<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection_CRS_MSTR.php");
$sql="select * from COURSE_MASTER";
$result=mysql_query($sql);
?>
<center>
<div align="center" style="height:500px; width:500px; margin-left:50px">
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<fieldset >

<legend align="center" ><h2>SEARCH</h2></legend>
<form name="f1" method="post" action='edit_CRS_MSTR.php'>
SELECT COURSE NAME: <select name="s1">
<option value="-1">----Select----</option>
<?php
while($row=mysql_fetch_array($result))
{
	$cn=$row[0];
?>
<option value="<?php echo $cn ?>">
<?php echo $cn ?>

</option>
<?php
}
?>
</select>
<input type="submit" name="b1" value="Search"/>
</form>
<?php
mysql_close($con);
?>
</fieldset>
</div>
</center>
<body bgcolor="#FFFF99">
</body>
</html>