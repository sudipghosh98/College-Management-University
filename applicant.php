<!DOCTYPE html>
<html>
<head>
	<title>Application List</title>
	<style type="text/css">
	body{
		display: flex;
			
			justify-content: center;
			align-items: center;
	}
		.container{
			display: flex;
		
			justify-content: center;
			align-items: center;

		}
		.container_table{
			display: flex;
			
			justify-content: center;
			align-items: center;
		}
		tr{
			border: 2px;

		}
		table{
			width: 90%;
			padding: 5px;
		}
		th{
			
			color: white;
			background-color: blue;
	
		}
			td{
		padding: 5px;
		text-align: left;
		


			}
			</style>
</head>
<body>
<div class="container">
<div class="container_table">
<?php
require("IMP_connection.php");
$sql="select * from Application";
$result=mysql_query($sql);
?>
<table border="2px">
	<tr>
		<th>
			FORM NUMBER
		</th>
		<th>NAME</th>
		<th>FATHER'S NAME</th>
		<th>DATE OF BIRTH</th>
		<th>CONTACT NUMBER</th>
		<th>EMAIL</th>
		<th>COURSE NAME</th>
	</tr>
	<?php
while($row=mysql_fetch_array($result))
{
	$f_no=$row[0];
$name=$row[1];
$f_name=$row[2];
$dob=$row[3];
$cont=$row[9];
$e_mail=$row[10];
$course=$row[11];
?>
	<tr><td ><center><?php echo $f_no ?></center></td>
<td><?php echo $name ?></td>
<td><?php echo $f_name ?></td>
<td><?php echo $dob ?></td>
<td><?php echo $cont ?></td>
<td><?php echo $e_mail ?></td>

<td><?php echo $course ?></td>
</tr>
<?php
}
?>
</table>
</div>


</div>

</body>
</html>