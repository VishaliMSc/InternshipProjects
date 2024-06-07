<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<center><h1>Contact Form</h1>
<?php
$server="localhost";
$user="root";
$pass="";
$db="vishali";
$conn =mysqli_connect($server,$user,$pass,$db);
if (mysqli_connect_errno()) {
      echo"Database connection failed!!!";
    }


$sql="SELECT Sno,Name,Father_Name,Address,Phone_No,Email FROM vishu";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) 
{
echo "<table class='table'><tr class='table-dark'>
          <th>Sno</th>
          <th>Name</th>
          <th>Father Name</th>
          <th>Address</th>
          <th>Phone No</th>
          <th>Email</th>
<th>Delete</th></tr>";
    while($row =mysqli_fetch_array($result)) 
    {
        echo "<tr  class='table-success'><td>".$row["Sno"]."</td>
<td>".$row["Name"]."</td>
                  <td>".$row["Father_Name"]."</td>
                  <td>".$row["Address"]."</td>
                  <td>".$row["Phone_No"]."</td>
                  <td>".$row["Email"]."</td>
                  <td><a href='delete.php?id=".$row["Sno"]."'>Delete</a></td>
                  <td><a href='edit.php?id=".$row["Sno"]."'>Edit</a></td>
<tr>";
                  
    }
    echo "</table>";
} 
else {
    echo "0 results";
}
mysqli_close($conn);
?>