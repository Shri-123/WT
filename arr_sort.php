<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> FORM | VALIDATION </title>
    <script src="validate.js"></script>
</head>

<style>
    body {
        background-color: lightgreen;
    }

    p {
        font-size: large;
        display: inline-block;



    }

    input {
        font-size: medium;
        text-align: left;
        height: 15px;
        padding: 5px 10px;



    }

    .mid {
        width: 400px;
        clear: both;
        position: absolute;
        text-align: center;
        justify-content: center;
        justify-items: center;
        left: 50%;
        top: 50%;
        border: 2px solid black;
        border-radius: 20px;
        margin: -250px 0 0 -250px;
        padding: 50px 50px;
        padding-top: 60px;
        padding-bottom: 80px;
        background-color: rgb(241, 240, 240);

    }

    button {
        font-size: large;
        height: 40px;
        width: 100px;
        border-radius: 10px;
        background-color: rgb(237, 111, 111);

    }
</style>



<body>

    <h1 style="text-align: center; padding-top: 50px;">ARRAY OPERATIONS USING JAVASCRIPT</h1>
    <div style="overflow-x:auto;">
        <div class="mid">
            <form name="regform"  method="post">
                <p>
                    First Element* : <input type="text" name="first">
                </p>

                <p>
                    Second Element* : <input type="text" name="second">
                </p>

                <p>
                    Third Element* : <input type="text" name="three">
                </p>

                <p>
                    Fourth Element* : <input type="text" name="four">
                </p>

                <p>
                    Fifth Element* : <input type="text" name="five">
                </p>


                <br><br><br>
                <button type="submit" name="submit" onclick="reverseArr()">Reverse</button>
                <br><br>
             
                    <p>
                        <?php
                        if (isset($_POST['submit'])) {

                            $first = $_POST["first"];
                            $second = $_POST['second'];
                            $third = $_POST['three'];
                            $fourth = $_POST['four'];
                            $fifth = $_POST['five'];

                            $numbers = array($first, $second, $third, $fourth, $fifth);


                            for ($j = 0; $j < count($numbers); $j++) {
                                for ($i = 0; $i < count($numbers) - 1; $i++) {

                                    if ($numbers[$i] > $numbers[$i + 1]) {
                                        $temp = $numbers[$i + 1];
                                        $numbers[$i + 1] = $numbers[$i];
                                        $numbers[$i] = $temp;
                                    }
                                }
                            }

                            echo "Sorted Array is: ";
                            echo "<br>";
                            print_r($numbers);

                        }
                        ?>
                    </p>
                
                <!-- <input type="submit" value="Submit" name="submit"> -->


            </form>
            <div id="reverse" style="font-size: large;"></div>
        </div>
    </div>

</body>

</html>