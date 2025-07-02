<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "tta_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>

<?php
    // Retrieve the form data
    $pos = $_POST['pos'];
    $d = $_POST['d'];
    $w = $_POST['w'];
    $m = $_POST['m'];
    $sa = $_POST['sa'];
    $doe = $_POST['doe'];

    // Prepare the SQL statement
    $sql3 = "INSERT INTO index3 (pos, d, w, m, sa, doe) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql3);
    $stmt->bind_param("ssssss", $pos, $d, $w, $m, $sa, $doe);

    // Execute the statement
    if ($stmt->execute()) {
	
    } else {
        
    }
    
    
    ?>
    
    <?php
    // Retrieve data from the database
    $sql1 = "SELECT first_name, middle_name, last_name, suf, gen, dob,
    cs, rg, n, sn, pa_address, ca_address, pa_contact, pa_email, pa_facebook,
     pa_instagram, fn, mn, ps, py, pa, ss, sy, sa, ts, ty, ta, noe, doe, cn,
      fp, dor FROM index1";
    $sql2 = "SELECT sss, pb, ph, umid, nd, dl, pp, pt FROM index2";
    $sql3 = "SELECT pos, d, w, m, sa, doe FROM index3";
    $result = $conn->query($sql1);
    $result2 = $conn->query($sql2);
    $result3 = $conn->query($sql1);
    $row = $result->fetch_array();
    $row2 = $result2->fetch_array();
    $row3 = $result3->fetch_array();
    
    ?>



<html>
<head><title>The Thrift Avenue Human Resources</title>
<link rel="stylesheet" type="text/css" href="hrstyle.css">
</head>
<body>
    <img src="static3.png" width="100%">
	<table align= "Center">
        <tr>
            <th></th>
            <th><div class="form-header"><div class="a"><h1>The Thrift Avenue</h1>
    <h2>Human Resources Database</h2></div></div></th>
    <th></th>
    <th></th>
    </tr>
    <tr>
        <td></td>
        <td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Personal Data</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>First Name:</p></td>
            <td><p class="form-input"><?php echo $row ['first_name']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Middle Name:</p></td>
            <td><p class="form-input"><?php echo $row ['middle_name']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Last Name:</p></td>
            <td><p class="form-input"><?php echo $row ['last_name']; ?></p></td>
        </tr>	
        <tr>
            <td class="form-label"><p>Suffix:</p></td>
            <td><p class="form-input"><?php echo $row ['suf']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Gender:</p></td>
            <td><p class="form-input"><?php echo $row ['gen']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Date of Birth:</p></td>
            <td><p class="form-input"><?php echo $row ['dob']; ?></p></td>
        </tr>	
        <tr>
            <td class="form-label"><p>Civil Status:</p></td>
            <td><p class="form-input"><?php echo $row ['cs']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Religion:</p></td>
            <td><p class="form-input"><?php echo $row ['rg']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Nationality:</p></td>
            <td><p class="form-input"><?php echo $row ['n']; ?></p></td>
        </tr>	
</table></fieldset></td></tr>

<tr>
<td></td>
<td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Address</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>Provincial Address:</p></td>
            <td><p class="form-input"><?php echo $row ['pa_address']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Current Address:</p></td>
            <td><p class="form-input"><?php echo $row ['ca_address']; ?></p></td>
            </tr>
</table></fieldset></td></tr>

<tr>
<td></td>
<td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Contact Information</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>Cellphone No.:</p></td>
            <td><p class="form-input"><?php echo $row ['pa_contact']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Email:</p></td>
            <td><p class="form-input"><?php echo $row ['pa_email']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Facebook:</p></td>
            <td><p class="form-input"><?php echo $row ['pa_facebook']; ?></p></td>
        </tr>	
        <tr>
            <td class="form-label"><p>Instagram:</p></td>
            <td><p class="form-input"><?php echo $row ['pa_instagram']; ?></p></td>
            </tr>
</table></fieldset></td></tr>

<tr>
<td></td>
<td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Parents Information</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>Father's Name:</p></td>
            <td><p class="form-input"><?php echo $row ['fn']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Mother's Maiden Name:</p></td>
            <td><p class="form-input"><?php echo $row ['mn']; ?></p></td>
            </tr>
            <tr>
</table></fieldset></td></tr>

<tr>
<td></td>
<td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Educational Background</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>Primary School:</p></td>
            <td><p class="form-input"><?php echo $row ['ps']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Date of Graduation:</p></td>
            <td><p class="form-input"><?php echo $row ['py']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Primary School Address:</p></td>
            <td><p class="form-input"><?php echo $row ['pa']; ?></p></td>
        </tr>	
        <tr>
            <td class="form-label"><p>Secondary School:</p></td>
            <td><p class="form-input"><?php echo $row ['ss']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Date of Graduation:</p></td>
            <td><p class="form-input"><?php echo $row ['sy']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Secondary School Address:</p></td>
            <td><p class="form-input"><?php echo $row ['sa']; ?></p></td>
        </tr>
        <tr>
            <td class="form-label"><p>Tertiary School:</p></td>
            <td><p class="form-input"><?php echo $row ['ts']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Date of Graduation</p></td>
            <td><p class="form-input"><?php echo $row ['ty']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Tertiary School Address:</p></td>
            <td><p class="form-input"><?php echo $row ['ta']; ?></p></td>
        </tr>		        
</table></fieldset></td></tr>

<tr>
<td></td>
<td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Trainings and Seminars</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>Name of Event:</p></td>
            <td><p class="form-input"><?php echo $row ['noe']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Date of Event:</p></td>
            <td><p class="form-input"><?php echo $row ['doe']; ?></p></td>
            </tr>
</table></fieldset></td></tr>

<tr>
<td></td>
<td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Work Exprience</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>Company Name:</p></td>
            <td><p class="form-input"><?php echo $row ['cn']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Position:</p></td>
            <td><p class="form-input"><?php echo $row ['fp']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Date of Resignation:</p></td>
            <td><p class="form-input"><?php echo $row ['dor']; ?></p></td>
            </tr>
</table></fieldset></td></tr>

<tr>
<td></td>
<td>
    <br>
    <fieldset class="form-container"><br>
    <legend><div class="form-header"><h3>Public Data</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>SS ID NO.:</p></td>
            <td><p class="form-input"><?php echo $row2 ['sss']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>PAG-IBIG ID NO.:</p></td>
            <td><p class="form-input"><?php echo $row2 ['pb']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>PHILHEALTH ID NO.:</p></td>
            <td><p class="form-input"><?php echo $row2 ['ph']; ?></p></td>
        </tr>	
        <tr>
            <td class="form-label"><p>UMID ID NO.:</p></td>
            <td><p class="form-input"><?php echo $row2 ['umid']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>National Id:</p></td>
            <td><p class="form-input"><?php echo $row2 ['nd']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Driver License Id No.:</p></td>
            <td><p class="form-input"><?php echo $row2 ['dl']; ?></p></td>
        </tr>
        <tr>
            <td class="form-label"><p>Passport:</p></td>
            <td><p class="form-input"><?php echo $row2 ['pp']; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Postal Id No.:</p></td>
            <td><p class="form-input"><?php echo $row2 ['pt']; ?></p></td>
            </tr>	        
</table></fieldset></td></tr>



<tr>
<td></td>
<td>
    <fieldset class="form-container">
    <legend><div class="form-header"><h3>Company Data</h3></div></legend>
    <table>
        <tr>
            <td class="form-label"><p>Position:</p></td>
            <td><p class="form-input"><?php echo $pos; ?></p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Daily:</p></td>
            <td><p class="form-input"><?php echo $d; ?> PHP</p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Weekly:</p></td>
            <td><p class="form-input"><?php echo $w; ?> PHP</p></td>
        </tr>	
        <tr>
            <td class="form-label"><p>Monthly:</p></td>
            <td><p class="form-input"><?php echo $m; ?> PHP</p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Salary Amount:</p></td>
            <td><p class="form-input"><?php echo $sa; ?> PHP</p></td>
            </tr>
            <tr>
            <td class="form-label"><p>Date of Employment:</p></td>
            <td><p class="form-input"><?php echo $doe; ?></p></td>
        </tr>        
</table></fieldset></td></tr>

<br><br>
<table align="center">
<tr>
	<td><a href="javascript:history.back()" class="btn">Go back</a></td>
	<td><button class="form-button" onclick="window.location.href='tta_hrd_admin_view.php';">View Entries</button></td><td></td></tr>
	</table>
	</body>
	</html>