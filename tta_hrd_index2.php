<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tta_database";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve form data
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name']; 
$suf = $_POST['suf'];
$gen = $_POST['gen'];
$dob = $_POST['dob'];
$cs = $_POST['cs']; 
$rg = $_POST['rg'];
$n = $_POST['n'];
$sn = $_POST['sn']; 
$pa_address = $_POST['pa_address']; 
$ca_address = $_POST['ca_address']; 
$pa_contact = $_POST['pa_contact']; 
$pa_email = $_POST['pa_email'];
$pa_facebook = $_POST['pa_facebook'];
$pa_instagram = $_POST['pa_instagram'];
$fn = $_POST['fn'];
$mn = $_POST['mn']; 
$ps = $_POST['ps']; 
$py = $_POST['py']; 
$pa = $_POST['pa']; 
$ss = $_POST['ss']; 
$sy = $_POST['sy']; 
$sa = $_POST['sa']; 
$ts = $_POST['ts']; 
$ty = $_POST['ty']; 
$ta = $_POST['ta']; 
$noe = $_POST['noe']; 
$doe = $_POST['doe']; 
$cn = $_POST['cn']; 
$fp = $_POST['fp']; 
$dor = $_POST['dor']; 

// Insert data into the database
$sql1 = "INSERT INTO index1(first_name, middle_name, last_name, suf, gen, dob, cs, rg, n, sn, pa_address, ca_address, pa_contact, pa_email, pa_facebook, pa_instagram, fn, mn, ps, py, pa, ss, sy, sa, ts, ty, ta, noe, doe, cn, fp, dor) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql1);
$stmt->bind_param("ssssssssssssssssssssssssssssssss", $first_name, $middle_name, $last_name, $suf, $gen, $dob, $cs, $rg, $n, $sn, $pa_address, $ca_address, $pa_contact, $pa_email, $pa_facebook, $pa_instagram, $fn, $mn, $ps, $py, $pa, $ss, $sy, $sa, $ts, $ty, $ta, $noe, $doe, $cn, $fp, $dor);

if (!$stmt) {
    die("Error: " . $conn->error);
}



if ($stmt->execute()) {
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
<title>Public Data</title>
<link rel="stylesheet" type="text/css" href="hrstyle.css">
</head>
<body>
<img src="static3.png" width="100%">

<h1><marquee behavior="alternate">The Thrift Avenue</marquee></h1>

<form action="tta_hrd_index3.php" method="post">
<fieldset class="form-container">
<legend><div class="form-header"><h2><b>Public Data</b></h2></div></legend>
<table border="0">
<tr>
    <td><label class="form-label" for="SSS"><b><p>SSS ID No: </p></b></label></td>
    <td><input class="form-input" type="text" id="sss" name="sss" maxlength="12" placeholder="01-1234567-1"></td>
</tr>
<tr>
    <td><label class="form-label" for="PAG-IBIG"><b><p>PAGIBIG ID No: </p></b></label></td>
    <td><input class="form-input" type="text" id="pb" name="pb" maxlength="14" placeholder="0123-4567-8901"></td>
</tr>
<tr>
    <td><label class="form-label" for="PHILHEALTH"><b><p>PHILHEALTH ID No: </p></b></label></td>
    <td><input class="form-input" type="text" id="ph" name="ph" maxlength="14" placeholder="01-234567890-1"></td>
</tr>
<tr>
    <td><label class="form-label" for="UMID"><b><p>UMID ID No: </p></b></label></td>
    <td><input class="form-input" type="text" id="umid" name="umid" maxlength="14" placeholder="0028-1215160-9"></td>
</tr>
<tr>
    <td><label class="form-label" for="Nat.Id"><b><p>National ID: </p></b></label></td>
    <td><input class="form-input" type="text" id="nd" name="nd" maxlength="15" placeholder="1234-567-8912-3"></td>
</tr>
<tr>
    <td><label class="form-label" for="Driver Lic"><b><p>Driver License No: </p></b></label></td>
    <td><input class="form-input" type="text" id="dl" name="dl" maxlength="13" placeholder="N03-12-123456"></td>
</tr>
<tr>
    <td><label class="form-label" for="Passport"><b><p>Passport: </p></b></label></td>
    <td><input class="form-input" type="text" id="pp" name="pp" maxlength="9" placeholder="P1234567A"></td>
</tr>
<tr>
    <td><label class="form-label" for="Postal.Id"><b><p>Postal ID No: </p></b></label></td>
    <td><input class="form-input" type="text" id="pt" name="pt" maxlength="12" placeholder="100141234567"></td>
</tr>
</table>
<tr><td><a href="javascript:history.back()" class="btn">Go back</a><br></br></td></tr>
<tr><td><input class="form-button" type="submit" value="Next"></td></tr>
</fieldset>
</form>

</body>
</html>
