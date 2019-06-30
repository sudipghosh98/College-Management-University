<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<style type="text/css">
#admsn1{
	width:100%;
	margin-top:30px;
	height:auto;
	border:thick;
	border-color:#336;	
	
}
</style>
<div align="center" style="height:500px; width:500px; margin-left:400px">
<fieldset >
<legend align="center" ><h2>EDIT</h2></legend>

<?php
require("connection.php");
$ser=$_POST["num"];
$q="select * from CUTOFF_MARKS where C_CODE='".$ser."'";
$res=mysql_query($q);
?>
<form id="form1" method="post" action="update_cutoff.php">
<center>
<table  style="margin-top:30px" width="500px" height="90%">
<?php
while($row=mysql_fetch_array($res))
{
	$code=$row[0];
$cat=$row[1];
$tot=$row[2];
$best=$row[3];

}
?>

<tr><th>COURSE CODE</th><td><input type="text" name="code" id="code" value="<?php echo $code ?>" readonly="readonly"/></td></tr>
<tr><th>CATEGORY</th><td><input type="text" name="cat" id="cat" value="<?php echo $cat ?>" /></td></tr>
<tr><th>SUBJECT MARKS</th><td><input type="number" name="tot" id="tot" value="<?php echo $tot ?>" /></td></tr>
<tr><th>BEST OF FOUR</th><td><input type="number" name="best" id="best" value="<?php echo $best ?>"/></td></tr>

<tr><th>&nbsp;</th><td><input type="submit" name="b1" id="b1" value="Save"/></td></tr>


</table>
</center>
</form>
</fieldset>
</div>

<body bgcolor="#249738">
</body>
</html>