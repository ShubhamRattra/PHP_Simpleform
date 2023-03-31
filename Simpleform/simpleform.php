<?php

if (!empty($_POST)) {

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rat_simpleform";

$conn = mysqli_connect($servername, $username, $password, $dbname); //database connection

if ($conn->connect_error) 
{
  die("Connection failed: " . $conn->connect_error);
}

//collecting data
$Name = $_POST['Name'];
$Number = $_POST['Number'];

$sql = "INSERT INTO user (Name,Number) VALUES ('{$Name}',$Number)";

//$sql = "INSERT INTO user (Name,Number) VALUES ('Nasdf','1234')";

if ($conn->query($sql) === TRUE) 
{
  echo "Record created successfully";
} 
else 
{
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>



<!DOCTYPE HTML>
<html lang="en">

 <head>
 	<meta charset="UTF-8">
 	<title>Form</title>
 </head>

<body>

<form action="simpleform.php" method="post">
	Name: <input type="text" name="Name"><br>
	Number: <input type="number" name="Number"><br>
	<input type="submit">
</form>

</body>

</html>