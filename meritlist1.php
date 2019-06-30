<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body bgcolor="#FFCC66">
<?php
require('connection.php');
	$id=$_POST["s3"];
	//echo $id;
	$p="select * from course where c_code='".$id."'";
	$result12=mysql_query($p);
	while($row1=mysql_fetch_array($result12)){
		$no=$row1[6];
	
	}
	
	$q="SELECT application.FORM_NO, application.NAME , application.CAST, application.COURSE_APPLIED, app_marks.BEST_OF_FOUR,app_marks.TOTAL_MARK FROM  application JOIN app_marks ON application.FORM_NO=app_marks.FORM_NO where C_CODE='".$id."' ORDER BY BEST_OF_FOUR DESC,TOTAL_MARK DESC LIMIT ".$no."";
	//echo $no;
$result=mysql_query($q);

	$l=1;
	?>
    
   <center><u> <h1><i>MERIT LIST</i></h1></u></center>
<table border="3px" style="width="500px" height="90%" align="center" width="90%" height="20%" ">
<tr>
<th style="background-color:#309; color:#FFF">SNO</th>
<th style="background-color:#309; color:#FFF">PHASE_NO</th>
<th style="background-color:#309; color:#FFF">FORM_NO</th>
<th style="background-color:#309; color:#FFF">NAME</th>
<th style="background-color:#309; color:#FFF">CATERGORY</th>
<th style="background-color:#309; color:#FFF">COURSE APPLIED</th>
<th style="background-color:#309; color:#FFF">BEST_FOUR</th>

<th style="background-color:#309; color:#FFF">TOTAL</th>
<th style="background-color:#309; color:#FFF">ADM_STATUS</th>


</tr>
<tr>
<?php
while($row=mysql_fetch_array($result)){
	$fno=$row[0];
	$nam=$row[1];
	$cast=$row[2];
	$code=$row[3];
	$b4=$row[4];
	$tot=$row[5];
	$x="selected";
	$e1="update application set sel_status='".$x."' where form_no=".$fno."";
	$result123=mysql_query($e1);
	if(!$result123){
		echo "failed";}
		else
		//echo "sucess";
	

	echo $fno;
	
	?>
    <tr>
<td><center><?php echo $l;$l++;  ?></td>
<td> <center><?php echo "1"  ?></td>
<td><center><?php echo $fno ?></center></td>
<td><center><?php echo $nam ?></center></td>
<td><center><?php echo $cast ?></center></td>
<td><center><?php echo $code ?></center></td>
<td><center><?php echo $b4 ?></center></td>
<td><center><?php echo $tot ?></center></td>
<td><center> <?php echo $x   ?></td>
</tr>

<?php

}
?>
</body>
</html>