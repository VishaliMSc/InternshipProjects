<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$server="localhost";
$user="root";
$pass="";
$db="vishali";

    // Create connection
    $conn =mysqli_connect($server,$user,$pass,$db);

    // Check connection
    if (mysqli_connect_errno()) {
        echo"Databas connection failed!!!";
    }
    else
    {
    $name = $_POST['name'];
    $fathername = $_POST['fname'];
    $address = $_POST['address'];
    $phoneno = $_POST['phoneno'];
    $email = $_POST['email'];
    
    echo $sql ="INSERT INTO vishu (Name,Father_Name,Address,Phone_No,Email)VALUES ('$name','$fathername','$address','$phoneno','$email')";
    exit;
    
    $qry=mysqli_query($conn,$sql);
    if($qry)
    {
    echo "New record created successfully";
    }
    else
    {
     echo"Something wrong";
    }
  }
}
mysqli_close($conn);
?>
