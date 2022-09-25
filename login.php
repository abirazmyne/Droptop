<?php 
include 'header.php';
include 'config.php';
error_reporting(0);
session_start();
if (isset($_SESSION['username'])) {
    header("Location: welcome.php");
}

if (isset($_POST['submit'])) {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$location = $_POST['location'];

	$sql = "SELECT * FROM users WHERE email='$email' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['username'] = $row['username'];
		if(empty($location)){
		header("Location: welcome.php");
			}
			else{
				header("Location:" . $location);
			}
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<div class="register_body">
	<div class="container register_container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Login</p>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group" style="display:none;">
				<input type="text" name="location" value="<?php echo $_SERVER['HTTP_REFERER']?>">
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="register.php">Register Here</a>.</p>
		</form>
	</div>
</div>
<?php 
      include 'footer.php';
?>