<?php 
$conn= new mysqli('localhost','root',"",'tempdb')or die("Could not connect to mysql".mysqli_error($con));

$sql1 = "CREATE TABLE loan1 (
    id int,
    FirstName VARCHAR(255),
    LastName VARCHAR(255),
    Collegename VARCHAR(255)
    )";
    
    if ($conn->query($sql1) === TRUE) {
      echo "Table 1 created successfully";
    } else {
      echo "Error creating table: " . $conn->error;
    }


?>
