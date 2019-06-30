<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
	require("connection.php");
$p=$_POST["cname11"];
//echo $p."<br>";
	session_start();
	$_SESSION['scourse']=$p;
	$tot=$_SESSION['stot'];
		$best=$_SESSION['sbest'];
		//echo $tot."<br>";
		//echo $best."<br>";
		$q="select * from cutoff_marks where c_code='".$p."'";
		$r=mysql_query($q);
		while($row=mysql_fetch_array($r)){
		$id=$row[0];
		$s=$row[2];
		$t=$row[3];
		}
		//echo $s."<br>";
		//echo $t."<br>";
    $s1='';
		$q1="select * from course where c_code='".$id."'";
		$r1=mysql_query($q1);
		while($row=mysql_fetch_array($r1)){
		$s1=$row[1];
		
		}
		
		if($s<=$tot && $t<=$best){
			
			
			
			

$cid=$_SESSION['sfrm'];
$name=$_SESSION['sname'];
$fname=$_SESSION['sfname'];
$add=$_SESSION['sadd'];
$dob=$_SESSION['sdob'];
$city=$_SESSION['scity'];
$state=$_SESSION['sstate'];
$cast=$_SESSION['scast'];
$reg=$_SESSION['sreg'];
$cont1=$_SESSION['smob'];
$email=$_SESSION['semail'];
$sel="In progress";
$pay="pending";
            //echo $_SESSION['smob'];
/*
echo $cid."<br>";
echo $name."<br>";
echo $fname."<br>";
echo $add."<br>";
echo $dob."<br>";
echo $city."<br>";
echo $state."<br>";
echo $cast."<br>";
echo $reg."<br>";
echo $cont."<br>";
echo $email."<br>";*/
			$q="insert into application values(".$cid.",'".$name."','".$fname."','".$dob."','".$add."','".$city."','".$state."','".$cast."','".$reg."',".$cont1.",'".$email."','".$s1."','".$p."','".$sel."','".$pay."')";	
			$n=mysql_query($q);
		
					
$sch=$_SESSION['ssch'];
$roll=$_SESSION['sroll'];
$boa=$_SESSION['sboa'];
$year=$_SESSION['syear'];
$div1=$_SESSION['sdiv1'];
$sub1=$_SESSION['ssub1'];
$full1=$_SESSION['sfull1'];
$ob1=$_SESSION['sob1'];
$sub2=$_SESSION['ssub2'];
$full2=$_SESSION['sfull2'];
$ob2=$_SESSION['sob2'];
$sub3=$_SESSION['ssub3'];
$full3=$_SESSION['sfull3'];
$ob3=$_SESSION['sob3'];
$sub4=$_SESSION['ssub4'];
$full4=$_SESSION['sfull4'];
$ob4=$_SESSION['sob4'];
$sub5=$_SESSION['ssub5'];
$full5=$_SESSION['sfull5'];
$ob5=$_SESSION['sob5'];
$sub6=$_SESSION['ssub6'];
$full6=$_SESSION['sfull6'];
$ob6=$_SESSION['sob6'];
$tot=$_SESSION['stot'];
$best=$_SESSION['sbest'];
/*
		echo $sch."<br>";
		echo $roll."<br>";
		echo $boa."<br>";
		echo $year."<br>";
		echo $div1."<br>";
		echo $sub1."<br>";
		echo $full1."<br>";
		echo $ob1."<br>";
		echo $sub2."<br>";
		echo $full2."<br>";
		echo $ob2."<br>";
		echo $sub3."<br>";
		echo $full3."<br>";
		echo $ob3."<br>";
		echo $sub4."<br>";
		echo $full4."<br>";
		echo $ob4."<br>";
		echo $sub5."<br>";
		echo $full5."<br>";
		echo $ob5."<br>";
		echo $sub6."<br>";
		echo $full6."<br>";
		echo $ob6."<br>";	
			*/
			
			
			
			
			
			
			
			$q1="insert into APP_MARKS values(".$cid.",'".$sch."','".$roll."','".$boa."','".$year."','".$div1."','".$sub1."',".$full1.",".$ob1.",'".$sub2."',".$full2.",".$ob2.",'".$sub3."',".$full3.",".$ob3.",'".$sub4."',".$full4.",".$ob4.",'".$sub5."',".$full5.",
			".$ob5.",'".$sub6."',".$full6.",".$ob6.",".$tot.",".$best.")";
			$n1=mysql_query($q1);

			header("Refresh:5;URL=bfr_pymnt.php");
		}
		else {
			echo "<h1>not eligible for these course</h1>";
			header("Refresh:2;URL=login.php");
		}
		
		
?>


<body text="#FF0000" >
</body>
</html>