// JavaScript Document

function f125() {
	mail=docuement.form22.e_mail.value;
	at=mail.indexOf("@");
	dot=mail.lastIndexOf(".");
	if(at<0 || (dot-at <=2)){
	alert("invalid email");
		docuement.form22.e_mail.focus();
		return false;
		
		
	}
	
}