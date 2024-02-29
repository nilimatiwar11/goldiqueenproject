<?php 
	require_once('config.php');
	//require_once('header.php');
	$select="SELECT * FROM contact_us";
	$query=mysqli_query($conn, $select) //or die(mysqli_error($conn));

?>
	 <div class="box">
			
					<!-- /.box-header -->
		 <div class="box-body">
			<table id="example1" class="table table-bordered table-striped bg-info">
				<thead>
					<tr>
					 <th>id</th>
					 <th>name</th>
					 <th>email</th>
					 <th>mobile</th>
					 <th>majestys_age</th>
					 <th>majesty_digits</th>
					<th>message</th>
					<th>created_date</th>	  
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
				<td><?php echo $res['name']; ?></td>
				<td><?php echo $res['email']; ?></td>
				<td><?php echo $res['mobile']; ?></td>
				<td><?php echo $res['majestys_age'];?> </td> 
				 <td><?php echo $res['majesty_digits']; ?></td>
				 <td><?php echo $res['message']; ?></td>
				 <td><?php echo $res['created_date']; ?></td>
							       
			<a href="delete.php?user_id=<?php echo $res->id;?>">Delete</a>
				<a href="edit.php?user_id=<?php echo $res->id;?>">Edit</a>
						
		</tr>
		<?php } ?>
	</tbody>
</table>



