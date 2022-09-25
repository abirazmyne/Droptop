<?php 
include 'header_volunteer.php';
include '../config.php'; 
session_start();
if (!isset($_SESSION['volusername'])) {
    header("Location: volunteerlogin.php");
}
?>
<div class="single-page-banner">
        <div class="section_heading">
          <h2 >Pickup Food</h2>
        </div>
    </div>
<div class="content-box container pickup_food_box">
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
				<th>Action</th>
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
   		<td>
		 <a class="btn btn-primary nav_btn" id="pick_btn_cus" href="pick.php?pickid=<?php echo $data['id']; ?>" class="text-light" name="pickdonation" value="<?php echo $data['dstatus']; ?>" method="POST"><?php echo $data['dstatus']; ?></a>
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
</div>
<div class="volunteer_footer">
	<a href="index.php" class="btn btn-primary">Back To Dashboard</a>
    <a href="volunteerlogout.php" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>