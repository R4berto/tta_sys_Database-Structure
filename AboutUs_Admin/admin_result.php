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
$AboutUsDes = $_POST['AboutUsDes'];
$client1 = $_POST['client1'];
$client2 = $_POST['client2'];
$client3 = $_POST['client3'];
$client4 = $_POST['client4'];
$supply1 = $_POST['supply1'];
$sd1 = $_POST['sd1'];
$supply2 = $_POST['supply2'];
$sd2 = $_POST['sd2'];
$supply3 = $_POST['supply3'];
$sd3 = $_POST['sd3'];
$f1 = $_POST['f1'];
$fd1 = $_POST['fd1'];
$f2 = $_POST['f2'];
$fd2 = $_POST['fd2'];
$f3 = $_POST['f3'];
$fd3 = $_POST['fd3'];
$t1 = $_POST['t1'];
$t2 = $_POST['t2'];
$t3 = $_POST['t3'];
$t4 = $_POST['t4'];
$q1 = $_POST['q1'];
$a1 = $_POST['a1'];
$q2 = $_POST['q2'];
$a2 = $_POST['a2'];
$q3 = $_POST['q3'];
$a3 = $_POST['a3'];
$q4 = $_POST['q4'];
$a4 = $_POST['a4'];
$q5 = $_POST['q5'];
$a5 = $_POST['a5'];




// Prepare the INSERT statement
$sql = "INSERT INTO admin1 (AboutUsDes, client1, client2, client3, client4, supply1, sd1, supply2, sd2, supply3, sd3, f1, fd1, f2, fd2,
f3, fd3, t1, t2, t3, t4,q1,a1,q2,a2,q3,a3,q4,a4,q5,a5) VALUES (?, ?, ?, ?, ?, ?, ?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?,?,?,?,?,?,?,?,?,?,?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssssssssssssssssssssssssssss", $AboutUsDes, $client1, $client2, $client3, $client4, $supply1, $sd1, $supply2, $sd2, $supply3, $sd3, $f1, 
$fd1, $f2, $fd2, $f3, $fd3, $t1, $t2, $t3, $t4,$q1, $a1, $q2, $a2, $q3, $a3, $q4, $a4, $q5, $a5);

// Execute the statement
if ($stmt->execute()) {
	
} else {
	
}


?>

<?php
// Retrieve data from the database
$sql = "SELECT AboutUsDes, client1, client2, client3, client4, supply1, sd1, supply2, sd2, supply3,
sd3, f1, fd1, f2, fd2, f3, fd3, t1, t2, t3, t4, q1 , a1 ,q2 ,a2 , q3, a3, q4, a4, q5, a5 FROM admin1";



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Thrift Avenue</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<img src="Static.png" width="100%">
<table align="center">
	<tr>
	<th></th>
	<th><div class="form-header"><h1>The <span>Thrift Avenue</span></h1></div></th>
    <th></th>
    </tr>
    
    <tr>
    <td></td>
    <td><fieldset class="form-container">
    <legend><div class="form-header"><p>About Us</p></div></legend>
    <table>
    <tr>
    <td class="form-input"><?php echo $AboutUsDes; ?></td>
    </tr>
    </table>
    </fieldset>
    </td>
    <td></td>
    </tr>
    <br>
    <br>

    <tr>
    <td></td>
    <td><fieldset class="form-container">
    <legend><div class="form-header"><p>Profile</p></div></legend>
    <table>
    <tr>
    <td class="form-label"><p>Clients</p></td>
	</tr>
    <tr>
    <td>
    <ul>
    <li class="form-input"><?php echo $client1; ?></li>
    <li class="form-input"><?php echo $client2; ?></li>
    <li class="form-input"><?php echo $client3; ?></li>
    <li class="form-input"><?php echo $client4; ?></li>
    </ul>
    </td>
    </tr>
    <tr>
    <td class="form-label"><p>Supplies</p></td>
    </tr>
    <tr>
    <td>
    <ul>
	<li class="form-input"><?php echo $supply1; ?></li>
    <p class="form-input"><?php echo $sd1;?></p>
    <li class="form-input"><?php echo $supply2; ?></li>
    <p class="form-input"><?php echo $sd2; ?></p>
    <li class="form-input"><?php echo $supply3; ?></li>
    <p class="form-input"><?php echo $sd3; ?></p>
    </ul>
    </td>
    </tr>
    <tr>
    <td class="form-label"><p>Financial Institution</p></td>
    </tr>
    <tr>
    <td>
    <ul>
    <li class="form-input"><?php echo $f1; ?></li>
    <p class="form-input"><?php echo $fd1; ?></p>
    <li class="form-input"><?php echo $f2; ?></li>
    <p class="form-input"><?php echo $fd2; ?></p>
    <li class="form-input"><?php echo $f3; ?></li>
    <p class="form-input"><?php echo $fd3; ?></p>
    </ul>
    </td>
    </tr>
    </table>
    <br>
    <br>

    <tr>
    <td></td>
    <td><fieldset class="form-container">
    <legend><div class="form-header"><p>Testimonies</p></div></legend>
    <table>
    <td>
    <ul>
    <li class="form-input"><?php echo $t1; ?></li>
    <li class="form-input"><?php echo $t2; ?></li>
    <li class="form-input"><?php echo $t3; ?></li>
	<li class="form-input"><?php echo $t4; ?></li>
    </ul>
    </td>
    </tr>
    </table>
    <br>
    <br>
    
    <tr>
    <td></td>
    <td><fieldset class="form-container">
    <legend><div class="form-header"><p>FAQ's</p></div></legend>
    <table>
    <tr>
    <td class="form-label"><p>Answers</p></td>
    </tr>
    <tr>
    <td>
    <ol>
    <li class="form-input"><?php echo $q1; ?></li> 
    <p class="form-input"><?php echo $a1; ?></p>
    <li class="form-input"><?php echo $q2; ?></li>
    <p class="form-input"><?php echo $a2; ?></p>
    <li class="form-input"><?php echo $q3; ?></li>
    <p class="form-input"> <?php echo $a3; ?></p>
    <li class="form-input"><?php echo $q4; ?></li>
    <p class="form-input"><?php echo $a4; ?></p>
    <li class="form-input"><?php echo $q5; ?></li>
    <p class="form-input"><?php echo $a5; ?></p>
    </td>
    </tr>
    </ol>
    </table>
    </table>
    <br></br>

    <table align="center">
<tr>
<td></td>
<td><button class="form-button" onclick="window.location.href='tta_sys_admin_index.php';">Update Post</button></td>
<td><a href="http://localhost/tta/admin_page.php" class="btn">Go To Home</a></td>
</tr>
</body>
</html>
