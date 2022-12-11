<?php

include 'connect.php';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    



    $sql = "INSERT INTO user (Name, Email, Mobile, Password) VALUES (?,?,?,?)";
    $stmt = $db->prepare($sql);
    $stmt->execute([$name, $email, $mobile, $password]);


    if ($stmt) {
        function function_alert($message)
        {
            echo "<script>alert('$message');</script>";
        }
        function_alert("Record Inserted Successfully !!!!");
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
                <input type="text" class="form-control" placeholder="Enter your name" name="name">
                <div>
                    <br>

                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" placeholder="Enter your email" name="email">
                        <div>
                            <br>
                            <div class="form-group">
                                <label>Mobile</label>
                                <input type="text" class="form-control" placeholder="Enter your mobile number"
                                    name="mobile">
                                <div>
                                    <br>

                                    <div class="form-group">
                                        <label>Password</label>
                                        <input type="password" class="form-control" placeholder="Enter your password"
                                            name="password">
                                        <br>
                                        <div>
                                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>

</body>

</html>