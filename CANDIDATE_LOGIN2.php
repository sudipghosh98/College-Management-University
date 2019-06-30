<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
require("connection.php");
session_start();

$form1=$_SESSION["slg"];
$date=$_SESSION["sde"];

//echo $form1;
$q="SELECT APPLICATION.FORM_NO,APPLICATION.NAME,APPLICATION.FATHER_NAME,APPLICATION.DOB,APPLICATION.ADDRESS,APPLICATION.CITY,APPLICATION.STATE,APPLICATION.CAST,APPLICATION.RELIGION,APPLICATION.CONTACT_NO,APPLICATION.EMAIL_ID,APPLICATION.COURSE_APPLIED,APPLICATION.C_CODE,APPLICATION.SEL_STATUS,APPLICATION.PAYMENT_STATUS,APP_MARKS.FORM_NO,APP_MARKS.LAST_SCHOOL,APP_MARKS.ROLL_NO,APP_MARKS.BOARD,APP_MARKS.PASSING_YEAR,APP_MARKS.DIVITION,APP_MARKS.SUBJECT1,APP_MARKS.FULL_MARKS1,APP_MARKS.SUBJECT1_MARKS,APP_MARKS.SUBJECT2,APP_MARKS.FULL_MARKS2,APP_MARKS.SUBJECT2_MARKS,
APP_MARKS.SUBJECT3,APP_MARKS.FULL_MARKS3,APP_MARKS.SUBJECT3_MARKS,
APP_MARKS.SUBJECT4,APP_MARKS.FULL_MARKS4,APP_MARKS.SUBJECT4_MARKS,
APP_MARKS.SUBJECT5,APP_MARKS.FULL_MARKS5,APP_MARKS.SUBJECT5_MARKS,
APP_MARKS.SUBJECT6,APP_MARKS.FULL_MARKS6,APP_MARKS.SUBJECT6_MARKS,APP_MARKS.TOTAL_MARK,APP_MARKS.BEST_OF_FOUR FROM APPLICATION INNER JOIN APP_MARKS ON APPLICATION.FORM_NO=APP_MARKS.FORM_NO WHERE APP_MARKS.FORM_NO=".$form1." ";
$res=mysql_query($q);
?>
<center>
<h1>USER APPLICATION</h1>
<table border="1" style="width="500px" height="90%" align="center" width="90%" height="20%" ">
<tr> <th style="background-color:#309; color:#FFF">FORM NUMBER  </th><th style="background-color:#309; color:#FFF"> NAME </th><th style="background-color:#309; color:#FFF">FATHER'S NAME </th><th style="background-color:#309; color:#FFF"> DATE OF BIRTH </th><th style="background-color:#309; color:#FFF"> BEST OF FOUR </th><th style="background-color:#309; color:#FFF"> TOTAL MARKS </th>
<th style="background-color:#309; color:#FFF"> COURSE APPLIED </th><th style="background-color:#309; color:#FFF"> COURSE CODE </th><th style="background-color:#309; color:#FFF"> PAYMENT STATUS </th>
</tr>

<?php
while($row=mysql_fetch_array($res))
{
	$f_no=$row[0];
$name=$row[1];
$f_name=$row[2];
$dob=$row[3];
$b_f_4=$row[40];
$t_m=$row[39];
$course_ap=$row[11];
$c_code=$row[12];
$s_status=$row[13];
$p_status=$row[14];
	

?>
<tr><td><center><?php echo $f_no ?></center></td>
<td><center><?php echo $name ?></center></td>
<td><center><?php echo $f_name ?></center></td>
<td><center><?php echo $dob ?></center></td>
<td><center><?php echo $b_f_4 ?></center></td>
<td><center><?php echo $t_m ?></center></td>

<td><center><?php echo $course_ap ?></center></td>
<td><center><?php echo $c_code; $_SESSION["scc"]=$c_code; ?></center></td>

<td><center><?php if($p_status=="pending"){
?></center> <a href="card details1.php">pending </a>
<?php
}
else
{
	echo $p_status;
}
?></td>


<?php } ?>

</table>
<?php
if($p_status=="complete"){
}
else{?>
<form name="f20" method="post" action="application1.php">
<br />
<input type="submit" value="Edit Details" name="b23" id="b23" />
</form>
<?php
}

?>
<form name="f21" method="post" action="login.php">
<br />
<input type="submit" value="Log Out" name="b24" id="b24" style="background-color: green;color: white;" />
</form>

</center>
<?php mysql_close($con); ?>

<body bgcolor="#FFCC66">
</body>
</html>