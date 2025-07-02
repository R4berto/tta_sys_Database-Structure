<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tta_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT FirstName, MiddleName, LastName, Suffix, CellphoneNumber, Email, Address, Website, Entrytype, CompanyName, CompanyType FROM life";
$result1 = $conn->query($sql1);

$sql2 = "SELECT id, Product, qty, amount, payment, Remarks, DeliveryDate FROM ord";
$result2 = $conn->query($sql2);

?>

<!DOCTYPE html>
<html>
<head>
	<title>User Marketing database </title>
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
            background-color: #4CAF50;
            color: #fff;
            text-decoration: none;
			border: none;
            border-radius: 5px;
            transition: background-color 0.2s ease-in-out;
			cursor: pointer;
        }

        .btn:hover {
            background-color: #3e8e41;
        }
        button {
			display:inline-block;
			padding:10px 20px;
			background-color: #4CAF50;
			color: #fff;
			border: none;
			border-radius: 5px;
			cursor: pointer;
			transition: background-color 0.2s ease-in-out;
        }

        button:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
	<h2>Retrieved From Data</h2>

	<h2>Customer Data</h2>
	<?php
	if ($result1->num_rows > 0) {
		while ($row = $result1->fetch_assoc()) {
			echo "<div class='form-data'>";
			echo "<p><strong>First Name:</strong> " . $row["FirstName"] . "</p>";
			echo "<p><strong>Middle Name:</strong> " . $row["MiddleName"] . "</p>";
			echo "<p><strong>Last Name:</strong> " . $row["LastName"] . "</p>";
			echo "<p><strong>Suffix:</strong> " . $row["Suffix"] . "</p>";

			echo "<p><strong>Cellphone Number:</strong> " . $row["CellphoneNumber"] . "</p>";
			echo "<p><strong>Email:</strong> " . $row["Email"] . "</p>";
			echo "<p><strong>Address:</strong> " . $row["Address"] . "</p>";
			echo "<p><strong>Website:</strong> " . $row["Website"] . "</p>";
			echo "<p><strong>Entry Type:</strong> " . $row["Entrytype"] . "</p>";

			echo "<p><strong>Company Name:</strong> " . $row["CompanyName"] . "</p>";
			echo "<p><strong>Company Type:</strong> " . $row["CompanyType"] . "</p>";
			echo "</div>";
			echo "<hr>";
		}
	} else {
		echo "<p>No Form data found.</p>";
	}

	?>
	<h2>Order Data</h2>
<?php
if ($result2->num_rows > 0) {
	while ($row = $result2->fetch_assoc()) {
		echo "<div class='form-data'>";
		echo "<p><strong>Product Name:</strong> " . $row["Product"] . "</p>";
		echo "<p><strong>Quantity:</strong> " . $row["qty"] . "</p>";
		echo "<p><strong>Amount:</strong> " . $row["amount"] . "</p>";
		echo "<p><strong>Payment:</strong> " . $row["payment"] . "</p>";
		echo "<p><strong>Remarks:</strong> " . $row["Remarks"] . "</p>";
		echo "<p><strong>Delivery Date:</strong> " . $row["DeliveryDate"] . "</p>";

		echo "</div>";
		echo "<hr><hr>";
	}
} else {
echo "<p>No Order Data found.</p>";
}
$conn->close();
?>
	<a href="tta_mkt_cstmr.html" class="btn">New Entry</a>
</body>
</html>