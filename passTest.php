<!DOCTYPE html>
<html>
<head>
    <title>Password Verification</title>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="pass.js"></script>
<link href="pass.css" type="text/css" rel="stylesheet" />
</head>
<body>
    <div id="container">
        <label for="pswd">Password:</label>
            <span><input id="pswd" type="password" name="pswd" /></span>
            <button type="submit">Register</button>
    </div>
    <div id="pswd_info">
    <h4>Password must meet the following requirements to be strong enough:</h4>
    <ul>
        <li id="letter" class="invalid">At least <strong>one letter</strong></li>
        <li id="capital" class="invalid">At least <strong>one capital letter</strong></li>
        <li id="number" class="invalid">At least <strong>one number</strong></li>
        <li id="length" class="invalid">Be at least <strong>8 characters</strong></li>
    </ul>
</div>
</body>
</html>