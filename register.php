<?php
$fname = htmlspecialchars($_POST['fname']);
$lname = htmlspecialchars($_POST['lname']);
$email = htmlspecialchars($_POST['email']);
$address = htmlspecialchars($_POST['address']);
$phone = htmlspecialchars($_POST['phone']);
$password = htmlspecialchars($_POST['pswd']);


$con = mysqli_connect('localhost:3306','root','','car_dealership');
if (!$con)
{
	die('Could not connect: ' . mysqli_error($con));
}
echo 'connected';
mysqli_select_db($con,"customer");


$sql="INSERT INTO customer ".
       "(customer_fname, customer_lname, phone_number, address, email_id, password)".
       "VALUES('$fname','$lname','$phone','$address','$email','$password')";
$result = mysqli_query($con,$sql);
header( 'Location: http://localhost:8080/Workspace/WebProgrammingLanguages/loginHTML.php' );
?>