		<?php 
	

	require_once('config.php');
//echo '<pre>';
//print_r($_POST);

	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$majestys_age=$_POST['majestys_age'];
	$majesty_digits=$_POST['majesty_digits'];
	$message=$_POST['message'];
	$created_date= date("Y-m-d H:i:s");

 //echo
	$insert="INSERT INTO `contact_us`(`name`,`email`,`mobile`,`majestys_age`,`majesty_digits`,`message`) values('$name','$email', '$mobile', '$majestys_age', '$majesty_digits' ,'$message')";
	//die;
	mysqli_query($conn, $insert);
	header('Location:contact_us_thank_you.php');
	
?>