
<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=Work', 'root', '');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$query = "SELECT id, name, stars FROM hotels";
$resultset = $conn->query($query);
$hotels = $resultset->fetchAll();
$conn=NULL;
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- Link to your CSS file -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- Your PHP and HTML content here -->
    <h1>Home Page</h1>
    <p>Welcome to Kirklees Hotels</p>
    <nav>
        <ul>
            <li><a href="home.php">Home</a></li>
            <li><a href="hotels.php">Hotels</a><li>
            <li><a href="create.php">Add Hotels</a><li>
            <li><a href="Login.php">Log in</a></li>
        </ul>
    </nav>


</body>
</html>