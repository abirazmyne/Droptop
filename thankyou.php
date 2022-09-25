<?php 
include 'header.php';
include 'config.php';
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
}?>

<div class="container thanks_sec">
    <div class="thanks_sec_con">
        <h2>ThankYou For</h2>
        <p>ThankYou For Your Donation. One Of Our Volunteer Will Receive Your Donation As Soon As Possible And Serve It To The poor People.</p>
    </div>
</div>




<?php
include 'footer.php'
?>