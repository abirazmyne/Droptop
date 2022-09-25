<?php 
include 'header.php';
include 'config.php';
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}
$username= $_SESSION['username'];
?>
<?php
  $sql1="SELECT * FROM users WHERE username='$username'";
  $res1= $conn->query($sql1);
  if($res1->num_rows>0)
  {
   while($data=$res1->fetch_assoc()){
   	?>
<div class="container" style="padding:50px 0px;">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $data['username']; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $data['name']; ?></p>
                      <p class="text-muted font-size-sm"><?php echo $data['email']; ?></p>
                      <button class="btn btn-primary" onclick="document.location='logout.php'">Logout</button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="card mb-3">
                <div class="card-body">
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Full Name</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['name']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Email</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['email']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Phone</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['phone']; ?>
                    </div>
                  </div>
                  <hr>
                  <div class="row">
                    <div class="col-sm-3">
                      <h6 class="mb-0">Address</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['useraddress']; ?>
                    </div>
                  </div>
                </div>
              </div>
              <?php
 }
}?>

              <div class="row gutters-sm">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h4 class="d-flex align-items-center mb-3">Food Donation History</h4>
                      <div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
                <th>Food Quantity</th>
				<th>Status</th>
                <th>Date</th>
                <th>Time</th>
			</tr>
			<?php
		  $sql="SELECT * FROM food WHERE donorusername='$username'";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {$i=1;
 			while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
		<td scope="row"><?php echo $data['id']; ?></td>
        <td><?php echo $data['quantity']; ?></td>
		<td><?php echo $data['dstatus']; ?></td>
        <td><?php echo $data['donatedate']; ?></td>
        <td><?php echo $data['donatetime']; ?></td>
   	</tr>
   	<?php
   $i++;}
}else{

?>
<tr>
	<td colspan="6">No Donation</td>
</tr>
<?php } ?>

		</table>
	</div>
  </div>
  </div>
  </div>
  </div>
  <div class="row gutters-sm" style="margin-top:15px">
  <div class="col">
  <div class="card h-100">
  <div class="card-body">
  <h4 class="d-flex align-items-center mb-3">Cloth Donation History</h4>
  <div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
                <th>Cloth Quantity</th>
				<th>Status</th>
                <th>Date</th>
                <th>Time</th>
			</tr>
			<?php
		  $sql="SELECT * FROM cloth WHERE donorusername='$username'";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {$i=1;
 			while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
		<td scope="row"><?php echo $data['id']; ?></td>
        <td><?php echo $data['quantity']; ?></td>
		<td><?php echo $data['dstatus']; ?></td>
        <td><?php echo $data['donatedate']; ?></td>
        <td><?php echo $data['donatetime']; ?></td>
   	</tr>
   	<?php
   $i++;}
}else{

?>
<tr>
	<td colspan="6">No Donation</td>
</tr>
<?php } ?>

		</table>
	</div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row gutters-sm" style="margin-top:15px">
  <div class="col">
  <div class="card h-100">
  <div class="card-body">
  <h4 class="d-flex align-items-center mb-3">Money Donation History</h4>
  <div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
        <th>Organization</th>
				<th>Status</th>
        <th>Date</th>
        <th>Time</th>
			</tr>
			<?php
		  $sql="SELECT * FROM moneydonation WHERE donorusername='$username'";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {$i=1;
 			while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
		<td scope="row"><?php echo $data['id']; ?></td>
        <td><?php echo $data['dorg']; ?></td>
		<td><?php echo $data['dmstatus']; ?></td>
        <td><?php echo $data['donatedate']; ?></td>
        <td><?php echo $data['donatetime']; ?></td>
   	</tr>
   	<?php
   $i++;}
}else{

?>
<tr>
	<td colspan="6">No Donation</td>
</tr>
<?php } ?>

		</table>
	</div>
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
    </div>

<?php 
      include 'footer.php';
    ?>
    