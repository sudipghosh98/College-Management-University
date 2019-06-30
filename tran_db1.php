<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection.php");
session_start();
$c_code=$_SESSION["scc"];
$form=$_SESSION["slg"];


$q="select * from form_fillup_tr where form_no=".$form."";
$res=mysql_query($q);
?>

<style type="text/css">
#admsn1{
	width:100%;
	margin-top:200px;
	height:auto;
	border:thick;
	border-color:#336;	
	
}
</style>
<body bgcolor="#000033" bgproperties="blur" text="#FFFFFF" style="font-style:italic" >
<form id="form1" method="post" action="add.php">
<center>
<div class="adm_inst">
<table border="0" bordercolordark="#339999" bordercolor="#CCFFCC" frame="box" style="margin-top:100px" width="500px" height="90%" >
<tr><th>FORM_NO</th>

<th>TRANSACTION_ID</th>

<th>AMOUNT</th>

<th>TR_DATE</th></tr>



<?php
while($row=mysql_fetch_array($res))
{
	$f_no=$row[0];
$t_id=$row[1];
$amt=$row[2];
$tr_d=$row[3];

?>
<tr><td align="center"><?php echo $f_no ?></td>
<td align="center"><?php echo $t_id ?></td>
<td align="center"><?php echo $amt ?></td>
<td align="center"><?php echo $tr_d ?></td></tr>
<?php } 
header("Refresh:4;URL=login.php");?>
</table>
</body>
</html>