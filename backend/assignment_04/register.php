<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Confirmation</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<h1 class="col-12 mt-5 mb-3">Confirmation</h1>
		</div> <!-- .row -->
	</div> <!-- .container -->
	
	<div class="container">

		<div class="row mt-3">
			<div>
				<?php
					$fname = $_POST['fname'];
					$lname = $_POST['lname'];
					$email = $_POST['email'];
					$phone = $_POST['phone'];
					$gender = [
					    1 => "Male",
					    2 => "Female",
					    3 => "Other",
					    4 => "Rather not say"
					];
					$pass = $_POST['pass'];
					$confirm = $_POST['pass-confirm'];
					$verify = $_POST['verification-method'];
					$check = $_POST['terms-accepted'];

					date_default_timezone_set('America/Los_Angeles');
					echo "This form was submitted on " . date('l, F j, Y \a\t h:i:s A');

				?>
				
			</div>
		</div>

		<div class="row mt-4">
			<div class="col-4 text-right">Full Name:</div>
			<div class="col-8">
				<?php
					if (empty($fname) || empty($lname)) {
						echo '<span style="color: red;">Not provided</span>';
					} else {
                		echo $fname . ' ' . $lname;
            		}
				?>

			</div>
		</div> <!-- .row -->
		<div class="row mt-3">
			<div class="col-4 text-right">Email:</div>
			<div class="col-8">
				<?php
					if (empty($email)) {
						echo '<span style="color: red;">Not provided</span>';
					} else {
						echo $email;
					}
				?>
			</div>
		</div> <!-- .row -->
		<div class="row mt-3">
			<div class="col-4 text-right">Phone:</div>
			<div class="col-8">
				<?php
					if (empty($phone)) {
						echo '<span style="color: red;">Not provided</span>';
					} else {
						echo $phone;
					}
				?>

			</div>
		</div> <!-- .row -->
		<div class="row mt-3">
			<div class="col-4 text-right">Gender:</div>
			<div class="col-8">
				<?php
					if (isset($_POST['gender']) && $_POST['gender'] != '') {
					    $selectedGender = $gender[$_POST['gender']];
					    echo $selectedGender;
					} else {
					    echo '<span style="color: red;">Not provided</span>';
					}
				?>

			</div>
		</div> <!-- .row -->
		<div class="row mt-3">
			<div class="col-4 text-right">Password Match:</div>
			<div class="col-8">
				<?php
					if (empty($pass) || empty($confirm)) {
						echo '<span style="color: red;">Not provided</span>';
					} elseif ($pass === $confirm) {
						echo 'Passwords match';
            		} else {
                		echo 'Passwords do not match';
					}
				?>
				
			</div>
		</div> <!-- .row -->

		<div class="row mt-3">
			<div class="col-4 text-right">Verification Method:</div>
			<div class="col-8">
				<?php
					if (isset($verify)) {
                		echo $verify;
            		} else {
                		echo '<span style="color: red;">Not provided</span>';
            		}
				?>
				
			</div>
		</div> <!-- .row -->

		<div class="row mt-3">
			<div class="col-4 text-right">Terms & Conditions:</div>
			<div class="col-8">
				<?php
					if (isset($check)) {
                		echo '<span style="color: green;">Accepted</span>';
            		} else {
                		echo '<span style="color: red;">Not provided</span>';
            		}
            		
				?>
				
			</div>
		</div> <!-- .row -->

		<div class="row mt-4 mb-4">
			<a href="form.php" role="button" class="btn btn-primary">Back to Form</a>
		</div> <!-- .row -->

	</div> <!-- .container -->

</body>
</html>