<div class="row food_don_admin">
		<div class="col">
			<h4 style="margin-bottom:15px;">Food Donation</h4>
<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
				<th>Area</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
                <th>Full Address</th>
                <th>Food Quantity</th>
				<th>Status</th>
				<th>Picked By</th>
			</tr>
			<?php
		  $sql="SELECT * FROM food ORDER BY id DESC";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {$i=1;
 			while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
		<td scope="row"><?php echo $data['id']; ?></td>
   		<td><?php echo $data['dlocation']; ?></td>
   		<td><?php echo $data['dname']; ?></td>
   		<td><?php echo $data['email']; ?></td>
   		<td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['daddress']; ?></td>
        <td><?php echo $data['quantity']; ?></td>
		<td><?php echo $data['dstatus']; ?></td>
		<td><?php echo $data['picked_by']; ?></td>
   	</tr>
   	<?php
   $i++;}
}else{

?>
<tr>
	<td colspan="6">No Message</td>
</tr>
<?php } ?>

		</table>
	</div>
		</div>
</div>