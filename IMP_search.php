<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center>
</head>
<?php
require("IMP_connection.php");
$sql="select * from IMP_DATE";
$result=mysql_query($sql);
?>
<form name="f1" method="post" action="IMP_edit.php">
<h1><i><u> SELECT SUBJECT:-</u></i></h1>
</br>
<select name="s1">
<?php
while($row=mysql_fetch_array($result))
{
	$id=$row[0];
    $act=$row[1];
    $date=$row[2];
    $actd=$row[3];
	$stat=$row[4];
?>
<option value="<?php echo $id ?>">
<?php echo $act ?>

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


<body>
</body>
</center>
</html>