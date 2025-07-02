<?php
$servername = "localhost";
$username = "root";  
$password = ""; 
$database = "tta_database";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql1 = "SELECT first_name, middle_name, last_name, suf, gen, dob, cs, rg, n, sn, pa_address, ca_address, pa_contact, pa_email, pa_facebook, pa_instagram, fn, mn, ps, py, pa, ss, sy, sa, ts, ty, ta, noe, doe, cn, fp, dor FROM index1";
$sql2 = "SELECT sss, pb, ph, umid, nd, dl, pp, pt FROM index2";
$sql3 = "SELECT pos, d, w, m, sa, doe FROM index3";
$result = $conn->query($sql1);
$result2 = $conn->query($sql2);
$result3 = $conn->query($sql3);

?>

<!DOCTYPE html>
<html>
<head>
    <title>User Human Resources Database</title>
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
<img src="static3.png" width="100%">
<h1>
		<center>The Thrift Avenue</center>
	</h1>
	<h2>
		<center>Human Resources Database</center>
	</h2>

        <?php
        if ($result->num_rows > 0 && $result2->num_rows > 0 && $result3->num_rows > 0) {
             while (($row = $result->fetch_assoc()) && ($row2 = $result2->fetch_assoc()) && ($row3 = $result3->fetch_assoc())) {
                echo "<div class='form-data'>";
                echo "<h2>Personal Data</h2>";
                echo "<p><strong>First Name:</strong> " . $row["first_name"] . "</p>";
                echo "<p><strong>Middle Name:</strong> " . $row["middle_name"] . "</p>";
                echo "<p><strong>Last Name:</strong> " . $row["last_name"] . "</p>";
                echo "<p><strong>Suffix: </strong> " . $row["suf"] ."</p>";
                echo "<p><strong>Gender:</strong> " . $row["gen"] . "</p>";
                echo "<p><strong>Date of Birth:</strong> " . $row["dob"] . "</p>";
                echo "<p><strong>Civil Status:</strong> " . $row["cs"] . "</p>";
                echo "<p><strong>Religion: </strong> " . $row["rg"] ."</p>";
                echo "<p><strong>Nationality:</strong> " . $row["n"] . "</p>";
                echo "<p><strong>Spouse Name:</strong> " . $row["ss"] . "</p>";
                echo "<h2>Address</h2>";
                echo "<p><strong>Provincial Address:</strong> " . $row["pa_address"] . "</p>";
                echo "<p><strong>Current Address: </strong> " . $row["ca_address"] ."</p>";
                echo "<h2>Contact Information</h2>";
                echo "<p><strong>Cellphone No.:</strong> " . $row["pa_contact"] . "</p>";
                echo "<p><strong>Email:</strong> " . $row["pa_email"] . "</p>";
                echo "<p><strong>Facebook:</strong> " . $row["pa_facebook"] . "</p>";
                echo "<p><strong>Instagram: </strong> " . $row["pa_instagram"] ."</p>";
                echo "<br>";
                echo "<h2>Parent's Information</h2>";
                echo "<p><strong>Father's Name:</strong> " . $row["fn"] . "</p>";
                echo "<p><strong>Mother's Name:</strong> " . $row["mn"] . "</p>";
                echo "<br>";
                echo "<h2>Education Background</h2>";
                echo "<p><strong>Primary School:</strong> " . $row["ps"] . "</p>";
                echo "<p><strong>Month and Year:</strong> " . $row["py"] . "</p>";
                echo "<p><strong>School Address:</strong> " . $row["pa"] . "</p>";
                echo "<p><strong>Secondary School:</strong> " . $row["ss"] . "</p>";
                echo "<p><strong>Month and Year:</strong> " . $row["sy"] . "</p>";
                echo "<p><strong>School Address:</strong> " . $row["sa"] . "</p>";
                echo "<p><strong>Tertiary School:</strong> " . $row["ts"] . "</p>";
                echo "<p><strong>Month and Year:</strong> " . $row["ty"] . "</p>";
                echo "<p><strong>School Address:</strong> " . $row["ta"] . "</p>";
                echo "<br>";
                echo "<h2>Trainings and Seminars</h2>";
                echo "<p><strong>Name of Event:</strong> " . $row["noe"] . "</p>";
                echo "<p><strong>Date of Event:</strong> " . $row["doe"] . "</p>";
                echo "<br>";
                echo "<h2>Work Exprience</h2>";
                echo "<p><strong>Company Name:</strong> " . $row["cn"] . "</p>";
                echo "<p><strong>Position:</strong> " . $row["fp"] . "</p>";
                echo "<p><strong>Date of Resignation:</strong> " . $row["dor"] . "</p>";
                echo "<br>";
                echo "<h2>Public Data</h2>";
                echo "<p><strong>SSS ID No:</strong> " . $row2["sss"] . "</p>";
                echo "<p><strong>PAG-IBIG ID No.:</strong> " . $row2["pb"] . "</p>";
                echo "<p><strong>PHILHEALTH ID No.:</strong> " . $row2["umid"] . "</p>";
                echo "<p><strong>UMID ID No:</strong> " . $row2["umid"] . "</p>";
                echo "<p><strong>National ID:</strong> " . $row2["nd"] . "</p>";
                echo "<p><strong>Drivers License No.:</strong> " . $row2["dl"] . "</p>";
                echo "<p><strong>Passport:</strong> " . $row2["pp"] . "</p>";
                echo "<p><strong>Postal ID No.:</strong> " . $row2["pt"] . "</p>";
                echo "<br>";
                echo "<h2>Company Data</h2>";
                echo "<p><strong>Position:</strong> " . $row3["pos"] . "</p>";
                echo "<p><strong>Daily.:</strong> " . $row3["d"] . "</p>";
                echo "<p><strong>Weekly:</strong> " . $row3["w"] . "</p>";
                echo "<p><strong>Monthly:</strong> " . $row3["m"] . "</p>";
                echo "<p><strong>Salary Amount:</strong> " . $row3["sa"] . "</p>";
                echo "<p><strong>Date of Employment:</strong> " . $row3["doe"] . "</p>";
                echo "</div>";
                echo "<hr>";
            }
        }
        else {
            echo "<p>No form data found.</p>";
        }

        $conn->close();
        ?>
        <a href="tta_hrd_index1.php" class="btn">New Entry</a>
        <a href="user_page.php" class="btn">Go To Home</a>
</body>
</html>