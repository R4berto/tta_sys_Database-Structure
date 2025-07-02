<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tta_database";

$conn = new mysqli($servername, $username, $password, $database);

if($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST['FirstName'])) {
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


$sql = "INSERT INTO life (FirstName, MiddleName, LastName, Suffix, CellphoneNumber, Email, Address, Website, Entrytype, CompanyName, CompanyType) VALUES (?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ssssissssss", $fname, $mname, $lname, $suffix, $cpnum, $email, $address, $website, $entrytype, $compname, $comptype);

if ($stmt-> execute()) {
	echo "Form data saved successfully.";
	header("Location:tta_mkt_order.html");
} else {
	echo "Error: " . $stmt->error;
}

$stmt->close();
}
if(isset($_POST['Product'])) {
	$Product = $_POST['Product'];
	$qty = $_POST['qty'];
	$amount = $_POST['amount'];
	$payment = $_POST['payment'];
	$Remarks = $_POST['Remarks'];
	$DeliveryDate = $_POST['DeliveryDate'];
	
	$sql = "INSERT INTO ord (Product, qty, amount, payment, Remarks, DeliveryDate) 
			VALUES (?, ?, ?, ?, ?, ?)";
	$stmt = $conn->prepare($sql);
	$stmt->bind_param("ssssss", $Product, $qty, $amount, $payment, $Remarks, $DeliveryDate);
	
	if ($stmt->execute()) {
		echo "Form data from orddata saved successfully.";
		header("Location: tta_mkt_view.php");
	} else {
		echo "Error: " . $stmt->error;
	}
	
		$stmt->close();
	}
	
	$conn->close();


?>