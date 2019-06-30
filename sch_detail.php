<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
/*
if(isset($_POST["f6"])){
$mark1=$_POST["ob1"];
$mark2=$_POST["ob2"];
$mark3=$_POST["ob3"];
$mark4=$_POST["ob4"];
$mark5=$_POST["ob5"];
$mark6=$_POST["ob6"];
$tot=$mark1+$mark2+$mark3+$mark4+$mark5+$mark6;
$arr=array($mark1,$mark2,$mark3,$mark4,$mark5,$mark6);
sort($arr);
$best=$arr[0]+$arr[1]+$arr[2]+$arr[3];
}*/
require("connection.php");
session_start();
$form=$_SESSION['sfrm'];
//echo $form;
  //  echo $_SESSION['smob'];
?>
<body text="#FFFFFF" bgcolor="#333333">


<div align="center" style="height:500px; width:500px; margin-left:450px">
<fieldset >
<legend align="center" ><h2>SCHOOL DETAILS</h2></legend>
<form name="form1" method="post" autocomplete="off" action="insert_sch_detail.php">
<table align="center" cellpadding="10px" cellspacing="10px">
<tr><th>Form Number</th><td><input type="number" id="id" name="id" value="<?php  echo $form;?>" readonly="readonly" ></td></tr>
<tr><th>Last School</th><td><input type="text" id="sch" name="sch" pattern="[A-Za-z ]+" title="Only Alphabet" ></td></tr>
<tr><th>Roll No.</th><td><input type="text" id="roll" name="roll" ></td></tr>
<tr><th>Board</th><td><select name="boa"  >
                <option value="ICSE">ICSE</option>
				<option value="CBSE">CBSE</option>
				<option value="STATE BOARD">STATE BOARD</option>
				
				</select></td></tr>
<tr><th>Passing Year</th><td><select name="year"  >
                <option value="2014">2014</option>
				<option value="2015">2015</option>
				<option value="2016">2016</option>
				<option value="2017">2017</option>
                <option value="2018">2018</option>
				</select></td></tr>
<tr><th>Division.</th><td><select name="div1"  >
                <option value="1<sup>st</sup>">1<sup>st</sup></option>
				<option value="2<sup>st</sup>">2<sup>st</sup></option>
				<option value="3<sup>st</sup>">3<sup>st</sup></option>
				
				</select></td></tr>
                </table>
                </fieldset>
                </div>
                <div align="center" style="height:500px; width:500px; margin-left:200px">
                <fieldset >
<legend align="center" ><h2>SUBJECT DETAILS</h2></legend>
                <table align="center" cellpadding="10px" cellspacing="10px">
<tr><th>Subject1 Name</th><td><input type="text" id="sub1" name="sub1"  pattern="[A-Za-z ]+" title="Only Alphabet" ></td>
<th>Full Marks</th><td><input type="number" id="full1" name="full1" value="100" readonly ></td>
<th>Obtain Marks</th><td><input type="number" id="ob1" name="ob1" ></td></tr>

<tr><th>Subject2 Name</th><td><input type="text" id="sub2" name="sub2" pattern="[A-Za-z ]+" title="Only Alphabet" ></td>
<th>Full Marks</th><td><input type="number" id="full2" name="full2" value="100" readonly></td>
<th>Obtain Marks</th><td><input type="number" id="ob2" name="ob2" ></td></tr>
<tr><th>Subject3 Name</th><td><input type="text" id="sub3" name="sub3"  pattern="[A-Za-z ]+" title="Only Alphabet"></td>
<th>Full Marks</th><td><input type="number" id="full3" name="full3"value="100" readonly ></td>
<th>Obtain Marks</th><td><input type="number" id="ob3" name="ob3" ></td></tr>

<tr><th>Subject4 Name</th><td><input type="text" id="sub4" name="sub4"  pattern="[A-Za-z ]+" title="Only Alphabet" ></td>
<th>Full Marks</th><td><input type="number" id="full4" name="full4" value="100" readonly ></td>
<th>Obtain Marks</th><td><input type="number" id="ob4" name="ob4" ></td></tr>

<tr><th>Subject5 Name</th><td><input type="text" id="sub5" name="sub5"  pattern="[A-Za-z ]+" title="Only Alphabet"></td>
<th>Full Marks</th><td><input type="number" id="full5" name="full5" value="100" readonly></td>
<th>Obtain Marks</th><td><input type="number" id="ob5" name="ob5" ></td></tr>

<tr><th>Subject6 Name</th><td><input type="text" id="sub6" name="sub6" pattern="[A-Za-z ]+" title="Only Alphabet" ></td>
<th>Full Marks</th><td><input type="number" id="full6" name="full6" value="100" readonly></td>
<th>Obtain Marks</th><td><input type="number" id="ob6" name="ob6" ></td></tr>
<th>&nbsp;</th><td></td><td><p><input type="submit" name="f6" value="    next     " align="absmiddle"></p></td></tr>
</table>
</form>


</fieldset>
</div>
</body>
</html>
