<?php 
	require_once('config.php');
	require_once('header.php');
	$select="SELECT * FROM register_now";
	$query=mysqli_query($conn, $select) //or die(mysqli_error($conn));

?>

     <div class="box">
			
					<!-- /.box-header -->
		 <div class="box-body">
				 <table id="example1" class="table table-bordered table-striped bg-info">
					<thead>
						<tr>
							 <th>id</th>
							  <th>her_highness</th>
							  <th>majestys_digits</th>
							  <th>majestys_email</th>
							  <th>media_link</th>
							  <th>age</th>
							  <th>her_kingdom_city</th>
							  <th>upload_photo</th>
							  <th>video_link</th>
							  <th>her_story</th>
							  <th>created_date</th>
							  <th>delete</th>
							  

							  
						</tr>
				    </thead>
				<tbody>
	<?php 
	$i=1;
         while($res=mysqli_fetch_assoc($query)){

			//print_r($res);die;
			?>
            <tr>
			      <td><?php echo $i++; ?></td>
				  <td><?php echo $res['her_highness']; ?></td>
				  <td><?php echo $res['majestys_digits']; ?></td>
				  <td><?php echo $res['majestys_email']; ?></td>
				  <td><?php echo $res['media_link'];?> </td>
				  <td><?php echo $res['age']; ?></td>
				  <td><?php echo $res['her_kingdom_city']; ?></td>
				  <td><img src="uploads/<?php echo $res['upload_photo']; ?>" height="100" width="100"></td>
				  <td><?php echo $res['video_link'];?></td>
                  <td><?php echo $res['her_story'];?></td>
                  <td><?php echo $res['created_date']; ?></td>

                 
							       
			 <th><button class="btn btn-block btn-warning btn-sm text-bold"><a href="javascript:" onclick="delete_regi(<?php echo $res['id']; ?>)">Delete</a></button></th>
			  </tr>

		<?php } ?>
	</tbody>
</table>


<script>



		function delete_regi(id){
			 alert("Do You sure Want To Delete");
			var c=confirm('Do You Sure Want To Delete?')
			if(c==true){
			alert("Deleted Successfully")      
			window.location.href="register_delete.php?regi_id="+id;
			}
			else{
				window.location.href="register_now_view.php";
			}
		 }</script>