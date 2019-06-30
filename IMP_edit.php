<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<center>
</head>
<?php
require("IMP_connection.php");
$code=$_POST["s1"];

$sql="select * from IMP_DATE where ID =".$code."";
$result=mysql_query($sql);
?>
<h1><i><u>UPDATE THE DATA:-</u></i></h1>
<form name="f1" method="post" action="IMP_save.php">
<table border="3" bgcolor="#00FF66" cellpadding="4" cellspacing="5">
<?php
while($row=mysql_fetch_array($result))
{
	$code1=$row[0];
    $act=$row[1];
    $date=$row[2];
    $actd=$row[3];
	$stat=$row[4];
?>
<tr><th>ID</th> <td> <input type="number" name='t1' value="<?php echo $code1 ?>" readonly /></td></tr>
<tr><th>ACTIVITY</th> <td> <input type="text" name='t2' value="<?php echo $act ?>" /></td></tr>
<tr><th>DATE</th> <td> <input type="date" name='t3' value="<?php echo $date ?>" /></td></tr>
<tr><th>ACT DATE</th> <td> <input type="date" name='t4' value="<?php echo $actd ?>" /></td></tr>
<tr><th>STATUS</th><td><select name="t5" >
<option value="ACTIVE">ACTIVE</option>
<option value="DEACTIVE">DEACTIVE</option></select></td></tr>

<?php
}
?>
<tr><td><input type="submit" value="Update Now" /></td></tr>
</table>
</form>
<body>
</body>
</center>
</html>