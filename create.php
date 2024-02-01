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
    <title>Add New Hotel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Add a Hotel</h1>
<form action="save.php" method="post">
<div>
<label for="name">Name:</label>
<input type="text" id="name" name="name">
</div>
<div>
<label for="stars">Stars:</label>
<input type="text" id="stars" name="stars">
</div>
<div>
    <p>Please use format 00:00:00</p>
<label for="check_in">Check In:</label>
<input type="text" id="check_in" name="check_in">
</div>
<div>
    <p>Please use format 00:00:00</p>
<label for="check_out">Check Out:</label>
<input type="text" id="check_our" name="check_out">
</div>
<div>
    <p>Please enter an id number from: 1 = Batley, 2 = Colne Valley, 3 = Denby Dale, 4 = Holme Valley, 5 = Huddersfield East, 6 = Huddersfield West, 7 = Kirkbutton, 8 = Mirfield, 9 = Spen Valley, and Heckmondwike.</p>
<label for="location_id">Location:</label>
<input type="text" id="location_id" name="location_id">
</div>
<div>
    <p>Please select an id number from: 1 = Boutique, 2 = Budget, 3 = Business, 4 = Historic, 5 = Luxary.</p>
<label for="style_id">Style:</label>
<input type="text" id="style_id" name="style_id">
<input type="submit" name="sumbit" value = "Add Hotel">
</div>
</body>
</html>