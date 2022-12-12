<?php
$conn= new mysqli('localhost','root',"",'tempdb')or die("Could not connect to mysql".mysqli_error($con));

if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $firstname=$_POST['firstname'];
    $lastname=$_POST['lastname'];
    $college=$_POST['college'];

    $sql = "INSERT INTO loan1 VALUES ($id,'$firstname','$lastname','$college');";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Records inserted successfully.";
    } 
    else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Add Record Form</title>
</head>

<body>
    <form method="post">
        <p>
            <label for="ID">ID:</label>
            <input type="text" name="id" id="id">
        </p>
        <p>
            <label for="First Name">First Name:</label>
            <input type="text" name="firstname" id="firstname">
        </p>
        <p>
            <label for="Last Name">Last Name:</label>
            <input type="text" name="lastname" id="lastname">
        </p>
        <p>
            <label for="College Name">College Name:</label>
            <input type="text" name="college" id="college">
        </p>
       <button type="submit" name="submit">Submit</button>
    </form>


</body>

</html>