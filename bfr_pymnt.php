<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php	
require("connection.php");
	session_start();
	$e=$_SESSION['scourse'];
$name=$_SESSION['sname'];
$cid=$_SESSION['sfrm'];
$q="select * from course where c_code='".$e."'";
		$r=mysql_query($q);
		while($row=mysql_fetch_array($r)){
		$id=$row[1];
		$com1=$row[2];
		$com2=$row[3];
		$com3=$row[4];
		}
		$price=89;
		$q1="select * from form_price where c_code='".$e."'";
		$r1=mysql_query($q1);
		while($row=mysql_fetch_array($r1)){
		$price=$row[1];
		$_SESSION['sprice1']=$price;
		}
		//$_SESSION['sprice1']=$price;
?>
<body bgcolor="#999999">
<center>
<div align="center" style="height:500px; width:500px; margin-left:100px">
<fieldset >
<legend align="center" ><h2>SCHOOL DETAILS</h2></legend>

<form name="f5" method="post" action="card details.php">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr><th>NAME :</th><td><input type="text" name="nm" id="nm" readonly="readonly" value="<?php echo $name; ?>"/></td></tr>
<tr><th>COURSE APPLIED FOR :</th><td><input type="text" name="c_a_f" id="c_a_f"  readonly="readonly"value="<?php echo $id; ?>" /></td></tr>
<tr><th>COMBINATION :</th><td><input type="text" name="c" id="c"  readonly="readonly" value="<?php echo "".$com1."----".$com2."-----".$com3.""  ?>" /></td></tr>
<tr><th>AMOUNT :</th><td><input type="number" name="amt" id="amt"  readonly="readonly" value="<?php echo $price; ?>" /></td></tr>
<tr><th>FORM NO :</th><td><input type="number" name="f_no" id="f_no" readonly="readonly" value="<?php echo $cid; ?>" /></td></tr>
</table>
<br />
<input type="submit" name="b1" id="b1" value="PAY NOW" />
</form>
<br />

<form name="f6" method="post" action="login.php">
<input type="submit" name="b2" id="b2" value="PAY LATER" />

</form>
</fieldset>
</div>
</center>
</body>
</html> 