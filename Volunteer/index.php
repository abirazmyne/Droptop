<?php 
include 'header_volunteer.php';
include '../config.php'; 
session_start();
if (!isset($_SESSION['volusername'])) {
    header("Location: volunteerlogin.php");
}
$username= $_SESSION['volusername'];
?>
      <div class="single-page-banner">
        

        <div class="section_heading">
        <?php echo "<h2>Welcome " . $_SESSION['volusername'] . "</h2>"; ?>
        </div>
 
       </div>
<?php
  $sql="SELECT * FROM volunteer WHERE volusername='$username'";
  $res1= $conn->query($sql);
  if($res1->num_rows>0)
  {$i=1;
 while($data=$res1->fetch_assoc()){
   	?>
<div class="container" style="padding-top:50px; padding-bottom:20px">
    <div class="main-body">
          <div class="row gutters-sm">
            <div class="col-md-4 mb-3">
              <div class="card">
                <div class="card-body">
                  <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                      <h4><?php echo $data['volusername']; ?></h4>
                      <p class="text-secondary mb-1"><?php echo $data['name']; ?></p>
                      <p class="text-muted font-size-sm"><?php echo $data['orgname']; ?></p>
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
                      <h6 class="mb-0">Volunteer Name</h6>
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
                      <h6 class="mb-0">Organization</h6>
                    </div>
                    <div class="col-sm-9 text-secondary">
                    <?php echo $data['orgname']; ?>
                    </div>
                  </div>
                  <div style="margin-top:30px">
                  <button class="btn btn-primary" onclick="document.location='pickdonation.php'" style="margin-right:15px;">Pick Donation</button>
                  <button class="btn btn-primary" onclick="document.location='volunteerlogout.php'">Logout</button>
                  </div>
                </div>
              </div>
              <?php
 $i++;}
}?>
            </div>
          </div>

  </div>
</div>
<div class="container" style="padding-bottom:50px">
    <div class="main-body">
              <div class="row gutters-sm">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h4 class="d-flex align-items-center mb-3">Food Donation History</h4>
                      <div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
        <th>Donor Name</th>
        <th>Donor Phone</th>
        <th>Food Quantity</th>
				<th>Status</th>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>
			</tr>
			<?php
		  $sql="SELECT * FROM food WHERE picked_by='$username'";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {$i=1;
 			while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
		<td scope="row"><?php echo $data['id']; ?></td>
        <td><?php echo $data['dname']; ?></td>
        <td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['quantity']; ?></td>
		<td><?php echo $data['dstatus']; ?></td>
        <td><?php echo $data['donatedate']; ?></td>
        <td><?php echo $data['donatetime']; ?></td>
        <td><a class="btn btn-primary nav_btn" id="pick_btn_cus" href="fooddoncomplete.php?compid=<?php echo $data['id']; ?>" class="text-light" name="pickdonation" value="<?php echo $data['com_status']; ?>" method="POST"><?php echo $data['com_status']; ?></a></td>
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
              <!-- Cloths -->
            <div class="row gutters-sm" style="margin-top:15px">
                <div class="col">
                  <div class="card h-100">
                    <div class="card-body">
                      <h4 class="d-flex align-items-center mb-3">Cloth Donation History</h4>
                      <div class="table-responsive">
		<table class="table">
			<tr>
				<th>Donation ID</th>
        <th>Donor Name</th>
        <th>Donor Phone</th>
        <th>Cloth Quantity</th>
				<th>Status</th>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>
			</tr>
			<?php
		  $sql="SELECT * FROM cloth WHERE picked_by='$username'";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {$i=1;
 			while($data=$res1->fetch_assoc()){
   	?>
   	<tr>
		<td scope="row"><?php echo $data['id']; ?></td>
        <td><?php echo $data['dname']; ?></td>
        <td><?php echo $data['phone']; ?></td>
        <td><?php echo $data['quantity']; ?></td>
		<td><?php echo $data['dstatus']; ?></td>
        <td><?php echo $data['donatedate']; ?></td>
        <td><?php echo $data['donatetime']; ?></td>
        <td><a class="btn btn-primary nav_btn" id="pick_btn_cus" href="clothdoncomplete.php?compid=<?php echo $data['id']; ?>" class="text-light" name="pickdonation" value="<?php echo $data['com_status']; ?>" method="POST"><?php echo $data['com_status']; ?></a></td>
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