<?php 
include 'header.php';
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}
error_reporting(0);
$users= $_SESSION['username'];
if((isset($_POST['submit'])))
{
  $dorg = $conn->real_escape_string($_POST['dorg']);
  $dmname = $conn->real_escape_string($_POST['dmname']);
  $email = $conn->real_escape_string($_POST['email']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $dmaddress = $conn->real_escape_string($_POST['dmaddress']);
  $dmamount = $conn->real_escape_string($_POST['dmamount']);
  $donorusername = $conn->real_escape_string($_POST['donorusername']);
  $sql="INSERT INTO moneydonation (dorg, dmname, email, phone, dmaddress, dmamount, donorusername ) VALUES ('".$dorg."', '".$dmname."', '".$email."', '".$phone."', '".$dmaddress."', '".$dmamount."', '".$donorusername."')";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else
  echo '<script>alert("Message Successfully Sent")</script>';
  header("Location: easy-payment.php?amount=$dmamount");
  }
?>  
    <div class="container overflow-hidden px-4 donate_food_sec">
        <div class="row gx-5">
          <div class="col dfs_right_side">
            <div class="p-1">
            <?php
  $sql1="SELECT * FROM users WHERE username='$users'";
  $res1= $conn->query($sql1);
  if($res1->num_rows>0)
  {
   while($data=$res1->fetch_assoc()){
   	?>
            <form class="form" method="POST">
                <div class="dfs_location">
                <h4 class="dfs_form_heading">Enter Your Details Here To Donate This Project</h4>
                <div>
                    <select class="form-select" name="dorg" aria-label="Default select example">
                    <option selected value="Donate For Syllet">Donate For Syllet</option>
                    <option value="Chandrabindu">Chandrabindu</option>
                    <option value="Biddyananda">Biddyananda</option>
                    <option value="Chandrabindu">Ashar Duar</option>
                    <option value="Jago Foundation">Jago Foundation</option>
                    <option value="1 Takar Ahar">1 Takar Ahar</option>
                    <option value="Donate Us To Develop Us">Donate Us To Develop Our Social Service</option>
                  </select>
                </div>
                </div>
                    <input type="text" class="form-control" name="dmname" id="dname" placeholder="Name" aria-label="Name" value="<?php echo $data['name']; ?>">
                    <input type="Email" class="form-control" name="email" placeholder="Email" aria-label="email" value="<?php echo $data['email']; ?>">
                    <input type="text" class="form-control" name="phone" placeholder="Contact Number" aria-label="number" value="<?php echo $data['phone']; ?>">
                    <input type="text" class="form-control" name="dmaddress" placeholder="Address" aria-label="address" value="<?php echo $data['useraddress']; ?>">
                    <input type="text" class="form-control" name="dmamount" placeholder="Amount" aria-label="amount">
                      <input type="text" class="form-control" name="donorusername" placeholder="Donor Username" aria-label="Name" value="<?php echo $_SESSION['username']; ?>" style="display:none;">
                      <input type="submit" class="btn btn-primary" name="submit" value="Donate" >
            </form>
            
   	<?php
   }}?>
          </div>
        </div>
      </div>
    </div>
    </body>
    <?php 
      include 'footer.php';
    ?>