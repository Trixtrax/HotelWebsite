<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=Work', 'root', '');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}
$hotelId = $_GET["id"];

$query = "SELECT * FROM hotels WHERE hotels.id = :id";
$stmt = $conn->prepare($query);
$stmt->bindValue(':id', $hotelId);
$stmt->execute();
$chosenHotel = $stmt->fetch();
$conn=NULL;
?>


<!DOCTYPE HTML>
<html>
<head>
<title>Prepared statement example</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php


if($chosenHotel){
	echo "<h1>{$chosenHotel['name']}</h1>";
    echo "<p>{$chosenHotel['name']} has {$chosenHotel['stars']} stars. The Check-in is at {$chosenHotel['check_in']} and the Check-out is at {$chosenHotel['check_out']}</p>";
}else{
	echo "<p>No records found.</p>";
}


?>

</body>
</html>