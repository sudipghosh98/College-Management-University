<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	require("connection.php");
	session_start();
	
$a=$_POST["cn"];
//echo $a;
$q3="select * from course where c_name='".$a."' ";
$res2=mysql_query($q3);
//echo die(mysql_error());
?>
<center>
<form name="f01"  method="post" action="verify.php" >

<br />
<br />
<br />
<br />
<br />
<h2 style="font-style:italic">SELECT COMBINATION</h2>
<select name="cname11" >
<?php
//echo "sucess";
while($row=mysql_fetch_array($res2)){
			$code=$row[0];
		$com1=$row[2];
	     $com2=$row[3];
		 $com3=$row[4];
		 ?>
<option value="<?php echo $code ?> ">
<?php echo "".$com1."----".$com2."-----".$com3.""  ?>
</option>
<?php
}
?>
</select>
<input type="submit" id="b9" name="b9" value="next"  />
</form>
</center>
<body bgcolor="#000033" text="#CCCCCC">
</body>
</html>