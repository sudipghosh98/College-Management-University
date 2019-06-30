<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
require('connection.php');
$q="select * from course";
$result=mysql_query($q);
?>

<p>select course name<form name="form10" method="post" action="meritlist1.php">
<select name="s3">
<?php
while($row=mysql_fetch_array($result)){
		$code=$row[0];
	$nam=$row[1];
	$sub1=$row[2];
	$sub2=$row[3];
	$sub3=$row[4];
	$fee=$row[5];
	$seat=$row[3];
	$st=$row[4];
?>
<option value="<?php echo $code ?> ">
<?php echo "".$nam.",".$sub1.",".$sub2.",".$sub3."" ?></option>
<?php
}
?>

</p>
</select>
<br />
<p><input type="submit" name="f6" value="Show Merit List"></p>	
</form>

</body>
</html>