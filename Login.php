<!DOCTYPE html>
<html lang="en">
<head>
<title>Login Form : Kirklees Hotels.</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Welcome to Kirklees Hotels.</h1>
<form action="Process.php" method="post">
    <label for="username">Email address:</label>
    <input type="email" id="email" name="email">
    <label for="password" >Password:</label>
    <input type="password" id="password" name="password">
    <input type="submit" name="login" value="Login">
</form>
</body>
</html>