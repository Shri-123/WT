<?php

include 'connect.php';

$id = $_GET['updateid'];

$q = "select * from user where id = $id";
$stmt = $db->prepare($q);
$stmt->execute();
$row = $stmt->fetchAll();

$x=0;
$n = $row[$x]['Name'];
$e = $row[$x]['Email'];
$m = $row[$x]['Mobile'];
$p = $row[$x]['Password'];
                


if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];




    $sql = "update user set id = $id, name = '$name', email = '$email', mobile = '$mobile', password = '$password' where id=$id";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $email, $mobile, $password]);


    if ($stmt) {
        function function_alert($message)
        {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Record Updated Successfully !!!!");
        echo 'Record updated successfully';
        header('location:display.php');
    }

}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD OPERATIONS</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>

    <div class="container">
        <br>
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your name" name="name" value = <?php echo $n;?> >
                <div>
                    <br>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email" value = <?php echo $e;?>>
                        <div>
                            <br>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" placeholder="Enter your mobile number"
                                    name="mobile" value = <?php echo $m;?>>
                                <div>
                                    <br>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Enter your password"
                                            name="password" value = <?php echo $p;?> >
                                        <br>
                                        <div>
                                            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>