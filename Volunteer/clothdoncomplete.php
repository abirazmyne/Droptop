
<?php 
include 'header_volunteer.php';
include '../config.php'; 
session_start();
if (!isset($_SESSION['volusername'])) {
    header("Location: volunteerlogin.php");
}
$id=$_GET['compid'];
if((isset($_POST['submit'])))
{
    $id=$_POST['id'];
  $dlocation = $conn->real_escape_string($_POST['dlocation']);
  $dname = $conn->real_escape_string($_POST['dname']);
  $email = $conn->real_escape_string($_POST['email']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $daddress = $conn->real_escape_string($_POST['daddress']);
  $quantity = $conn->real_escape_string($_POST['quantity']);
  $picked_by = $conn->real_escape_string($_POST['picked_by']);
  $delivery_area = $conn->real_escape_string($_POST['delivery_area']);
  $pname= rand(1000,10000)."_".$FILES["del_proof"]["name"];
  $tname= $_FILES["del_proof"]["tmp_name"];
  $uploads_dir= 'image';
  move_uploaded_file($tname, $uploads_dir.'/'.$pname);
  $sql="UPDATE cloth SET dstatus='Completed', com_status='Completed', delivery_area='$delivery_area', del_proof='$pname' WHERE id=$id";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else
  echo '<script>alert("Message Successfully Sent")</script>';
  header('location:index.php');
  }
?>
		<?php
		  $sql="SELECT * FROM cloth WHERE id=$id";
 			 $res1= $conn->query($sql);
 			 if($res1->num_rows>0)
 			 {
 			while($data=$res1->fetch_assoc()){
   	?>          
     <div class="pickup_con_div">
       <div class="container pickup_conf">
            <form class="form" method="POST">
            <label>Donation ID</label>
                    <input type="text" class="form-control" name="id" placeholder="ID" aria-label="ID" value="<?php echo $data['id']; ?>" readonly>
                    <label>Donor Area</label>
                    <input type="text" class="form-control" name="dlocation" placeholder="Location" aria-label="Location" value="<?php echo $data['dlocation']; ?>" readonly>
                    <label>Donor Name</label>
                    <input type="text" class="form-control" name="dname" placeholder="Name" aria-label="Name" value="<?php echo $data['dname']; ?>" readonly>
                    <label>Donor Email</label>
                    <input type="Email" class="form-control" name="email" placeholder="Email" aria-label="email" value="<?php echo $data['email']; ?>" readonly>
                    <label>Donor Phone Number</label>
                    <input type="text" class="form-control" name="phone" placeholder="Contact Number" aria-label="number" value="<?php echo $data['phone']; ?>" readonly>
                    <label>Donor Address</label>
                    <input type="text" class="form-control" name="daddress" placeholder="Address" aria-label="address" value="<?php echo $data['daddress']; ?>" readonly>
                    <label>Cloth Quantity</label>
                    <input type="text" class="form-control" name="quantity" placeholder="Address" aria-label="address" value="<?php echo $data['quantity']; ?>" readonly>
                    <label>Pickup By</label>
                    <input type="text" class="form-control" name="picked_by" placeholder="Picked By" aria-label="picked_by" value="<?php echo $_SESSION['volusername']; ?>" readonly>
                    <label>Donation Delivery Area</label>
                    <input type="text" class="form-control" name="delivery_area" placeholder="Enter The Location Where You Deliver The Donation" aria-label="delivery_area" required>
                    <label>Delivery Proof</label>
                    <input type="file" class="form-control" name="del_proof" multiple required>
                    <div class="pick_button_wrap" style="margin-top:20px">
                      <input type="submit" class="btn btn-primary" name="submit" value="Complete Delivery" >
                      <a onclick="document.location='fooddelivery.php'" class="btn btn-primary">Cancel</a>
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
    </body>
    </html>
