<?php 
include 'header.php';
include 'config.php';
if((isset($_POST['submit'])))
{
    $id=$_POST['id'];
  $dorg = $conn->real_escape_string($_POST['dorg']);
  $dmname = $conn->real_escape_string($_POST['dmname']);
  $email = $conn->real_escape_string($_POST['email']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $dmaddress = $conn->real_escape_string($_POST['dmaddress']);
  $dmamount = $conn->real_escape_string($_POST['dmamount']);
  $dmtxn = $conn->real_escape_string($_POST['dmtxn']);
  $sql="UPDATE moneydonation SET dorg='$dorg', dmname='$dmname', email='$email', phone='$phone', dmaddress='$dmaddress', dmamount='$dmamount', dmtxn='$dmtxn', dmstatus='Verified' WHERE id=$id";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else
  echo '<script>alert("Message Successfully Sent")</script>';
  header('location:money-donation.php');
  }
		  $sql = "SELECT * FROM moneydonation WHERE id=''";
      $res1 = $conn->query($sql);
 			 if($res1->num_rows>0){
 			while($data=$res1->fetch_assoc()){
   	?>         
     <div class="pickup_con_div">
       <div class="container pickup_conf">
            <form class="form" method="POST">
            <label>Donation ID</label>
                    <input type="text" class="form-control" name="id" placeholder="ID" aria-label="ID" value="<?php echo $data['id']; ?>" readonly>
                    <label>Donate To This Organization</label>
                    <input type="text" class="form-control" name="dorg" placeholder="Location" aria-label="Location" value="<?php echo $data['dorg']; ?>" readonly>
                    <label>Donor Name</label>
                    <input type="text" class="form-control" name="dmname" placeholder="Name" aria-label="Name" value="<?php echo $data['dmname']; ?>" readonly>
                    <label>Donor Email</label>
                    <input type="Email" class="form-control" name="email" placeholder="Email" aria-label="email" value="<?php echo $data['email']; ?>" readonly>
                    <label>Donor Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Contact Number" aria-label="number" value="<?php echo $data['phone']; ?>" readonly>
                    <label>Donor Email</label>
                    <input type="text" class="form-control" name="dmaddress" placeholder="Address" aria-label="address" value="<?php echo $data['dmaddress']; ?>" readonly>
                    <label>Donation Amount</label>
                    <input type="text" class="form-control" name="dmamount" placeholder="Address" aria-label="address" value="<?php echo $data['dmamount']; ?>" readonly>
                    <label>Transection ID</label>
                    <input type="text" class="form-control" name="dmtxn" placeholder="Picked By" aria-label="picked_by" value="<?php echo $data['dmtxn']; ?>" readonly>
                    <div class="pick_button_wrap">
                      <input type="submit" class="btn btn-primary" name="submit" value="Verify Donation" >
                      <a onclick="document.location='dashboard.php?cat=donation&subcat=money-donation'" class="btn btn-primary">Cancel</a>
                    </div>
            </form>
       </div>
                </div>
                <?php
}
}else{

?>
<tr>
	<td colspan="6">No Message</td>
</tr>
<?php } ?>

          