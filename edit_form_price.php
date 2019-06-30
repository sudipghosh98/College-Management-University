<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<br />
<br />
<br />
<br />
<br />
<div align="center" style="height:500px; width:500px; margin-left:400px">
<fieldset >
<legend align="center" ><h2>FORM PRICE</h2></legend>


<?php
require("connection.php");
$ser=$_POST["num"];
$q="select * from FORM_PRICE where C_CODE='".$ser."'";
$res=mysql_query($q);
?>
<form id="form1" method="post" action="update_form_price.php">
<table>
<?php
while($row=mysql_fetch_array($res))
{
$code=$row[0];
$price=$row[1];


}
?>



<tr><th>COURSE CODE</th><td><input type="text" name="code" id="code" value="<?php echo $code ?>" readonly="readonly"/></td></tr>
<tr><th>PRICE</th><td><input type="number" name="num" id="num" value="<?php echo $price ?>" /></td></tr>

<tr><th>&nbsp;</th><td><input type="submit" name="b1" id="b1" value="Save"/></td></tr>


</table>
</form>
</fieldset>
</div>

<body bgcolor="#00FF99">
</body>
</html>