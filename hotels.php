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


<!DOCTYPE HTML>
<html>
<head>
<title>List the hotels</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<link rel="stylesheet" href="style.css">
</head>
<body>
<?php

//check to see if there are any results
if($hotels){
	//loop over the array of films and display their title
	foreach ($hotels as $hotel) {
        echo "<php>";
        echo "<a href='details.php?id={$hotel['id']}'>";
	    echo "{$hotel['name']}";
        echo "</a>";
        echo "</p>";
        
	}
}else{
	echo "<p>No records found.</p>";
}
    

    
//Q1 On line 3 change the connection settings to match the database name, username and password you created last week in the MySQL practical.
//   Test the page, you should see a list of films that come from the database.
	
//Q2 Modify the above code so that that the year of release is displayed next to each film e.g. Winter's Bone (2010)

//Q3 Modify the above code so that it only shows films that were made in 2004 (change line 11, the SQL statement )

//Q4 Modify the above code so that it only shows films that have a title that contains the word 'the'

//Q5 Modify the above code so that it displays the number of films in the database i.e. 'There are 16 films in the database'. 
//   You will need to change the SQL and use fetch() instead of fetchAll(). 
//   See https://github.com/CIT2202/pdo-simple-crud/blob/master/pdo-php-databases.md#fetchall-vs-fetch
?>

</body>
</html>