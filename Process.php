<?php
session_start();
include "message.php";
?>

<!DOCTYPE html>
<html lang = "en">
<head>
<title>Login Process</title>
<meta http-equiv="content-type" content="text/html;charset=utf-8">
<link rel="stylesheet" href="style.css">
</head>

<body>

  <?php
  if(isset($_POST['login']))
  {
  	$email = $_POST['email'];
    $password = $_POST['password'];
    $stmt = $conn->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindValue(':email', $email);
    $stmt->execute();
    if($row = $stmt->fetch()){
      if (password_verify($password, $row["password"])) {
          $_SESSION["user"] = $email;
          echo "<p>Correct details, you can now go to <a href='home.php'>Home</a></p>";
      }else{
        echo "<p>That's the wrong username/password</p>";
      }
    }else{
      echo "<p>That's the wrong username/password</p>";
    }
  }else{
     echo "<p>You shouldn't have got to this page.</p>";
  }
  ?>

</body>
</html>

