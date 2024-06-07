<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vishali";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record

$delid=$_GET['Sno'];

$sql="DELETE FROM vishu WHERE
Sno='$delid'";
$conn->query($sql);
header("Location:view.php");
$conn->close();
?>