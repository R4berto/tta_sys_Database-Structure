<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tta_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT id, FirstName, MiddleName, LastName, Suffix, CellphoneNumber, Email, Address, Website, Entrytype, CompanyName, CompanyType FROM life";
$result1 = $conn->query($sql1);

$sql2 = "SELECT id, Product, qty, amount, payment, Remarks, DeliveryDate FROM ord";
$result2 = $conn->query($sql2);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Marketing Database</title>
    <style>
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
            border-radius: 4px;
            transition: background-color 0.3s ease;
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
<img src="Static.png" width="100%">
    <h1>
		<center>The Thrift Avenue</center>
	</h1>
	<h2>
		<center>Marketing Database</center>
	</h2>

    <?php
if ($result1->num_rows > 0 && $result2->num_rows > 0) {
    while (($row1 = $result1->fetch_assoc()) && ($row2 = $result2->fetch_assoc())) {
        echo "<div class='form-data'>";
        echo "<h2>Customer Data</h2>";
        echo "<p><strong>First Name:</strong> " . $row1["FirstName"] . "</p>";
        echo "<p><strong>Middle Name:</strong> " . $row1["MiddleName"] . "</p>";
        echo "<p><strong>Last Name:</strong> " . $row1["LastName"] . "</p>";
        echo "<p><strong>Suffix:</strong> " . $row1["Suffix"] . "</p>";

        echo "<p><strong>Cellphone Number:</strong> " . $row1["CellphoneNumber"] . "</p>";
        echo "<p><strong>Email:</strong> " . $row1["Email"] . "</p>";
        echo "<p><strong>Address:</strong> " . $row1["Address"] . "</p>";
        echo "<p><strong>Website:</strong> " . $row1["Website"] . "</p>";
        echo "<p><strong>Entry Type:</strong> " . $row1["Entrytype"] . "</p>";

        echo "<p><strong>Company Name:</strong> " . $row1["CompanyName"] . "</p>";
        echo "<p><strong>Company Type:</strong> " . $row1["CompanyType"] . "</p>";
        echo "<h2>Order Data</h2>";

        echo "<p><strong>Product Name:</strong> " . $row2["Product"] . "</p>";
        echo "<p><strong>Quantity:</strong> " . $row2["qty"] . "</p>";
        echo "<p><strong>Amount:</strong> " . $row2["amount"] . "</p>";
        echo "<p><strong>Payment:</strong> " . $row2["payment"] . "</p>";
        echo "<p><strong>Remarks:</strong> " . $row2["Remarks"] . "</p>";
        echo "<p><strong>Delivery Date:</strong> " . $row2["DeliveryDate"] . "</p>";
        echo "<button class='delete-btn' data-id='" . $row2["id"] . "'>Delete</button>";

        echo "</div>";
        echo "<hr><hr>";
    }
} else {
    echo "<p>No form data found.</p>";
}

// Close the connection
$conn->close();
?>

    <a href="tta_mkt_admin_cstmr.html" class="btn">New Entry</a>
	<a href="admin_page.php" class="btn">Go To Home</a>

    <script>
    // Get all delete buttons
    const deleteButtons = document.querySelectorAll('.delete-btn');

    // Add event listener for each delete button
    deleteButtons.forEach(button => {
        button.addEventListener('click', () => {
        // Get the ID of the record to delete
        const id = button.getAttribute('data-id');

        // Display a confirmation prompt
        const confirmation = confirm("Are you sure you want to delete this record?");

        // If user confirms the deletion, send the AJAX request
        if (confirmation) {
            // Send an AJAX request to delete the record
            const xhr = new XMLHttpRequest();
            xhr.open('POST', 'delete.php', true);
            xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhr.onload = function() {
            // Check if the request was successful
            if (xhr.status === 200) {
                // Remove the deleted record from the DOM
                const formDiv = button.parentNode;
                formDiv.parentNode.removeChild(formDiv);
            }
            };
            // Send the ID of the record as the request parameter
            xhr.send('id=' + id);
        }
        });
    });
    </script>
</body>
</html>