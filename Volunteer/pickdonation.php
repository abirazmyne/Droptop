<?php 
include 'header_volunteer.php';
session_start();

if (!isset($_SESSION['volusername'])) {
    header("Location: volunteerlogin.php");
}

?>
      <div class="single-page-banner">
        

        <div class="section_heading">
        <?php echo "<h2>Welcome " . $_SESSION['volusername'] . "</h2>"; ?>
        </div>
 
       </div>
<div class="container">
<div id="service_main">
       <div class="row gx-5">
        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fas fa-utensils"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Pickup Food</h3>
                  <p>Lorem ipsum dolor sapiente dolore quas ea rerum excepturi velit quibusdam pariatur.</p>
              </div>
              <div class="mission-button">
                <button type="button" class="btn btn-primary btn-prog" onclick="document.location='fooddelivery.php'">Go</button>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fas fa-tshirt"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Pickup Cloths</h3>
                  <p>Lorem ipsum dolor sapiente dolore quas ea rerum excepturi velit quibusdam pariatur.</p>
              </div>
              <div class="mission-button">
                <button type="button" class="btn btn-primary" onclick="document.location='clothdelivery.php'">Go</button>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fas fa-utensils"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Money Donation</h3>
                  <p>Lorem ipsum dolor sapiente dolore quas ea rerum excepturi velit quibusdam pariatur.</p>
              </div>
              <div class="mission-button">
                <button type="button" class="btn btn-primary btn-prog" onclick="document.location='money-donation.php'">Go</button>
              </div>
          </div>
          </div>
        </div>
      </div>

    </div>
    <div class="volunteer_footer">
    <a href="index.php" class="btn btn-primary">Back To Dashboard</a>
    <a href="volunteerlogout.php" class="btn btn-primary">Logout</a>
    </div>
</body>
</html>