<?php   
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>The Thrift Avenue Database</title>
        <style>
            table {
                width: 80%;
                font-size: 1.5em;
                margin: 0 auto;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                text-align: left;
            }
            th {
                background-color: #f2f2f2;
            }
            tr:nth-child(even) {
                background-color: #f2f2f2;
            }
            h1 {
                width: 100%;
                font-size: 60px;
                color: black;
                text-align: center;
                text-transform: uppercase;
                font-weight: bold;
            }
        </style>
        </head>
        <h1>The Thrift Avenue</h1>
        <h1>Database</h1>
        <h2>Hello,<?php echo $_SESSION['user_name'];?>!!! Welcome back to the database structure</h2>
        <a href="logout.php">Logout</a>
        <body>
            <table border="1" cellspacing="0" cellpadding="5">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Fields</th>
                        <th>Data Type</th>
                        <th>PK</th>
                        <th>AI</th>
                    </tr>
                </thead>
                <tbody>
                    <!--Accountant--> 
                    <tr>
                        <td>Accountant</td>
                        <td>Name</td>
                        <td>string</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Home Address</td>
                        <td>Text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Contact Number</td>
                        <td>long integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Email Address</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Social Media Account</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Company</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>TIN</td>
                        <td>Long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Income Type</td>
                        <td>set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Amount in Philippine Peso</td>
                        <td>set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Sales Date</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Client</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Trans Date</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Payment Mode</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Expenses Type</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Supplier</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Trans Date</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Payment Mode</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Account Receive</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Account Payable</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Payroll Salary</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Supplier</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Tax</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Office Supplies</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Sales</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Benefits (SS, etc.)</td>
                        <td>set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>RF(petty cash)</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Accountant</td>
                        <td>Insurances</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Personal Information - Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Personal Information - Gender</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <!--Human Resources--> 
                    <tr>
                        <td>Hr</td>
                        <td>First Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Middle Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Last Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Suffix</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Gender</td>
                        <td>set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Date of Birth</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Civil Status</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Religion</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Nationality</td>
                        <td>set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Spouse Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Provincial Address</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Current Address</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Cellphone No</td>
                        <td>integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Email</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Facebook</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Instagram</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Father's name</td>
                        <td>string</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Mother's name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Primary School</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Primary year</td>
                        <td>Year</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Secondary School</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Secondary year</td>
                        <td>Year</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Tertiary School</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Tertiary year</td>
                        <td>Year</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Name of Event</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Date of Event</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Company Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Position</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Date of Resignation</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Reason of Resignation</td>
                        <td>text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>SSS ID No</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>SSS Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>PAGIBIG ID No</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>PAGIBIG Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>PHILHEALTH ID No</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>PHILHEALTH Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>TAX </td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>TAX Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>UMID ID No</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>UMID Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>National ID</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>National Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Driver Liscence  No</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Driver License Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Passport</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Passport Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Postal ID No</td>
                        <td>long Integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Postal Picture</td>
                        <td>Binary Large Object</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Position</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Daily</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Weekly</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Monthly</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Salary Amount</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Date of Employment</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <!--Marketing--> 
                    <tr>
                        <td>Marketing</td>
                        <td>First Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Middle Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Last Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Hr</td>
                        <td>Suffix</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Email</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Phone Number</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Company Website</td>
                        <td>varchar</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                        <td>Marketing</td>
                        <td>Address</td>
                        <td>text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Entry type</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Company type</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Product Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Quantity</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Amount</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Mode of Payment</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Transaction Date</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Delivery Date</td>
                        <td>Date</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Marketing</td>
                        <td>Remarks</td>
                        <td>Text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <!--SCM-->
                    <tr>
                        <td>SCM</td>
                        <td>Material</td>
                        <td>string</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>In</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Out</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Available</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Inventory value</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Category</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Description</td>
                        <td>Text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Supplier ID</td>
                        <td>Long integer</td>
                        <td>✓</td>
                        <td>✓</td>
                    <tr>
                        <td>SCM</td>
                        <td>Amount</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    <tr>
                        <td>SCM</td>
                        <td>Supplier Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Contact Information</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Address</td>
                        <td>Text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Product name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Description</td>
                        <td>Text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Product type</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Product cost</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Product Quantity</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Inventory Release Form Product name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                        <td>SCM</td>
                        <td>Inventory Release Form Quantity</td>
                        <td>Decimal</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Inventory Release Form Purpose</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Inventory Release Form Request by</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>SCM</td>
                        <td>Inventory Release Form Transaction Details</td>
                        <td>Text</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <!--Payroll-->
                    <tr>
                        <td>Payroll</td>
                        <td>Full Name</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Job Position</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Contact Information</td>
                        <td>String</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Contact Number</td>
                        <td>Long integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Contact Number</td>
                        <td>Email Address</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Overtime Hours</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Work Hours</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Incentives/Special pays</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr> 
                    <tr>
                        <td>Payroll</td>
                        <td>Holiday Working Hours</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr> 
                    <tr>
                        <td>Payroll</td>
                        <td>Percentage Holiday Working Hours</td>
                        <td>Set</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Sick Leave (no. of days)</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Vacation Leave (no. of days)</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>
                    <tr>
                        <td>Payroll</td>
                        <td>Salary Range</td>
                        <td>Integer</td>
                        <td>x</td>
                        <td>x</td>
                    </tr>        
                </tbody>
            </table>
        </body>
        </html>
     <?php
}
else {
    header("Location:index.php");
    exit();
}
?>