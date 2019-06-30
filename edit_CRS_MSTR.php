<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection_CRS_MSTR.php");
$cn=$_POST["s1"];
//$cn=$_POST["s1"];
$sql="select * from COURSE_MASTER where C_NAME='".$cn."'";
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
<form name="f1" method="post" action="save_CRS_MSTR.php">
<table cellpadding="2" cellspacing="2">
<?php
while($row=mysql_fetch_array($result))
{
	$cn=$row[0];

?>
<tr><th>COURSE NAME:-</th> <td> <input type="text" name='t1'  readonly value="<?php echo $cn ?>" /></td></tr>
<tr><th> UPDATED COURSE NAME:-</th> <td> <input type="text" name='t2'  /></td></tr>

<?php
}
?>
</table>
<input type="submit" value="Update Now" />

</form>
</fieldset>
</div>
</center>
<body bgcolor="#FFFFCC">
</body>
</html>