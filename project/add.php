<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rentals";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$table = $_POST['add'];

$sql = "INSERT INTO $table (fname,lname,id,phoneNo)
VALUES ('$_POST[fname]' ,'$_POST[lname]', '$_POST[id]', '$_POST[phone]')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>