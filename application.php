<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>


<script type="application/javascript"> 
function f125() {
	mail=document.form22.e_mail.value;
	at=mail.indexOf("@");
	dot=mail.lastIndexOf(".");
	if(at<0 || (dot-at <=2)){
	alert("invalid email");
		document.form22.e_mail.focus();
		return false;
	}
	
	dob=document.form22.dob.value;
	e=new Date();
	//document.write(d);
		//document.write(e);
		y1=e.getFullYear();
			
			d2=new Date(dob);
						//document.write(d2);
						y2=d2.getFullYear();
												
												
												y3=y1-y2;
		if(y3<18){
		alert ('invalid date minimum of 18 year old');
		document.form22.dob.focus();
			return false;
		}
	}
	
	
	
</script>
<body style="margin-top:90px" text="#FFFFFF" background="bg1.jpg">
<div align="center" style="height:500px; width:500px; margin-left:450px">
<fieldset >
<legend align="center" ><h3>PERSONAL DETAILS</h3></legend>
<form method="post" name="form22" action="application_db.php"  autocomplete="off" onsubmit="return f125();">
<center>

<table  cellspacing="10px" >

        <tr>
          <td> NAME </td>
          <td> <input type="text" name="name" required="required" pattern="[A-Za-z ]+" title="Only Alphabet"/> </td>
        </tr>
		
        <tr>
          <td> FATHER NAME </td>
          <td> <input type="text" name="fname" required="required"  pattern="[A-Za-z ]+" title="Only Alphabet"/> </td>
        </tr>
		
        <tr>
          <td> ADDRESS </td>
          <td> <input type="text" name="add" required="required"/> </td>
        </tr>
		
        <tr>
          <td>  CITY </td>
          <td> <input type="text" name="city" required="required"/> </td>
        </tr>
      
        <tr>
          <td> STATE </td>
          <td> <input type="text" name="state" required="required"/> </td>
        </tr>
	
		<tr>
        <td> CASTE</td>
        <td> 
        <select name="caste"  >
                <option value="GENERAL">GENERAL</option>
				<option value="SC/ST">SC/ST</option>
				
				</select> 
        </td>
        </tr>
        <tr>
          <td> Date of Birth: </td>
          <td> <input type="date" name="dob"  id="dob" required="required"/ > </td>
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
        <td> <input type="text" name="e_mail" required="required"/></td>
        </tr>
     

        <tr>
          <td> Mobile No: </td>
          <td> <input type="number" name="mob" id="mob" min="5000000000" max="9999999999"  required="required"/> </td>
        </tr>
		
        
</table>
<br />

          <input type="submit" name="insert" value="     Next     " style="background-color:#3CF transparent" style="color:#0F6" style="outline-style:inset" />
          
 </center> 
</form>

</fieldset>
</div>
</body>
</html>