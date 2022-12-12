<?php
$conn= new mysqli('localhost','root',"",'tempdb')or die("Could not connect to mysql".mysqli_error($con));


if(isset($_POST['submit'])){
    $id=$_POST['id'];
    $college=$_POST['college'];

    $sql = "UPDATE loan1 SET collegename = '$college' where id = $id ;";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Records edited successfully.";
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
    <title>Edit Record Form</title>
</head>

<body>
    <form method="post">
        <p>
            <label for="ID">ID:</label>
            <input type="text" name="id" id="id">
        </p>
        <button type="submit" name="submit1">Edit</button>
        
        <p>
            <label for="College Name">College Name:</label>
            <input type="text" name="college" id="college">
        </p>
       <button type="submit" name="submit">Submit</button>
    </form>


    
</body>

</html>