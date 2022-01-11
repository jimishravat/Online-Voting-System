<?php
$insert = false;
if (isset($_POST['email'])) {
	include 'conn.php';

	$Firstname = $_POST['firstname'];
	$Lastname = $_POST['lastname'];
	$Email = $_POST['email'];
	$Password = $_POST['password'];
	$college_id = $_POST['collegeid'];
	$mobile = $_POST['mobile'];
	$department = $_POST['department'];


	$sql = "INSERT INTO `voters` (`voters_id`, `password`, `firstname`, `lastname`,`mobile`,`college_id`,`department`) VALUES ('$Email', '$Password', '$Firstname', '$Lastname','$mobile','$college_id','$department')";

	if (mysqli_query($con, $sql)) {
		// echo "Successfully Inserted";
		$insert = true;
	} else {
		echo "ERROR: $sql <br> $con->error";
	}
	mysqli_close($con);
}
?>



<!DOCTYPE html>
<html>

<head>
	<title>Login</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">

	<style>
		body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			background: #EDD493 !important;
		}

		.user_card {
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #3476CB;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			border-radius: 50px;

		}

		.form_container {
			margin-top: 20px;
		}

		#form-title {
			color: #fff;
		}

		.login_btn {
			width: 100%;
			background: #DA8BA1 !important;
			color: white !important;
		}

		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

		.login_container {
			padding: 0 2rem;
		}

		.input-group-text {
			background: #f7ba5b !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}

		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}

		.bi bi-image-fill {
			width: 30px;
			height: 10px;
		}

		#submit {
			display: block;
			background-color: rgb(58, 255, 58);
			color: rgb(0, 0, 0);
			font-size: 20px;
			text-align: center;
			font-weight: bold;
			/* z-index: -1; */
		}

		.msg {
			color: #ffffff;
		}

		.msg a {
			text-decoration: none;
			color: #ffffff;
		}

		.msg a:hover {
			color: black;
			text-decoration: underline;
		}
	</style>

</head>

<body>
	<?php
	if ($insert)
		echo "<p id='submit'>Your Form Response Successfully Submitted</p>";
	?>
	<div class="container h-100">
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<h3 id="form-title">REGISTER ACCOUNT</h3>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="register.php">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="firstname">
						</div>
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" name="lastname">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-envelope-square"></i></span>
							</div>
							<input type="email" name="email">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-id-card"></i></span>
							</div>
							<input type="text" name="collegeid">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-building"></i></span>
							</div>
							<input type="text" name="department">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-mobile-alt"></i></span>
							</div>
							<input type="number" name="mobile" minlength="10" maxlength="10">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="text" name="password">
						</div>
						<div class="d-flex justify-content-center mt-3 login_container">
							<input class="btn login_btn" type="submit" value="Register Account">
						</div>
					</form>
				</div>

				<div class="mt-4">
					<div class="d-flex justify-content-center links msg">
						Already have an account? <a href="login.php" class="ml-2">Login</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		/* Because i didnt set placeholder values in forms.py they will be set here using vanilla Javascript
		//We start indexing at one because CSRF_token is considered and input field 
		 */

		// //Query All input fields
		var form_fields = document.getElementsByTagName('input')
		form_fields[0].placeholder = 'Firstname';
		form_fields[1].placeholder = 'Lastname';
		form_fields[2].placeholder = 'Email Voter ID';
		form_fields[3].placeholder = 'College ID';
		form_fields[4].placeholder = 'Department';
		form_fields[5].placeholder = 'Mobile';
		form_fields[6].placeholder = 'Password';


		for (var field in form_fields) {
			form_fields[field].className += ' form-control'
		}
	</script>
</body>

</html>