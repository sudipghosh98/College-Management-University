<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php
session_start();
$pr=$_SESSION['sprice1'];
?>
<style type="text/css">
#admsn1{
	width:100%;
	margin-top:200px;
	height:auto;
	border:thick;
	border-color:#336;	
	
}
</style><div align="center" style="height:500px; width:500px; margin-left:450px">
<fieldset >
<legend align="center" ><h2>CARD DETAILS</h2></legend>


<body bgcolor="#003333" bgproperties="blur" text="#FFFFFF" style="font-style:italic">
<form name="form321" method="post" action="card_db.php">
<center>
<div class="card_details">
<table  align="center" cellpadding="10px" cellspacing="10px" style="font:'Lucida Sans Unicode', 'Lucida Grande', sans-serif">

        <tr>
          <td> CARD NUMBER </td>
          <td> <input type="number" name="card_number" maxlength="16" placeholder="ENTER CARD NUMBER"/> </td>
        </tr>
		
        <tr>
          <td> ACCOUNT NUMBER </td>
          <td> <input type="text" name="a_h_nm" placeholder="ENTER YOUR NAME"/> </td>
        </tr>
	
        <tr>
          <td> CARD TYPE </td>
          <td> :<select name="cardtype" id="c0" >
                <option value="visa">visa</option>
				<option value="maestro">maestro</option>
				<option value="Rupay">Rupay</option>

				</select> </td>
        </tr>
		
        <tr>
          <td> EXPIRY DATE </td>
          <td> <select name="expd"  >
                <option value="01">01</option>
				<option value="02">02</option>
				<option value="03">03</option>
				<option value="04">04</option>
                <option value="05">05</option>
                <option value="06">06</option>
                <option value="07">07</option>
                <option value="08">08</option>
                <option value="09">09</option>
                <option value="10">10</option>
                <option value="11">11</option>
                <option value="12">12</option>
				</select> 
                 <select name="expm"  >
                <option value="2018">2018</option>
				<option value="2019">2019</option>
				<option value="2020">2020</option>
				<option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
				</select> </td>
        </tr>
       
        <tr>
          <td> CVV NUMBER </td>
          <td><input type="password" name="cvv" maxlength="3" minlength="3" /></td>
        </tr>
      
		<tr>
        <td> PIN NUMBER </td>
        <td> <input type="password" name="pno" maxlength="4" minlength="4" /></td>
        </tr>
        
        
        <tr>
          <td> AMOUNT</td>
          <td> <input type="number" name="bln" value="<?php echo $pr ?>"/> </td>
        </tr>
		
           
            </table>
     
        <input type="submit" name="insert" value="PAY"/>
          </div> 
 </center> 
</form>


<center>

</fieldset>
</div>
</center>
</body>
</html>