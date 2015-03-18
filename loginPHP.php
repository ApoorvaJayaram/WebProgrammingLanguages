<?php
session_start();
$ID = htmlspecialchars($_POST['user']);
$Password = htmlspecialchars($_POST['pass']);
$role = htmlspecialchars($_POST['roles']);
$_SESSION['counter']= $ID;
echo $role;
$con = mysqli_connect('localhost:3306','root','','car_dealership');
if (!$con)
{
	die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"customer");

if(!empty($ID))
{
$sql="SELECT * From customer WHERE email_id = '".mysqli_real_escape_string($con,$ID)."'";
$result = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($result);
$pass=$row['password'];
		if(!empty($row['email_id']))
			{
				if(strcmp($pass,$Password)== 0)
				{
					echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE...";				
				}
				else  
				{
					header( 'Location: http://localhost:8080/Workspace/DatabaseDesign/loginHTML.php?check=true');
					
				}
			}
		else {
			header( 'Location: http://localhost:8080/Workspace/DatabaseDesign/loginHTML.php?check1=true');
			   
			 }
			}
else {
	echo 'SORRY... YOU must ENTER a USERNAME ... PLEASE RETRY...';
}


			
			


?>
