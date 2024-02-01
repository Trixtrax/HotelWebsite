<?php
try{
    $conn = new PDO('mysql:host=localhost;dbname=Work', 'root', '');
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
}
catch (PDOException $exception)
{
	echo "There was a problem" . $exception->getMessage();
}
?>