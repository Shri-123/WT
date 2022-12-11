<?php

if (isset($_POST['submit'])) {

    $firstname = $_POST["firstname"];
    $email = $_POST["email"];
    $pass = $_POST["password"];
    $pno = $_POST["phone"];
    $marks = $_POST["marks"];


    if (!preg_match('/^[a-z]*$/i', $firstname)) {
        $ErrMsg = "Only alphabets and whitespace are allowed.";
        echo "<script type='text/javascript'>window.alert('$ErrMsg');
            </script>";
    }

    if (!preg_match('^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^', $email)) {
        $ErrMsg = "Enter valid mail.";
        echo "<script type='text/javascript'>window.alert('$ErrMsg');
                </script>";
    }

    if(strlen($pass) < 5)
    {
        $err = "Enter at least 5 chars";
        echo "<script type='text/javascript'>window.alert('$err');
                                    </script>";
    }


    if (empty($pno)) {
        $mobilenoErr = "Mobile no is required";
        echo "<script type='text/javascript'>window.alert('$mobilenoErr');
                                    </script>";
    } else {
        $mobileno = $pno;
        // check if mobile no is well-formed
        if (!preg_match("/^[0-9]*$/", $mobileno)) {
            $mobilenoErr = "Only numeric value is allowed.";
            echo "<script type='text/javascript'>window.alert('$mobilenoErr');
                                                        </script>";
            
        }
        if (strlen($pno) != 10) {
            $mobilenoErr = "Only 10 digit  numeric value is allowed.";
            echo "<script type='text/javascript'>window.alert('$mobilenoErr');
                                                                                </script>";
        }
    }


    include 'formvphp.html';



}
?>