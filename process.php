<?php
include 'header.php';
if((isset($_POST['submit'])))
{
  $dlocation = $conn->real_escape_string($_POST['dlocation']);
  $dname = $conn->real_escape_string($_POST['dname']);
  $email = $conn->real_escape_string($_POST['email']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $daddress = $conn->real_escape_string($_POST['daddress']);
  $quantity = $conn->real_escape_string($_POST['quantity']);
  $sql="INSERT INTO contactus (dlocation, dname, email, phone, daddress, quantity) VALUES ('".$dlocation."','".$dname."', '".$email."', ,'".$phone."','".$daddress."','".$quantity."')";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else

  echo '<script>alert("Message Successfully Sent")</script>';
  }

?>