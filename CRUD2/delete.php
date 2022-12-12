<?php
$conn= new mysqli('localhost','root',"",'tempdb')or die("Could not connect to mysql".mysqli_error($con));

if(isset($_POST['submit'])){
    $id=$_POST['id'];

    $sql = "DELETE FROM loan1 WHERE id= $id;";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo "Records deleted successfully.";
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
    <title>Delete Record Form</title>
</head>

<body>
    <form method="post">
        <p>
            <label for="ID to delete record">ID:</label>
            <input type="text" name="id" id="id">
        
       <button type="submit" name="submit">Delete</button>
       <button type="submit" name="submit"><a href="inputdb.php">Add User</a></button>
    </form>


   
</body>

</html>