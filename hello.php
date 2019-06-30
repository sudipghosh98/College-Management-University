<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php

require("connection.php");
session_start();
$q2="select distinct(c_name) from course ";
$res1=mysql_query($q2);

?>
<center>
<form name="form201"  method="post" action="test1.php" >
<br />
<br />
<br />
<br />
<br />
<h2 style="font-style:italic">SELECT COURSE</h2>
<select name="cn" >
<?php
while($row=mysql_fetch_array($res1)){
		$id=$row[0];
	     
	
?>
<option value="<?php echo $id ?> ">
<?php echo $id ?>
</option>
<?php
}
?>
</select>
<input type="submit" name="b20" id="b20" value="select" />
</form>
</center>
<body bgcolor="#000033" text="#CCCCCC">
</body>
</html>