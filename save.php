<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=Work', 'root', '');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "Oh no, there was a problem" . $exception->getMessage();
}

$name = $_POST['name'];
$stars = $_POST['stars'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$location = $_POST['location_id'];
$style = $_POST['style_id'];

var_dump($_POST);

$query = "INSERT INTO hotels (id, name, stars, check_in, check_out, location_id, style_id)
VALUES (NULL,:name, :stars, :check_in, :check_out, :location_id, :style_id)";

$stmt = $conn->prepare($query);

$stmt->bindValue(':name', $name);
$stmt->bindValue(':stars', $stars);
$stmt->bindValue(':check_in', $check_in);
$stmt->bindValue(':check_out', $check_out);
$stmt->bindValue(':location_id', $location);
$stmt->bindValue(':style_id', $style);
$stmt->execute();

?>

<h1>Save Page</h1>
