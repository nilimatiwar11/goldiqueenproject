 <?php
 require_once('config.php');

 //echo<pre>

 $her_highness=$_POST['her_highness'];       
 $majestys_digits=$_POST['majesty_digits'];
 $majestys_email=$_POST['majestys_email'];
 $media_link=$_POST['media_link'];
 $age=$_POST['age'];
 $her_kingdom_city=$_POST['her_kingdom_city'];
 //print_r($_FILES);


//print_r($ext_array);
//echo <pre>

	$file=$_FILES['upload_photo']['name'];
	$new_file_name=Date('Ymdhis');
	$ext_array=explode('.',$file);
	

	
	$ext=$ext_array[count($ext_array)-1];
	$file_name=$new_file_name.'.'.$ext;
	$source=$_FILES['upload_photo']['tmp_name'];
	$destination="uploads/".$file_name;
	move_uploaded_file($source, $destination);


 $video_link=$_POST['video_link'];
 $her_story=$_POST['her_story'];
 $created_date=date("Y-m-d H:i:s");


	$insert ="INSERT INTO `register_now` (`her_highness`,`majestys_digits`,`majestys_email`,`media_link`,`age`,`her_kingdom_city`,`upload_photo`,`video_link`,`her_story`) 

  values('$her_highness','$majestys_digits','$majestys_email','$media_link','$age','$her_kingdom_city','$file_name', '$video_link','$her_story')";
 

	if(mysqli_query($conn, $insert)){
header("Location:register_now.php");
	} //or die( mysqli_error($conn) );
	else{
	header("Location:register_now.php");
	}


?>
