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
          <h2 >Money Donation</h2>
        </div>
    </div>
<div class="content-box container pickup_food_box">
	<div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
				<th>Ogranization</th>
				<th>Name</th>
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
        <td><?php echo $data['dmamount']; ?> Taka</td>
		<td><?php echo $data['dmstatus']; ?></td>
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