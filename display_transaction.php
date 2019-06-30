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
<br />
<br />
<br />
<br />
<div align="center" style="height:500px; width:500px; margin-left:400px">
<fieldset >
<legend align="center" ><h2><h1>TRANSACTION TABLE</h1></h2></legend>
<?php
require("connection.php");
$q="select * from form_fillup_tr";
$res=mysql_query($q);
?>

<table  width="500px" height="90%" align="center">
<tr> <th> FORM NUMBER </th><th>TRANSACTION ID</th><th>AMOUNT</th><th>TRANSACTION DATE</th></tr>
<?php
while($row=mysql_fetch_array($res))
{
	$f_no=$row[0];
$t_id=$row[1];
$amt=$row[2];
$t_dt=$row[3];


?>
<tr><td><center><?php echo $f_no ?></center></td>
<td><center><?php echo $t_id ?></center></td>
<td><center><?php echo $amt ?></center></td>
<td><center><?php echo $t_dt ?></center></td>

<?php } ?>
</table>
<?php 
mysql_close($con); ?>
</fieldset>
</div>

<body bgcolor="#FFFF99"#009966">


</body>
</html>