<?php
include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud operations</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="home.php" class="text-light">
                Add user</a>
        </button>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Serial No.</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>


                <?php

                $sql = "select * from user";
                $stmt = $db->prepare($sql);
                $stmt->execute();
                $row = $stmt->fetchAll();
                //print_r ($row);
                //echo $row[0]['Name'];

                // if($stmt)
                // {
                //     function function_alert($message)
                //     {
                //         echo "<script>alert('$message');</script>";
                //     }
                //     function_alert("Record Shown Successfully !!!!");
                // }
                
                $count = $stmt->rowCount();
                //printf("Total rows in this table : %d\n", $count);

                $x = 0;
                while ($x < $count) {
                    $id = $row[$x]['ID'];
                    $n = $row[$x]['Name'];
                    $e = $row[$x]['Email'];
                    $m = $row[$x]['Mobile'];
                    $p = $row[$x]['Password'];

                    echo '<tr>
                    <th scope="row">' . $id . '</th>
                    <td>' . $n . '</td>
                    <td>' . $e . '</td>
                    <td>' . $m . '</td>
                    <td>' . $p . '</td>

                <td>
                    <button class = "btn btn-primary"><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                    <button class = "btn btn-danger"><a href="delete.php?deleteid='.$id.'" class = "text-light">Delete</a></button>
                </td>

                </tr> ';

                    $x++;

                }

                ?>

            </tbody>
        </table>
    </div>

</body>

</html>