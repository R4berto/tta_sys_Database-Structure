<?php
$servername = "localhost"; // Replace with your MySQL server name
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "tta_database"; // Replace with your MySQL database name
$conn = new mysqli($servername, $username, $password, $database);
?>

<?php
// Retrieve form data
$income_type = $_POST['income_type'];
$amt = $_POST['amt'];
$sales = $_POST['sales'];
$client = $_POST['client'];
$trans = $_POST['trans'];
$payment = $_POST['payment'];


// Prepare the INSERT statement
$sql1 = "INSERT INTO payable (income_type, amt, sales, client, trans, payment) VALUES (?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql1);
$stmt->bind_param("ssssss", $income_type, $amt, $sales, $client, $trans, $payment);

// Execute the statement
if ($stmt->execute()) {
	
} else {
	
}

// Close the Connection
$stmt->close();
$conn->close();

?>

<html>
<head><title>The Thrift Avenue Accounting - Account Payable</title>
<link rel="stylesheet" type="text/css" href="accstyle.css">
</head>
<body>
<form action="tta_act_cc.php" method="post">
<img src="Static.png" width="100%">
<table align="center">
	<tr>
		<th></th>
		<th><div class="form-header"><h1>The Thrift Avenue</marquee></h1>
<h2>Welcome to Accounting Database - Account Payable</h2></th>
<th></th>
</tr>
<tr>
	<td></td>
	<td> <fieldset class="form-container">
<legend><div class="form-header"><h3>Expenses</h3></div></legend>
<table>
	<tr>
<td><label class="form-label" for="expense type"><p>Expenses Type</p></label></td>
<td><select class="form-input" id="expensetype" name="expensetype">
	<option value="cost">Cost</option>
	<option value="rent">Rent</option>
	<option value="tax">Tax</option>
</select></td>
</tr>
<tr>
<td><label class="form-label" for="cli"><p>Supplier</p></label></td>
<td><select class="form-input" id="cli" name="cli">
	<option value="Angelo">Angelo</option>
	<option value="Robert">Robert</option>
	<option value="Joy">Joy</option>
	<option value="Maureen">Maureen</option>
	<option value="Maxine">Maxine</option>
	<option value="Paul">Paul</option>
	<option value="Angelica">Angelica</option>
</select></td>
</tr>
<tr>
<td><label class="form-label" for="td"><p>Trans Date</p></label></td>
<td><input class="form-input" type="date" id="td" name="td"></td>
</tr>
<tr>
<td><label class="form-label" for="payment1"><p>Payment Mode</p></label></td>
<td><select class="form-input" id="payment1" name="payment1">
    <option value="CASH">CASH</option>
	<option value="CHEQUE">CHEQUE</option>
	<option value="E-WALLET">E-WALLET</option>
	<option value="BC/CRYPTO">BC/CRYPTO</option>
	<option value="GOLD BARS">GOLD BARS</option>
</select></td>
</tr>
</table>
</fieldset>

<br><br>
<table align="center">
<tr>
	<td></td>
<td><a href="javascript:history.back()" class="btn">Go back</a></td><td><input class="form-button" type="submit" value="Next"></td>
</body>
</html>