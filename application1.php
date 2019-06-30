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
$fid=$_SESSION["slg"];
//echo $c_code;
//echo $fid;
$q4="select * from application where form_no=".$fid."";
$res2=mysql_query($q4);

while($row=mysql_fetch_array($res2))
{
	$fno=$row[0];
	$nam=$row[1];
	$fnam=$row[2];
	$date=$row[3];
	$add=$row[4];
	$city=$row[5];
	$state=$row[6];
	$cas=$row[7];
	$reg=$row[8];
	$con=$row[9];
	$mail=$row[10];
	$c_app=$row[11];
	$c_code=$row[12];
	$ssta=$row[13];
	$psta=$row[14];

}
?>
<style type="text/css">
#admsn1{
	
	
	
	border:thick;
	border-color:#336;	
	
}


</style>
<body bgcolor="#000000" bgproperties="blur"  text="#CCCCCC">
<form method="post" action="application_db1.php">
<center>
<div class="admsn1" align="center" style="margin-left:50px;width:500px">
<fieldset><legend align="center"><h2>Personal Details</h2></legend>

<table>

        <tr>
          <td> Form No </td>
          <td> <input type="text" name="code"  readonly="readonly" value="<?php echo $fno ?>"/>  </td>
        </tr>
		
        <tr>
          <td>  NAME </td>
          <td> <input type="text" name="name" value="<?php echo $nam ?>"/> </td>
        </tr>
		
        <tr>
          <td> FATHER NAME </td>
          <td> <input type="text" name="fname" value="<?php echo $fnam ?>"/> </td>
        </tr>
	
        <tr>
          <td> ADDRESS </td>
          <td> <input type="text" name="add" value="<?php echo $add ?>"/> </td>
        </tr>
		
        <tr>
          <td>  CITY </td>
          <td> <input type="text" name="city" value="<?php echo $city ?>"/> </td>
        </tr>
      
        <tr>
          <td> STATE </td>
          <td> <input type="text" name="state" value="<?php echo $state ?>"/> </td>
        </tr>
		
		<tr>
        <td> CASTE</td>
        <td> 
        <select name="caste" >
                <option value="GENERAL">GENERAL</option>
				<option value="OBC">OBC</option>
				<option value="SC">SC</option>
				<option value="ST">ST</option>
				</select> 
        </td>
        </tr>
        <tr>
          <td> Date of Birth: </td>
          <td> <input type="date" name="dob" value="<?php echo $date ?>"/> </td>
        </tr>
			
        <tr>
          <td> RELIGION </td>
          <td> <select name="reg"  >
                <option value="HINDU">HINDU</option>
				<option value="MUSLIM">MUSLIM</option>
				<option value="CHRISTIAN">CHRISTIAN</option>
				<option value="SIKH">SIKH</option>
				</select> </td>
        </tr>
       
		<tr>
        <td> Email Address: </td>
        <td> <input type="text" name="e_mail" value="<?php echo $mail ?>"/></td>
        </tr>
     

        <tr>
          <td> Mobile No: </td>
          <td> <input type="number" name="mob" id="mob" min="1000000000" max="9999999999" value="<?php echo $con ?>"  /> </td>
        </tr>
     
         <tr>
          <td> COURSE APPLIED </td>
          <td> <input type="text" name="app"  readonly="readonly" value="<?php echo $c_app ?>"/> </td>
        </tr>
       
         <tr>
          <td> COURSE ID </td>
          <td> <input type="text" name="cid" readonly="readonly" value="<?php echo $c_code ?>"/> </td>
        </tr>
     
        <tr>
          <td> Applied Status </td>
          <td> <input type="text" name="ast" readonly="readonly" value="<?php echo $ssta ?>"/> </td>
        </tr>
    
        <tr>
          <td> Payment Status </td>
          <td> <input type="text" name="pst" readonly="readonly" value="<?php echo $psta?>"/> </td>
        </tr>
		
        
</table>

          <input type="submit" name="insert" value="Next"/>
          </fieldset>
          
          </div> 
 </center> 
</form>
</body>
</html>