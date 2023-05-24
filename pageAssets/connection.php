<?php

// Local 
$servername = "localhost";
$username = "testuser";
$password = "SFHassign3#";
$databasename = "halcanoetrips";

// Remote
// $servername = "localhost";
// $username = "id20611221_courtneyhawkins";
// $password = "Skillsforhire2023!";
// $databasename = "id20611221_halcanoe2023";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
?>
