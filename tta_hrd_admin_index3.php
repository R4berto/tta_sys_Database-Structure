<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "tta_database";
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Retrieve the form data
    $sss = $_POST['sss'];
    $pb = $_POST['pb'];
    $ph = $_POST['ph'];
    $umid = $_POST['umid'];
    $nd = $_POST['nd'];
    $dl = $_POST['dl'];
    $pp = $_POST['pp'];
    $pt = $_POST['pt'];



        // Prepare the SQL statement
        $sql2 = "INSERT INTO index2 (sss, pb, ph, umid, nd, dl, pp, pt) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $conn->prepare($sql2);
        $stmt->bind_param("ssssssss", $sss, $pb, $ph, $umid, $nd, $dl, $pp, $pt);

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
    <form action="tta_hrd_admin_result.php" method="post">
<fieldset class="form-container">
<legend><div class="form-header"><h2><b>Company Data</b></h2></div></legend>
<table border="0">
<tr>
<td><label class="form-label" for="Position"><b><p>Position: </p></b></label></td>
<td><input class="form-input" type="text" id="pos" name="pos"></td>
</tr>
<tr>
    <td><label class="form-label" for="Daily"><b><p>Daily: </p></b></label></td>
    <td><input class="form-input" type="number" id="d" name="d"></td>
</tr>
<tr>
    <td><label class="form-label" for="Weekly"><b><p>Weekly: </p></b></label></td>
    <td><input class="form-input" type="number" id="w" name="w"></td>
</tr>
<tr>
    <td><label class="form-label" for="Monthly"><b><p>Monthly: </p></b></label></td>
    <td><input class="form-input" type="number" id="m" name="m"></td>
</tr>
<tr>
    <td><label class="form-label" for="Salary Amount"><b><p>Salary Amount: </p></b> </label></td>
    <td><input class="form-input" type="number" id="sa" name="sa"></td>
</tr>
<tr>
    <td><label class="form-label" for="DateofEmployment"><b><p>Date of Employment:</p></b></label></td>
    <td><input class="form-input" type="date" id="doe" name="doe" required></td>
</tr>

<tr><td><a href="javascript:history.back()" class="btn">Go back</a></td></tr>
<tr><td><button type="submit" class="btn">Submit</button></td></tr>
</table>
</fieldset>
</form>
</body>
</html>
