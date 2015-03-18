<?php
$username = $_POST['username'];

	$con = mysqli_connect('localhost:3306','root','','car_dealership');
if (!$con)
{
	die('Could not connect: ' . mysqli_error($con));
}
echo'connected';
mysqli_select_db($con,"customer");

	
$sql = "SELECT customer_ID FROM customer WHERE customer_fname= '". $username ."'";
$result = mysqli_query($con,$sql);
$rows=mysqli_num_rows($result);
if(mysqli_num_rows($result)>0){
//and we send 0 to the ajax request
echo 0;
}else{
	//else if it's not bigger then 0, then it's available '
	//and we send 1 to the ajax request
	echo 1;
}

	
	//close db connection
	mysqli_close($con);

?>