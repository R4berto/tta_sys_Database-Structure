<!DOCTYPEhtml>
<html>
<head>
<Title>Personal Data</Title>
<link rel="stylesheet" type="text/css" href="hrstyle.css">
</head>
<img src="static3.png" width="100% ">
<body>
    <form action="tta_hrd_index2.php" method="post">
    <h1><marquee behavior="alternate">The Thrift Avenue</marquee></h1>

    <fieldset class="form-container">
<legend><div class="form-header"><h2><b>Personal Information </b></h2></div></legend>
<table border="0">
<tr>
<td><label class="form-label" for="first_name"><p><b>First Name:</p></b></label></td>
<td><input class="form-input" type="text" id="first_name"name="first_name"></td>
</tr>
<tr>
<td><label class="form-label" for="middle_name"><b><p>Middle Name: </p></b></label> </td>

<td><input class="form-input" type="text" id="middle_name"name="middle_name"></td>
</tr>
<tr>
    <td> <label class="form-label" for="last_name"><b><p>Last Name:</p></b></label></td>
    <td> <input class="form-input" type="text" id="last_name"
name="last_name"> </td>
</tr>

<tr>
    <td> <label class="form-label" for="suf"><b><p>Suffix:</p> </b></label>
<td><select id="suf" name="suf"> 
    <option>Choose a suffix</option>
<option value="Jr.">Jr. </option>
<option value="Sr.">Sr.</option> 
<option value="II. ">II</option>
<option value-"III.">III</option>
<option value-"IV.">IV</option></select></td></td>
</tr>

<tr>
<td> <label class="form-label" for="gen"> <b><p>Gender:</p></b></label></td>
        <td><select id="gen" name="gen"> 
            <option>Choose Gender</option>
        <option value="Female">Female </option>
        <option value="Male">Male</option> 
        <option value="Prefer no to say">Prefer no to say</option>
        
</tr>
<tr>
    <td>         <label class="form-label" for="dob"> <b><p>Date of Birth:</p></b></label></td>
    <td> <input class="form-input" type="date" id="dob" name="dob" required></td>
</tr>
<tr>
    <td>     <label class="form-label" for="cs"><b><p>Civil Status:</p></b></label></td>
    <td> <Select id="cs" name="cs">
            <option>Civil Status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widow">Widow</option> </Select></td>
</tr>
<tr>
    <td><label class="form-label" for="rg"><b><p>Religion:</p></b></label></td>
    <td> <select id="rg" name="rg">
        <option>Religion</option>
            <option value="Roman Catholic">Roman Catholic</option>
            <option value="Iglesia ni Cristo">Iglesia ni Cristo</option>
            <option value="Seventh-day Adventism">Seventh-day Adventism</option>
            <option value="Christian">Christian</option>
            <option value="Others">Others</option></select></td>
    
</tr>
<tr>
    <td><label class="form-label" for="n"><b><p>Nationality:</p></b></label></td>
    <td><select id="n" name="n">
    <option>Nationality</option>
    <option value="Filipino">Filipino</option>
    <option value="Chinese">Chinese</option>
    <option value="Korean">Korean</option>
    <option value="American">American</option>
    <option value="Others">Others</option></select></td>
</tr>
<tr>
   <td><label class="form-label" for="sn"><b><p>Spouse Name:</p></b></label></td>
   <td> <input class="form-input" type="text" id="sn" name="sn"></td>
</tr>
</table>
</fieldset>
<br>

<fieldset class="form-container">
    <legend><div class="form-header"><h2><b> Address</b></h2></div></legend>
<table border="0">
<tr>
    <td><label class="form-label" for="pa_address"><b><p>Provincial Address:</p> </b></label></td>
    <td><input class="form-input" type="text" id="pa_address" name="pa_address"></td>
</tr>
<tr>
    <td><label class="form-label" for="ca_address"> <b><p>Current Address: </p></b></label></td>
    <td> <input class="form-input" type="text" id="ca_address" name="ca_address"></td>
</tr>
</table>
</fieldset>
<br>

<fieldset class="form-container">
    <legend><div class="form-header"><h2><b>Contact Information</b></h2></div></legend>
<table border="0">
<tr>
    <td><label class="form-label" for="pa_contact"><b><p>Cellphone No: </p></b></label></td>
    <td><input class="form-input" type="text" id="pa_contact" name="pa_contact" maxlength="11"></td>
</tr>
<tr>
    <td><label class="form-label" for="pa_email"> <b><p>Email: </p></b></label></td>
    <td><input class="form-input" type="text" id="pa_email" name="pa_email"></td>
</tr>
<tr>
    <td><label class="form-label" for="pa_facebook"> <b><p>Facebook: </p></b></label></td>
    <td><input class="form-input" type="text" id="pa_facebook" name="pa_facebook"></td>
</tr>
<tr>
    <td><label class="form-label" for="pa_instagram"> <b><p>Instagram: </p></b></label></td>
    <td><input class="form-input" class="form-input" type="text" id="pa_instagram" name="pa_instagram">
    </tr></td>
</tr>
</table>
</fieldset>
<br>

<fieldset class="form-container">
    <legend><div class="form-header"><h2><b>Parent Information </b></h2></div></legend>
<table border="0">
<tr>
    <td><label class="form-label" for="fn"><b><p>Father's Name: </p></b></label></td>
    <td><input class="form-input" type="text" id="fn" name="fn"></td>
</tr>
<tr>
    <td><label class="form-label" for="mn"><b><p>Mother's Maiden Name: </p></b></label></td>
    <td><input class="form-input" type="text" id="mn" name="mn"></td>
</tr>
</table>
</fieldset>
<br>

<fieldset class="form-container">
    <legend><div class="form-header"><h2><b>Educational Background </b></h2></div></legend>
<table border="0">
<tr>
    <td> <label class="form-label" for="ps"><b><p>Primary School: </p></b></label></td>
    <td><input class="form-input" type="text" id="ps" name="ps"></td>
</tr>
     <tr>
        <td><label class="form-label" for="py"><b><p>Date of Graduation: </p></b></label></td>
    <td> <input class="form-input" type="date" id="py" name="py"></td>
     </tr>  
<tr>
    <td><label class="form-label" for="pa"><b><p>Primary  School Address: </p></b></label></td>
    <td><input class="form-input" type="text" id="pa" name="pa"></td>
</tr>

<tr>
        <td> <label class="form-label" for="ss"><b><p>Secondary School: </p></b></label></td>
    <td><input class="form-input" type="text" id="ss" name="ss"></td>
    </tr>

    <tr>
        <td><label class="form-label" for="sy"><b><p>Date of Graduation: </p></b></label></td>
    <td> <input class="form-input" type="date" id="sy" name="sy" ></td>
    </tr>

    <tr>
        <td><label class="form-label" for="sa"><b> <p>Secondary School Address: </p></b></label></td>
    <td><input class="form-input" type="text" id="sa" name="sa"></td>
    </tr>
<tr>
    <td> <label class="form-label" for="ts"> <b><p>Tertiary School: </p></b></label></td>

    <td><input class="form-input" type="text" id="ts" name="ts"></td>
    
    <tr>
        <td><label class="form-label" for="ty"><b><p>Date of Graduation: </p></b></label></td>
    <td> <input class="form-input" type="date" id="ty" name="ty"></td>
    </tr>

   <tr>
    <td><label class="form-label" for="ta"><b><p>Tertiary School Address: </p></b></label></td>
    <td><input class="form-input" type="text" id="ta" name="ta"></td>
   </tr>
</tr>
</table>
</fieldset>
<br>

<fieldset class="form-container">
    <legend><div class="form-header"><h2><b>Trainings/Seminar </b></h2></div></legend>
<table border="0">
<tr>
    <td><label class="form-label" for="noe"><b><p>Name of Event:</p></b></label></td>
    <td><input class="form-input" type="text" id="noe" name="noe"></td>
</tr>
<tr>
    <td><label class="form-label" for="doe"><b><p>Date of Event: </p></b> </label></td>
    <td><input class="form-input" type="date" id="doe" name="doe" required></td>
</tr>
</table>
</fieldset>
<br>

<fieldset class="form-container">
    <legend><div class="form-header"><h2><b>Work Exprience </b></h2></div></legend>
<table border="0">
<tr>
    <td><label class="form-label" for="cn"><b><p>Company Name: </p></b> </label></td>
    <td><input class="form-input" type="text" id="cn" name="cn"></td>
</tr>
<tr>
    <td><label class="form-label" for="fp"><b><p>Position: </p></b> </label></td>
    <td><input class="form-input" type="text" id="fp" name="fp"></td>
</tr>
<tr>
    <td><label class="form-label" for="dor"><b><p>Date of Resignation: </p></b> </label></td>
    <td> <input class="form-input" type="date" id="dor" name="dor" required></td>
</tr>
<tr>

<center><tr><td><input class="form-button" type="submit" value="Next"></td></tr></body></center>