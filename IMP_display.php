<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<center>
<?php
require("IMP_connection.php");
$q="select * from IMP_DATE";
$result=mysql_query($q);
?>
<body>
<h1><i><u> IMPORTANT DATES:-</u></i></h1>
<table border="4" bgcolor="#CCCCCC" cellpadding="4" cellspacing="3">
<tr>
<th>ID</th>
<th>ACTIVITY</th>
<th>DATE</th>
<th>ACT DATE</th>

</tr>
<?php
while($row=mysql_fetch_array($result))
{
	$id=$row[0];
    $act=$row[1];
    $date=$row[2];
    $actd=$row[3];
	$stat=$row[4];

?>
<tr>
<td><?php echo $id ?></td>
<td><?php echo $act?></td>
<td><?php echo $date ?></td>
<td><?php echo $actd?></td>

</tr>
<?php
}
?>
</table>
<?php
mysql_close($con);
?>


<body>
</body>
</center>
</html>