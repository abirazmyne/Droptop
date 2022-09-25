<?php 
include 'donheader.php';
include '../config/database.php';
$id=$_GET['mverifyid'];
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
  $verified = $conn->real_escape_string($_POST['submit']);
  $sql="UPDATE moneydonation SET dorg='$dorg', dmname='$dmname', email='$email', phone='$phone', dmaddress='$dmaddress', dmamount='$dmamount', dmtxn='$dmtxn', dmstatus='$verified' WHERE id=$id";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else
  echo '<script>alert("Message Successfully Sent")</script>';
  header('location:../dashboard.php?cat=donation&subcat=money-donation');
  }
  if((isset($_POST['notsubmit'])))
{
    $id=$_POST['id'];
  $dorg = $conn->real_escape_string($_POST['dorg']);
  $dmname = $conn->real_escape_string($_POST['dmname']);
  $email = $conn->real_escape_string($_POST['email']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $dmaddress = $conn->real_escape_string($_POST['dmaddress']);
  $dmamount = $conn->real_escape_string($_POST['dmamount']);
  $dmtxn = $conn->real_escape_string($_POST['dmtxn']);
  $notverified = $conn->real_escape_string($_POST['notsubmit']);
  $sql="UPDATE moneydonation SET dorg='$dorg', dmname='$dmname', email='$email', phone='$phone', dmaddress='$dmaddress', dmamount='$dmamount', dmtxn='$dmtxn', dmstatus='$notverified' WHERE id=$id";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else
  echo '<script>alert("Message Successfully Sent")</script>';
  header('location:../dashboard.php?cat=donation&subcat=money-donation');
  }
		  $sql = "SELECT * FROM moneydonation WHERE id=$id";
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
                    <div class="pick_button_wrap">
                      <input type="submit" class="ver_btn" name="submit" value="Verified" >
                      <input type="submit" class="not_ver_btn" name="notsubmit" value="Not Verified" >
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
<style>
 .pickup_conf{
      max-width: 700px!important;
      margin: 0px auto;
      padding: 50px;
      box-shadow: 0px 12px 18px -6px rgb(0 0 0 / 30%);
      width:100%;
    }
    .pickup_conf label{
      font-weight:700;
      margin-bottom:10px;
      width: 100%;
      display: block;
    }
    .pickup_conf input[type=text], .pickup_conf input[type=email]{
      margin-bottom:15px;
      background-color: #f7f7f7!important;
      padding:8px;
      width: 100%;
      display: block;
    width: 100%;
    padding: 10px;
    font-size: 1rem;
    font-weight: 400;
    line-height: 1.5;
    color: #212529;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color .15s ease-in-out,box-shadow .15s ease-in-out;
    }
    .pickup_con_div{
      padding: 80px 0px;
      display: flex;
      flex-direction: column;
      justify-content: center;
    }
    .pick_button_wrap{
      display: flex;
      justify-content: flex-end;
      align-items: flex-start;
     
    }
    .pick_button_wrap a{
      margin-left:15px;
      background-color: #0F1521;
      background: #f74f22;
    }

    .ver_btn{
      margin-right: 15px;
      background: #f74f22;
  color: #ffffff!important;
  font-size: 18px;
  font-weight: 700;
  border: none!important;
  padding: 13px 45px !important;
  text-transform: uppercase
    }
    .not_ver_btn{

      background: #232323;
  color: #ffffff!important;
  font-size: 18px;
  font-weight: 700;
  border: none!important;
  padding: 13px 45px !important;
  text-transform: uppercase
    }


    .ver_btn:hover{
      background: #232323;

    }



  
</style>

          