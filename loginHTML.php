<!DOCTYPE html>
<html>
<head>
<meta charset="ISO-8859-1">
<title>OTS</title>
<script src="login.js"></script>
<link href="style.css" type="text/css" rel="stylesheet" />
</head>
<body id="body-color">

  <div class="body"></div>
 		<div class="grad"></div>
		<div class="header">
			<div>O<span>T</span>S(OIL <span>TRANSACTION</span> SYSTEM)</div>
		</div>
		<br>
		 <div class="login">
		 <fieldset style="width:80%"><legend class="font">LOG-IN HERE</legend>
  <form name="myForm" onsubmit="validateForm()" method="POST" action="loginPHP.php"> 
    <br><input type="text" placeholder="username" name="user" size="40" required><br> 
  <br><input type="password" placeholder="password" name="pass" size="40" required>
  <br> 

<br><br>
<input id="button"  id="bttn" class="login1" type="submit" name="submit" value="Log-In">
<div class="font">
<?php
$check = boolVal(isset($_GET["check"]));
if ($check){
	echo 'SORRY... YOU ENTERED WRONG PASSWORD... PLEASE RETRY...';
}
?>
<?php
$check = boolVal(isset($_GET["check1"]));
if ($check){
	echo 'SORRY... YOU must ENTER a Valid USERNAME ... PLEASE RETRY...';
}
?>
</div>
 </form>
 </fieldset> 
 <a href="signUpHTML">Sign Up!Here</a>
  </div>

   </body>
</html>
