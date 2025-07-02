<?php
$servername = "localhost"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "tta_database"; // Replace with your MySQL database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$name = $_POST['name'];
$com = $_POST['com'];


// Prepare the INSERT statement
$sql = "INSERT INTO useraboutus (name, com) VALUES (?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $name, $com);

// Execute the statement
if ($stmt->execute()) {
} else {
	echo "Error: " . $stmt->error;
}

// Retrieve data from the database
$sql= "SELECT name, com FROM useraboutus";
$result = $conn->query($sql);


?>

<!DOCTYPE html>
<html>
<head>
	<title>Retrieved Comment Data</title>
	<style>
		/* Custom Styling for the retrieved form data */
		body {
			font-family: Arial, sans-serif;
			margin: 20px;
			background-color: #BDCDD6;
		}

		h2 {
			color: #333;
		}

		.form-data {
			background-color: #f5f5f5;
			padding: 10px;
			margin-bottom: 20px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		.form-data p {
			margin: 0;
			text-align: center;
		}

		hr {
			margin: 20px 0;
			border: 0;
			border-top: 1px solid #ccc;
		}

		.btn {
			display: inline-block;
			padding: 10px 20px;
			background-color: #4c55af;
			color: #fff;
			text-decoration: none;
			border-radius: 4px;
			transition: background-color 0.3s ease;
		}

		.btn:hover {
			background-color: #45a049;
		}
	</style>
</head>
<body>
	<img src="Static.png" width="100%">
	<h1>
		<center>The Thrift Avenue</center>
	</h1>
	<h2>
		<center>Accounting Database</center>
	</h2>

	<?php
if ($result->num_rows > 0) {
	while ($row = $result->fetch_assoc()) {
		
			echo "<div class='form-data'>";
			echo "<p><strong>Name:<br></strong>" . $row['name'] . "</p>";
			echo "<p><strong>Comment:<br></strong>" . $row['com'] . "</p>";
			echo "</div>";
			
		}
	} else {
		echo "<p>No form data found.</p>";
	}

	// Close the connection
	$conn->close();
	?>

	<a href="tta_sys_index.php" class="btn">More comments</a>
	<a href="user_page.php" class="btn">Go To Home</a>
</body>
</html>
