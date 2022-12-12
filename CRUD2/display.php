<?php
$conn= new mysqli('localhost','root',"",'tempdb')or die("Could not connect to mysql".mysqli_error($con));

$sql = "SELECT id, FirstName, LastName, Collegename FROM loan1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  echo "<table><tr><th>ID</th><th>Name</th><th>College</th></tr>";
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "<tr><td>".$row["id"]."</td><td>".$row["FirstName"]." ".$row["LastName"]."</td><td> ".$row["Collegename"]."</td></tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}
$conn->close();
?>