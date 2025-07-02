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


// Retrieve data from the database
$sql1 = "SELECT id,income_type, amt, sales, client, trans, payment FROM payable";
$sql2 = "SELECT id,expensetype, cli, td, payment1 FROM expenses";
$sql3 = "SELECT id,acc, accp, ps, remarks FROM costcenter";
$result = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Accounting Database</title>
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
    <center>Accounting Database</center>
</h2>

<?php
if ($result->num_rows > 0 && $result2->num_rows > 0 && $result3->num_rows > 0) {
    while (($row = $result->fetch_assoc()) && ($row2 = $result2->fetch_assoc()) && ($row3 = $result3->fetch_assoc())) {
        echo "<div class='form-data'>";
        echo "<h2>Data</h2>";
        echo "<p><strong>Record Number:</strong>" . $row3['acc'] . "</p>";
        echo "<p><strong>Cost Center Name:</strong>" . $row3['accp'] . "</p>";
        echo "<p><strong>Cost Center Code:</strong>" . $row3['ps'] . "</p>";
        echo "<h2>Income</h2>";
        echo "<p><strong>Income Type:</strong>" . $row['income_type'] . "</p>";
        echo "<p><strong>Amount in Philippine Peso:</strong>" . $row['amt'] . " PHP</p>";
        echo "<p><strong>Sales Date:</strong>" . $row['sales'] . "</p>";
        echo "<p><strong>Client:</strong>" . $row['client'] . "</p>";
        echo "<p><strong>Trans Date:</strong>" . $row['trans'] . "</p>";
        echo "<p><strong>Payment Mode:</strong>" . $row['payment'] . "</p>";
        echo "<h2>Expenses</h2>";
        echo "<p><strong>Expenses Type:</strong>" . $row2['expensetype'] . "</p>";
        echo "<p><strong>Supplier:</strong>" . $row2['cli'] . "</p>";
        echo "<p><strong>Trans Date:</strong>" . $row2['td'] . "</p>";
        echo "<p><strong>Payment Mode:</strong>" . $row2['payment1'] . "</p>";
        echo "<h2>Remarks</h2>";
        echo "<p><strong>Remarks:</strong>" . $row3['remarks'] . "</p>";
        echo"<hr></hr>";
        echo "<button class='delete-btn' data-id='" . $row["id"] . "'>Delete</button>";
        echo "</div>";
    }
} else {
    echo "<p>No form data found.</p>";
}

// Close the connection
$conn->close();
?>

<a href="tta_act_admin_ar.php" class="btn">New Entry</a>
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