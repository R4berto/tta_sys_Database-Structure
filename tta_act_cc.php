<?php
$servername = "localhost"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "tta_database"; // Replace with your MySQL database name
$conn = new mysqli($servername, $username, $password, $database);
?>

<?php
// Retrieve form data
$expensetype = $_POST['expensetype'];
$cli = $_POST['cli'];
$td = $_POST['td'];
$payment1 = $_POST['payment1'];



// Prepare the INSERT statement
$sql2 = "INSERT INTO expenses (expensetype, cli, td, payment1) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql2);
$stmt->bind_param("ssss", $expensetype, $cli, $td, $payment1);

// Execute the statement
if ($stmt->execute()) {
	
} else {
	
}

// Close the Connection
$stmt->close();
$conn->close();

?>

<html>
<head><title>The Thrift Avenue Accounting - Cost Centers</title>
<link rel="stylesheet" type="text/css" href="accstyle.css">
</head>
<body>
<form action="tta_act_index.php" method="post">
<img src="Static.png" width="100%">
<table align="center">
	<table align="center">
	<tr>
		<th></th>
		<th><div class="form-header"><div class="a"><h1>The Thrift Avenue</h1>
<h2>Welcome to Accounting Database - Cost Center</h2></div></div></th>
<th></th>
</tr>
<tr>
	<td></td>
	<td>
<fieldset class="form-container">
<legend><div class="form-header"><h3>COSTCENTERS</h3></div></legend>
<table>
	<tr>
		<td class="form-label"><p>Record Number:</p></td>
		<td><input class="form-input" type="text" id="acc" name="acc"></td>
		</tr>
		<tr>
		<td class="form-label"><p>Cost Center Name</p></td>
		<td><input class="form-input" type="text" id="accp" name="accp"></td>
		</tr>
		<tr>
		<td class="form-label"><p>Cost Center Code</p></td>
		<td><input class="form-input" type="text" id="ps" name="ps"></td>
	</tr>
	<tr>
		<td class="form-label"><label for="remarks"><p>Remarks:</p></label></td>
		<td><textarea class="form-input" name="remarks" rows="3" cols="23"></textarea></td>
		</tr>

		
</table>

</fieldset></td>
</tr>
</table>
<br><br>
<table align="center">
<tr>
	<td></td>
	<td><a href="javascript:history.back()" class="btn">Go back</a></td><td><td><input class="form-button" type="submit" value="Submit"></td></tr></td></tr>
	</body>
	</html>