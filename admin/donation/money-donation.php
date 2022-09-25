<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
				<th>Organization</th>
				<th>Name</th>
				<th>Email</th>
				<th>Phone Number</th>
                <th>Address</th>
                <th>Amount</th>
				<th>Status</th>
			</tr>
			<?php
		  $sql="SELECT * FROM moneydonation ORDER BY id DESC";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {$i=1;
 			while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
		<td scope="row"><?php echo $data['id']; ?></td>
   		<td><?php echo $data['dorg']; ?></td>
   		<td><?php echo $data['dmname']; ?></td>
   		<td><?php echo $data['email']; ?></td>
   		<td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['dmaddress']; ?></td>
        <td><?php echo $data['dmamount']; ?> Taka</td>
   		<td>
		 <a class="btn btn-primary nav_btn" href="donation/moneyverify.php?mverifyid=<?php echo $data['id']; ?>" class="text-light" name="moneyverify" value="<?php echo $data['dmstatus']; ?>" method="POST"><?php echo $data['dmstatus']; ?></a>
		   <!--<form class="form" action="fooddelivery.php" method="POST">
			<input type="submit" name="pickdonation" value="Pick" style="border:none!important" class="btn btn-primary nav_btn">
		   </form>-->
		</td>
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