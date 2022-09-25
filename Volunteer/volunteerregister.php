<?php 
include 'header_volunteer.php';
include '../config.php';

error_reporting(0);

session_start();

if (isset($_SESSION['volusername'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$volusername = $_POST['volusername'];
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$orgname = $_POST['orgname'];
	$password = md5($_POST['password']);
	$cpassword = md5($_POST['cpassword']);

	if ($password == $cpassword) {
		$sql = "SELECT * FROM volunteer WHERE email='$email'";
		$result = mysqli_query($conn, $sql);
		if (!$result->num_rows > 0) {
			$sql = "INSERT INTO volunteer (volusername, name, email, phone, orgname, password)
					VALUES ('$volusername', '$name', '$email', '$phone', '$orgname', '$password')";
			$result = mysqli_query($conn, $sql);
			if ($result) {
				echo "<script>alert('Wow! User Registration Completed.')</script>";
				$username = "";
				$email = "";
				$_POST['password'] = "";
				$_POST['cpassword'] = "";
				header("Location: index.php");
			} else {
				echo "<script>alert('Woops! Something Wrong Went.')</script>";
			}
		} else {
			echo "<script>alert('Woops! Email Already Exists.')</script>";
		}
		
	} else {
		echo "<script>alert('Password Not Matched.')</script>";
	}
}

?>

<div class="register_body">
	<div class="container register_container">
		<form action="" method="POST" class="login-email">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Volunteer Register</p>
			<div class="input-group">
				<input type="text" placeholder="User Name" name="volusername" value="<?php echo $volusername; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Name" name="name" value="<?php echo $name; ?>" required>
			</div>
			<div class="input-group">
				<input type="email" placeholder="Email" name="email" value="<?php echo $email; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Phone" name="phone" value="<?php echo $phone; ?>" required>
			</div>
			<div class="input-group">
				<input type="text" placeholder="Organization Name" name="orgname" value="<?php echo $orgname; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
            </div>
            <div class="input-group">
				<input type="password" placeholder="Confirm Password" name="cpassword" value="<?php echo $_POST['cpassword']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Register</button>
			</div>
			<p class="login-register-text">Have an account? <a href="volunteerlogin.php">Login Here</a>.</p>
		</form>
	</div>
</div>
</body>
</html>