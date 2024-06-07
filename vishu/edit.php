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
$delid=$_GET['Sno'];

$sql="EDIT FROM vishu WHERE
Sno='$EDITid'";
$conn->query($sql);
header("Location:view.php");
$conn->close();
?>

$conn->close();
?>