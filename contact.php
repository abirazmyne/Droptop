<?php 

include 'header.php';
include 'config.php';
error_reporting(0);

if((isset($_POST['submit'])))
{
  $Name = $conn->real_escape_string($_POST['name']);
  $Email = $conn->real_escape_string($_POST['email']);
  $Phone = $conn->real_escape_string($_POST['contact']);
  $yourmessage = $conn->real_escape_string($_POST['yourmessage']);
  $sql="INSERT INTO contactus (name, email, contact, yourmessage) VALUES ('".$Name."','".$Email."', '".$Phone."', '".$yourmessage."')";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else

  echo '<script>alert("Message Successfully Sent")</script>';
  }

?>

  <!-- SIngle page banner -->

      <div class="single-page-banner">
        <div class="section_heading">
          <h2 >Contact Us</h2>
        </div>
 
       </div>

           
     <!-- SIngle page banner -->

     <div class=" px-4 contact_info_section container">
      <div class="row gx-5">
        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fa-solid fa-phone"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Phone</h3>
                  <p>+880 1*** *** ***</p>
              </div>
          </div>
          </div>
        </div>

        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fa-solid fa-envelope"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Email</h3>
                  <p>droptop@domain.com.bd</p>
              </div>
          </div>
          </div>
        </div>
        <div class="col">
          <div class="p-3 contact_icon_cus">
            <div class="feature-content-con">
              <div class="feature-icon-con">
                <i class="fa-solid fa-location-dot"></i>
              </div>
              <div class="feature-discription-con">
                  <h3>Service Areas</h3>
                  <p>Dhaka, Banglaseh</p>
              </div>
          </div>
          </div>
        </div>
      </div>

      <div class="contact_form">
      <p>For All Enquires, Please Email Us Using The Form Below</p>
      <form class="form" action="contact.php" method="POST">
    
    <p class="username">
      <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" >
    </p>
    
    <p class="useremail">
      <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" >
      
    </p>
    
    <p class="usercontact">
      <input type="text" class="form-control" name="contact" id="contact" placeholder="Phone Number" >
      
    </p>    
  
    <p class="usertext">
      <textarea class="form-control" name="yourmessage" placeholder="Your Message" ></textarea>
                       
    </p>
    
    <p class="usersubmit">
      <input type="submit" class="btn btn-primary" name="submit" value="Send" >
    </p>
  </form>
      </div>
    </div>  

    <map><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d233668.38703802988!2d90.27923923029098!3d23.780573257422212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8b087026b81%3A0x8fa563bbdd5904c2!2sDhaka!5e0!3m2!1sen!2sbd!4v1647883820269!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></map>
    
</body>
<?php 
      include 'footer.php';
    ?>