<html>
<head><title>The Thrift Avenue Accounting - Account Receivable</title>
<link rel="stylesheet" type="text/css" href="Accstyle.css">
</head>
<body>
<form action="tta_act_ap.php" method="post">
<img src="Static.png" width="100%">
<table align="center">
	<tr>
		<th></th>
		<th><div class="form-header"><div class="a"><h1>The Thrift Avenue</h1>
<h2>Welcome to Accounting Database - Account Receivable</h2></div></div></th>
<th></th>
</tr>
	<tr>
		<td></td>
		<td><fieldset class="form-container">
<legend><div class="form-header"><h3>Income</h3></div></legend>
<table>
	<tr>
<td><label class="form-label" for="income type"><p>Income Type</p></label></td>
<td><select class="form-input" id="income_type" name="income_type">
	<option value="salary">Salary</option>
	<option value="wages">Wages</option>
</select></td>
</tr>
<tr>
<td><label class="form-label" for="amt"><p>Amount in Philippine Peso</p></label></td>
<td><input class="form-input" type="text" id="amt" name="amt"></td>
</td>
</tr>
<tr>
<td><label class="form-label" for="sales"><p>Sales Date</p></label></td>
<td><input class="form-input" type="date" id="sales" name="sales"></td>
</tr>
<tr>
<td><label class="form-label" for="client"><p>Client:</p></label></td>
<td><select class="form-input" id="client" name="client">
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
<td><label class="form-label" for="trans"><p>Trans Date</p></label></td>
<td><input class="form-input" type="date" id="trans" name="trans"></td>
</tr>
<tr>
<td><label class="form-label" for="payment"><p>Payment Mode</p></label></td>
<td><select class="form-input" id="payment" name="payment">
	<option value="CASH">CASH</option>
	<option value="CHEQUE">CHEQUE</option>
	<option value="E-WALLET">E-WALLET</option>
	<option value="BC/CRYPTO">BC/CRYPTO</option>
	<option value="GOLD BARS">GOLD BARS</option>
</select></td>
</tr>
</table>
</fieldset>
</table>

<br><br>
<table align="center">
<tr>
	<td></td>
	<td><input class="form-button" type="submit" value="Next"></td></tr>
</body>
</html>

