<?php 
include 'header_volunteer.php';
include '../config.php';

session_start();

error_reporting(0);

if (isset($_SESSION['volusername'])) {
    header("Location: index.php");
}

if (isset($_POST['submit'])) {
	$volusername = $_POST['volusername'];
	$password = md5($_POST['password']);

	$sql = "SELECT * FROM volunteer WHERE volusername='$volusername' AND password='$password'";
	$result = mysqli_query($conn, $sql);
	if ($result->num_rows > 0) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['volusername'] = $row['volusername'];
		header("Location: index.php");
	} else {
		echo "<script>alert('Woops! Email or Password is Wrong.')</script>";
	}
}

?>

<div class="register_body">
	<div class="container register_container">
		<form action="" method="POST" class="login-email">
			<p class="login-text" style="font-size: 2rem; font-weight: 800;">Volunteer Login</p>
			<div class="input-group">
				<input type="text" placeholder="User Name" name="volusername" value="<?php echo $volusername; ?>" required>
			</div>
			<div class="input-group">
				<input type="password" placeholder="Password" name="password" value="<?php echo $_POST['password']; ?>" required>
			</div>
			<div class="input-group">
				<button name="submit" class="btn">Login</button>
			</div>
			<p class="login-register-text">Don't have an account? <a href="volunteerregister.php">Register Here</a>.</p>
		</form>
	</div>
</div>
</body>
</html>