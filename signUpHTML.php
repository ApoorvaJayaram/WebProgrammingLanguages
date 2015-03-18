
<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>CD</title>
<script src="register.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="ajaxTest.js"></script>
<link href="reg.css" type="text/css" rel="stylesheet" />
<script src="pass.js"></script>
<link href="pass.css" type="text/css" rel="stylesheet" />
</head>
<body onload="firstfocus()">
<form id='register' class="contact_form" name='registration' action='register.php' method='post'
    accept-charset='UTF-8'>
<fieldset >
<legend>Register</legend>
 <br><input type='hidden' name='submitted' id='submitted' value='1'/> <br>
<label for='fname' >Your First Name: </label>
 <br><input type='text' name='fname' id='name' maxlength="50" required onblur="allLetter()"/> <br><br>
 <span id="fnameError"></span>
 <label for='lname' >Your Last Name: </label>
 <br><input type='text' name='lname' id='name' maxlength="50" required onblur="allLetter1()"/> <br><br>
 <span id="lnameError"></span>
<label for='email' >Email Address:</label>
 <br><input type='text'   id="username" name='email' maxlength="50" required onblur= "ValidateEmail()" /> 
 <br><br>
 <input type='button' id='check_username_availability' value='Check Availability' name="button">
<div id='username_availability_result'></div>
<span id="emailError"></span><div id="status"></div>
<br><label for='address' >Address:</label>
 <br><input type='text' name='address' id='address' maxlength="50" required onblur="alphanumeric()"/> <br><br>
 <span id="addressError"></span>
 <label for='phone' >Phone:</label>
 <br><input type='text' name='phone' id='phone' maxlength="50" required onblur="validatePhone()"/> <br><br>
 <span id="phoneError"></span>
  <br>
<label for="pswd">Password:</label>
            <span><input id="pswd" type="password" name="pswd" /></span>
            
   
    <div id="pswd_info">
    <h4>Password must meet the following requirements to be strong enough:</h4>
    <ul>
        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
        <li id="number" class="invalid">At least <strong>one number</strong></li>
        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
    </ul>
</div>
<br><label for='password2' >Confirm Password:</label><br>
 <input type="password" required  name="password2"  onblur="passid_validation()"/>
 <span id="password2Error"></span>
 <p><input type="checkbox" required name="terms"> I accept the <u>Terms and Conditions</u></p><br>
 <br><input type='submit' name='Submit' value='SignUp'  /><br><br>
 </fieldset>
</form>
</body>
</html>
