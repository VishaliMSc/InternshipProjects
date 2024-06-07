<?php
$server="localhost";
$user="root";
$pass="";
$db="vishali";
$conn =mysqli_connect($server,$user,$pass,$db);
if (mysqli_connect_errno()) {
      echo"Database connection failed!!!";
    }


$sql="SELECT Name,Father_Name,Address,MobileNo,Email FROM contact";
$result=mysqli_query($conn,$sql);
if (mysqli_num_rows($result) > 0) 
{
echo "<table><tr>
          <th>Name</th>
          <th>Father Name</th>
          <th>Address</th>
          <th>Mobile No</th>
          <th>Email</th></tr>";
    while($row =mysqli_fetch_array($result)) 
    {
        echo "<tr><td>".$row["Name"]."</td>
                  <td>".$row["Father_Name"]."</td>
                  <td>".$row["Address"]."</td>
                  <td>".$row["MobileNo"]."</td>
                  <td>".$row["Email"]."</td></tr>";
    }
    echo "</table>";
} 
else {
    echo "0 results";
}
mysqli_close($conn);
?>