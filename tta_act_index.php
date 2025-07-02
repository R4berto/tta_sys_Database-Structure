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
?>

<?php
// Retrieve form data
$acc = $_POST['acc'];
$accp = $_POST['accp'];
$ps = $_POST['ps'];
$remarks = $_POST['remarks'];



// Prepare the INSERT statement
$sql3 = "INSERT INTO costcenter (acc, accp, ps, remarks) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql3);
$stmt->bind_param("ssss", $acc, $accp, $ps, $remarks);

// Execute the statement
if ($stmt->execute()) {
	
} else {
	
}


?>

<?php
// Retrieve data from the database
$sql1 = "SELECT income_type, amt, sales, client, trans, payment FROM payable";
$sql2 = "SELECT expensetype, cli, td, payment1 FROM expenses";
$sql3 = "SELECT acc, accp, ps, remarks FROM costcenter";
$result = $conn->query($sql1);
$result2 = $conn->query($sql2);
$row = $result->fetch_array();
$row2 = $result2->fetch_array();

?>



 



<html>
<head><title>The Thrift Avenue Accounting</title>
<link rel="stylesheet" type="text/css" href="accstyle.css">
</head>
<body>

<img src="Static.png" width="100%">
	<table align="center">
	<tr>
		<th></th>
		<th><div class="form-header"><div class="a"><h1>The Thrift Avenue</h1>
<h2>Accounting Database</h2></div></div></th>
<th></th>
<th></th>
</tr>
<tr>
	<td></td>
	<td>
<fieldset class="form-container">
<legend><div class="form-header"><h3>Data</h3></div></legend>
<table>
	<tr>
		<td class="form-label"><p>Record Number:</p></td>
		<td><p class="form-input"><?php echo $acc; ?></p></td>
		</tr>
		<tr>
		<td class="form-label"><p>Cost Center Name:</p></td>
		<td><p class="form-input"><?php echo $accp; ?></p></td>
		</tr>
		<tr>
		<td class="form-label"><p>Cost Center Code:</p></td>
		<td><p class="form-input"><?php echo $ps; ?></p></td>
	</tr>	
</table>
</fieldset></td>
<td></td>
</tr>
<tr>
	<td></td>
	<td><fieldset class="form-container">
<legend><div class="form-header"><h3>Income</h3></div></legend>
<table>
	<tr>
		<td class="form-label"><p>Income Type:</p></td>
		<td><p class="form-input"><?php echo $row ['income_type']; ?></p></td>
		</tr>
		<tr>
		<td class="form-label"><p>Amount in Philippine Peso:</p></td>
		<td><p class="form-input"><?php echo $row ['amt']; ?> PHP</p></td>
		</tr>
		<tr>
		<td class="form-label"><p>Sales Date:</p></td>
		<td><p class="form-input"><?php echo $row['sales']; ?></p></td>
	    </tr>
	    <tr>
		<td class="form-label"><p>Client:</p></td>
		<td><p class="form-input"><?php echo $row['client']; ?></p></td>
	    </tr>
	    <tr>
		<td class="form-label"><p>Trans Date:</p></td>
		<td><p class="form-input"><?php echo $row['trans']; ?></p></td>
	    </tr>
	    <tr>
		<td class="form-label"><p>Payment Mode:</p></td>
		<td><p class="form-input"><?php echo $row['payment']; ?></p></td>
	    </tr>	
</table>
</fieldset></td>
<td></td>
</tr>
<tr>
	<td></td>
	<td><fieldset class="form-container">
<legend><div class="form-header"><h3>Expenses</h3></div></legend>
<table>
	<tr>
		<td class="form-label"><p>Expenses Type:</p></td>
		<td><p class="form-input"><?php echo $row2['expensetype']; ?></p></td>
		</tr>
		<tr>
		<td class="form-label"><p>Supplier:</p></td>
		<td><p class="form-input"><?php echo $row2['cli']; ?></p></td>
		</tr>
		<tr>
		<td class="form-label"><p>Trans Date:</p></td>
		<td><p class="form-input"><?php echo $row2['td']; ?></p></td>
	    </tr>
	    <tr>
		<td class="form-label"><p>Payment Mode:</p></td>
		<td><p class="form-input"><?php echo $row2['payment1']; ?></p></td>
	    </tr>	
</table>
</fieldset></td>
<td></td>
</tr>
<tr>
	<td></td>
	<td><fieldset class="form-container">
<legend><div class="form-header"><h3>Remarks</h3></div></legend>
<p class="form-input"><?php echo $remarks; ?></p>
</fieldset></td>
<td></td>
</tr>
</table>
<br><br>
<table align="center">
<tr>
	<td><a href="javascript:history.back()" class="btn">Go back</a></td>
	<td><button class="form-button" onclick="window.location.href='tta_act_result.php';">View Entries</button></td><td></td></tr>

    
	</table>
	</body>
	</html>