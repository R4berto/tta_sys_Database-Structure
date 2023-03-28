<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page For Admin</title>
</head>
<body>
    <h1>The Thrift Avenue</h1>
    <form action="loginUF.php" method="post">
        <h2>Login Admin</h2>
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>
        <fieldset>
            <legend>Enter your User Account:</legend>
            <label for="uname"><b>Username:</b></label>
            <input type="text" placeholder="Enter Username" name="uname" ><br>
            <label for="password"><b>Password:   </b></label>
            <input type="password" placeholder="Enter Password" name="password"><br><br>
            <button type="submit">Login</button>
            <input type="checkbox" id="check" name="check" value="RememberMe">
            <label for="Check">Remember me</label><br>
        </fieldset>
    </form>
</body>
</html>