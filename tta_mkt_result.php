
<!DOCTYPE html>
<html>
<head>
	<title> Form Submission Result</title>
	<style>
	body{
	background-color:#bdcdd6;
}

.form-container {
	max-width: 500px;
	margin: 0 auto;
	padding: 20px;
	background-color: #6096B4;
	border-radius: 10px;
	box-shadow: 10px 10px 2px rgba(0, 0, 0, 0.75);
	overflow: hidden;
	background-color: 6096B4;
	background-image:url("textbackground.png");
	background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

/* Form header */
.form-header{
	margin-bottom: 20px;
}

.form-header h2 {
	font-size: 24px;
	font-weight: bold;
	text-align: center;
	color: #6096B4;
	text-shadow: 2px 4px rgba(0, 0, 0, 0.1);
}

/* Form label */
.form-label{
	display: block;
	margin-bottom: 10px;
	font-weight: bold;
	color: black;
	text-align: center;
}

/* Form input */
.form-input {
	width: 95%;
	padding: 10px;
	margin-bottom: 20px;
	border: none;
	border-radius: 5px;
	background-color: #f2f2f2;
}

.form-input:focus {
	outline: none;
	background-color: #;
	box-shadow: 0 0 5px rgba(81, 203, 238, 1);
}

/* Form button */
.form-button {
	display: block;
	width: 95%;
	padding: 10px 20px;
	background-color: #4caf50;
	color: #fff;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	transition: background-color 0.2s ease-in-out;
}

.form-button: hover {
	background-color: #3e8e41;
}

/* Form error message */
.form-error {
	color: red;
	font-size: 12px;
	margin-top: 5px;
	text-align: center;
	text-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

p{background-color:#6096B4;
}

	</style>
</head>
<body>
	<div class="container">
		<h2> Form Submission Result</h2>

		<?php
		if (isset($_POST['FirstName']) && isset($_POST['MiddleName']) && isset($_POST['LastName']) && isset($_POST['Suffix']) && isset($_POST['CellphoneNumber']) && isset($_POST['Email']) && isset($_POST['Address']) && isset($_POST['Website']) && isset($_POST['Entrytype']) && isset($_POST['CompanyName']) && isset($_POST['CompanyType'])) {
			include 'tta_mkt_data.php';

			$fname = $_POST['FirstName'];
			$mname = $_POST['MiddleName'];
			$lname = $_POST['LastName'];
			$suffix = $_POST['Suffix'];

			$cpnum = $_POST['CellphoneNumber'];
			$email = $_POST['Email'];
			$address = $_POST['Address'];
			$website = $_POST['Website'];
			$entrytype = $_POST['Entrytype'];

			$compname = $_POST['CompanyName'];
			$comptype = $_POST['CompanyType'];

			echo "<p><strong>First Name:</strong> " . $fname . "</p>";
			echo "<p><strong>Middle Name:</strong> " . $mname . "</p>";
			echo "<p><strong>Last Name:</strong> " . $lname . "</p>";
			echo "<p><strong>Suffix:</strong> " . $suffix . "</p>";

			echo "<p><strong>Cellphone Number:</strong> " . $cpnum . "</p>";
			echo "<p><strong>Email:</strong> " . $email . "</p>";
			echo "<p><strong>Address:</strong> " . $address . "</p>";
			echo "<p><strong>Website:</strong> " . $website . "</p>";
			echo "<p><strong>Entry Type:</strong> " . $entrytype . "</p>";

			echo "<p><strong>Company Name:</strong> " . $compname . "</p>";
			echo "<p><strong>Company Type:</strong> " . $comptype . "</p>";


		} else {
			echo "<p>No from data submitted.</p>";
		}
		?>

		<a href="tta_mkt_cstmr.html" class="btn">Go Back</a>
		<a href="tta_mkt_view.php" class="btn">View Entries</a>
	</div>
</body>
</html>