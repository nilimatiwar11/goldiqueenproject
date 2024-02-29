<?php
require_once('config.php');
$id=$_GET['regi_id'];
//echo 
$delete="DELETE FROM register_now where id=$id";
//die;
//image uploading 
$query="SELECT * FROM register_now where id=$id";
$query=mysqli_query($conn,$query); 
mysqli_query($conn, $delete);
$result = mysqli_fetch_assoc($query);
$file_name= $result['upload_photo'];
// delete that image from  uploads folder
unlink('uploads/'.$file_name);
mysqli_query($conn,$delete);
header("Location:register_now_view.php");
?>