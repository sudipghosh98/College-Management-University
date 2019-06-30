<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<?php
require("connection.php");

session_start();
$id=$_POST["id"];
	$sch=$_POST["sch"];
		$roll=$_POST["roll"];
			$boa=$_POST["boa"];
				$year=$_POST["year"];
					$div1=$_POST["div1"];
						$sub1=$_POST["sub1"];
							$full1=$_POST["full1"];
								$ob1=$_POST["ob1"];
								$sub2=$_POST["sub2"];
							$full2=$_POST["full2"];
								$ob2=$_POST["ob2"];
								$sub3=$_POST["sub3"];
							$full3=$_POST["full3"];
								$ob3=$_POST["ob3"];
								$sub4=$_POST["sub4"];
							$full4=$_POST["full4"];
								$ob4=$_POST["ob4"];
								$sub5=$_POST["sub5"];
							$full5=$_POST["full5"];
								$ob5=$_POST["ob5"];
								$sub6=$_POST["sub6"];
							$full6=$_POST["full6"];
								$ob6=$_POST["ob6"];
								$z=$_SESSION['scast'];
							//	$mark1=$_POST["ob1"];
//$email=$_SESSION['semail'];
//echo $email;
$_SESSION['ssch']=$sch;
$_SESSION['sroll']=$roll;
$_SESSION['sboa']=$boa;
$_SESSION['syear']=$year;
$_SESSION['sdiv1']=$div1;
$_SESSION['ssub1']=$sub1;
$_SESSION['sfull1']=$full1;
$_SESSION['sob1']=$ob1;
$_SESSION['ssub2']=$sub2;
$_SESSION['sfull2']=$full1;
$_SESSION['sob2']=$ob2;
$_SESSION['ssub3']=$sub3;
$_SESSION['sfull3']=$full1;
$_SESSION['sob3']=$ob3;
$_SESSION['ssub4']=$sub4;
$_SESSION['sfull4']=$full1;
$_SESSION['sob4']=$ob4;
$_SESSION['ssub5']=$sub5;
$_SESSION['sfull5']=$full1;
$_SESSION['sob5']=$ob5;
$_SESSION['ssub6']=$sub6;
$_SESSION['sfull6']=$full1;
$_SESSION['sob6']=$ob6;

$tot=$ob1+$ob2+$ob3+$ob4+$ob5+$ob6;
$arr=array($ob1,$ob2,$ob3,$ob4,$ob5,$ob6);
sort($arr);
$best=$arr[2]+$arr[3]+$arr[4]+$arr[5];
if($z=="SC/ST"){
$tot=$tot+$tot*0.5;
$best=$best+$best*0.5;
if($tot>600)
$tot=600;
if($best>400)
$best=400;
}
$_SESSION['stot']=$tot;
$_SESSION['sbest']=$best;
$email=$_SESSION['semail'];
//echo $email;
/*$q="insert into APP_MARKS values(".$id.",'".$sch."','".$roll."','".$boa."',".$year.",'".$div1."','".$sub1."',".$full1.",".$ob1.",'".$sub2."',".$full2.",".$ob2.",'".$sub3."',".$full3.",".$ob3.",'".$sub4."',".$full4.",".$ob4.",'".$sub5."',".$full5.",".$ob5.",'".$sub6."',".$full6.",".$ob6.",".$tot.",".$best.")";
$r=mysql_query($q);
*/
if(!$r)
	echo "not done";
else
	echo "done";
	
header("location:hello.php");
mysql_close($con);
?>

<body>
<table>
<tr><td><form name="form1" method="post" action="hello.php">

<input type="submit" name="b1" id="b1" value="Home" />
</form></td>
<td><form name="form2" method="post" action=".php">

<input type="submit" name="b2" id="b2" value="Payment" />
</form></td>

</table>

</body>
</html>