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
  $dlocation = $conn->real_escape_string($_POST['dlocation']);
  $dname = $conn->real_escape_string($_POST['dname']);
  $email = $conn->real_escape_string($_POST['email']);
  $phone = $conn->real_escape_string($_POST['phone']);
  $daddress = $conn->real_escape_string($_POST['daddress']);
  $quantity = $conn->real_escape_string($_POST['quantity']);
  $donorusername = $conn->real_escape_string($_POST['donorusername']);
  $sql="INSERT INTO food (dlocation, dname, email, phone, daddress, quantity, donorusername) VALUES ('".$dlocation."', '".$dname."', '".$email."', '".$phone."', '".$daddress."', '".$quantity."', '".$donorusername."')";
 if(!$result = $conn->query($sql)){
  die('Error occured [' . $conn->error . ']');
  }
  else
  echo '<script>alert("Message Successfully Sent")</script>';
  header("Location: thankyou.php");
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
                <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?v=3&key=AIzaSyD20fa8okNgStseZ2om1G0aaf7qzVmOvGQ&libraries=places"></script>

<script type="text/javascript">
    var source, destination;
    var directionsDisplay;
    var directionsService = new google.maps.DirectionsService();
    google.maps.event.addDomListener(window, 'load', function () {
        new google.maps.places.SearchBox(document.getElementById('txtSource'));
        new google.maps.places.SearchBox(document.getElementById('txtDestination'));
        directionsDisplay = new google.maps.DirectionsRenderer({ 'draggable': true });
    });

    function GetRoute() {
        var dhaka = new google.maps.LatLng(23.80894367244938, 90.40592589623449);
        var mapOptions = {
            zoom: 7,
            center: dhaka
        };
        map = new google.maps.Map(document.getElementById('dvMap'), mapOptions);
        directionsDisplay.setMap(map);
        directionsDisplay.setPanel(document.getElementById('dvPanel'));

        //*********DIRECTIONS AND ROUTE**********************//
        source = document.getElementById("txtSource").value;
        destination = document.getElementById("txtDestination").value;

        var request = {
            origin: source,
            destination: destination,
            travelMode: google.maps.TravelMode.DRIVING
        };
        directionsService.route(request, function (response, status) {
            if (status == google.maps.DirectionsStatus.OK) {
                directionsDisplay.setDirections(response);
            }
        });

        //*********DISTANCE AND DURATION**********************//
        var service = new google.maps.DistanceMatrixService();
        service.getDistanceMatrix({
            origins: [source],
            destinations: [destination],
            travelMode: google.maps.TravelMode.DRIVING,
            unitSystem: google.maps.UnitSystem.METRIC,
            avoidHighways: false,
            avoidTolls: false
        }, function (response, status) {
            if (status == google.maps.DistanceMatrixStatus.OK && response.rows[0].elements[0].status != "ZERO_RESULTS") {
                var distance = response.rows[0].elements[0].distance.text;
                var duration = response.rows[0].elements[0].duration.text;
                var dvDistance = document.getElementById("dvDistance");
                dvDistance.innerHTML = "";
                dvDistance.innerHTML += "Distance: " + distance + "<br />";
                dvDistance.innerHTML += "Duration:" + duration;

            } else {
                alert("Unable to find the distance via road.");
            }
        });
    }
</script>
<!-- GeoLocation Find Using User Browser-->

<!-- EnD GoLocation Kahini-->
<?php
$location1="";
$dest=$_REQUEST['address'];
//echo $dest; echo "adajdfsjkdf";
?>
            <input    id="txtSource" name="dlocation"   class="form-control se_height " title="Please Enter Location..."  type="text" placeholder="Enter Your Location">
             <input type="hidden" id="txtDestination" value="<?php echo $dest?>"  style="width: 200px" >
   
   </div>
                </div>
                    <input type="text" class="form-control" name="dname" id="dname" placeholder="Name" aria-label="Name" value="<?php echo $data['name']; ?>">
                    <input type="Email" class="form-control" name="email" placeholder="Email" aria-label="email" value="<?php echo $data['email']; ?>">
                    <input type="text" class="form-control" name="phone" placeholder="Contact Number" aria-label="number" value="<?php echo $data['phone']; ?>">
                    <input type="text" class="form-control" name="daddress" placeholder="House Number" aria-label="address">
                    <select class="form-select" name="quantity" aria-label="Default select example">
                        <option selected>Quantity Of Foods</option>
                        <option value="For 5 People">For 5 People</option>
                        <option value="For 5-10 People">For 5-10 People</option>
                        <option value="For 10-15 People">For 10-15 People</option>
                        <option value="For 15-20 People">For 15-20 People</option>
                        <option value="For 20+ People">For 20+ People</option>
                      </select>
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