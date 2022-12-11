<?php

    include 'connect.php';
    include 'display.php';

    if(isset($_GET['deleteid']))
    {
        $id = $_GET['deleteid'];

        $sql = "delete from user where id = $id";
        $stmt = $db->prepare($sql);
        $stmt->execute();

        if($stmt)
        {
            header('localhost:display.php');
        }

        if($stmt)
                {
                    function function_alert($message)
                    {
                        echo "<script>alert('$message');</script>";
                    }
                    function_alert("Record Deleted Successfully !!!!");
                }
    }

?>