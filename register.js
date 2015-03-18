/**
 * 
 */
// After form loads focus will go to User id field.  
  function firstfocus()  
  {  
  var uid = document.registration.fname.focus();  
  return true;  
  }  
//This function will validate Name.  
  function allLetter()  
  {   
  var uname = document.registration.fname;  
  var letters = /^[A-Za-z]+$/;  
  if(uname.value.match(letters))  
  {  
  // Focus goes to next field i.e. Address.  
  document.registration.lname.focus();
  document.getElementById('fnameError').innerHTML= " ";
  return true;  
  }  
  else  
  {  
	  document.getElementById('fnameError').innerHTML= "Firstname must have alphabet characters only";  
  uname.focus();  
  return false;  
  }  
  }  
//This function will validate Name.  
  function allLetter1()  
  {   
  var uname1 = document.registration.lname;  
  var letters1 = /^[A-Za-z]+$/;  
  if(uname1.value.match(letters1))  
  {  
  // Focus goes to next field i.e. Address.  
  document.registration.email.focus();
  document.getElementById('lnameError').innerHTML = " ";
  return true;  
  }  
  else  
  { 
	  document.getElementById('lnameError').innerHTML = "Lastname must have alphabet characters only";
  //alert('Lastname must have alphabet characters only');  
  uname1.focus();  
  return false;  
  }  
  } 
//This function will validate Email.  
  function ValidateEmail()  
  {  
  var uemail = document.registration.email;  
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
  if(uemail.value.match(mailformat))  
  {   
  document.getElementById('emailError').innerHTML = " ";
  return true;  
  }  
  else  
  {  
	  document.getElementById('emailError').innerHTML = "You have entered an invalid email address!";
  //alert("You have entered an invalid email address!");  
  uemail.focus();  
  return false;  
  }  
  } 
//This function will validate Address.  
  function alphanumeric()  
  {   
  var uadd = document.registration.address;  
  var letters = /^[0-9a-zA-Z]+$/;  
  if(uadd.value.match(letters))  
  {  
  // Focus goes to next field i.e. Country.  
  document.registration.phone.focus();  
  document.getElementById('addressError').innerHTML = " "
  return true;  
  }  
  else  
  {  
	  document.getElementById('addressError').innerHTML = "User address must have alphanumeric characters only"
  //alert('User address must have alphanumeric characters only');  
  uadd.focus();  
  return false;  
  }  
  }  
//This function will validate Phone.
  function validatePhone() {
	  var ph = document.registration.phone; 
	    var stripped = ph.value.replace(/[\(\)\.\-\ ]/g, '');     

	   if ( ph.value == "") {
		   document.getElementById('phoneError').innerHTML = "You didn't enter a phone number.\n";
	        //alert("You didn't enter a phone number.\n");
	        ph.focus();
	        return false
	        //fld.style.background = 'Yellow';
	    } else if (isNaN(parseInt(stripped))) {
	    	document.getElementById('phoneError').innerHTML = "The phone number contains illegal characters.\n";
	    	//alert("The phone number contains illegal characters.\n");
	    	ph.focus();
	    	return false
	        //fld.style.background = 'Yellow';
	    } else if (!(stripped.length == 10)) {
	    	document.getElementById('phoneError').innerHTML = "The phone number is the wrong length. Make sure you included an area code.\n";
	    	//alert("The phone number is the wrong length. Make sure you included an area code.\n");
	    	ph.focus();
	    	return false
	        //fld.style.background = 'Yellow';
	    } 
	    else
	   {  
		   // Focus goes to next field i.e. Country.  
		     
		   document.getElementById('phoneError').innerHTML = " ";
		   return true;  
		   }  
	    
	}
// This function will validate Password.  
  function passid_validation()  
  {  
  var passid = document.registration.pswd;
  var passid1 = document.registration.password2;
  if (!(passid.value == passid1.value)) { 
	  
	  document.getElementById('password2Error').innerHTML = "Password you entered does not match ";
  //alert("Password you enteres does not match ");  
    
  return false;  
  }  
  else
  {  	     
	   document.getElementById('password2Error').innerHTML = " ";
	   return true;  
	   } 
    }  
