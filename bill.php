<html>

<style>
    body {
        background-color: lightgreen;
    }

    .box {
        position: absolute;
        top: 50%;
        left: 50%;
        margin: -159px 0 0 -197px;
        border: 2px solid black;
        border-radius: 20px;
        padding: 50px;
        background-color: white;
    }
</style>


<body>
    <div class="box">
        <h1 style="text-align: center;">PHP - Bill Calculator</h1><br>
        <div class="middle" style="text-align: center;">
            <form method="post" action="">
                Enter no. of units: <input type="text" name="units">
                <br>
                <br><br>
                <input type="submit" value="Generate bill">
            </form>
        </div>


        <div class="output" style="text-align:center;">
            <a>
                <?php
                if (isset($_POST["units"])) {


                    $units = $_POST["units"];

                    echo "<br>";
                    if ($units > 0 && $units <= 50) {
                        $total = $units * 3.50;
                        echo "Total electricity bill for " . $units . " units is " . $total . " Rs";


                    }
                    if ($units > 50) {
                        if ($units <= 150) {
                            $total = 50 * 3.50 + ($units - 50) * 4;
                            echo "Total electricity bill for " . $units . " units is " . $total;
                        }
                    }
                    if ($units > 150) {
                        if ($units <= 250) {
                            $total = 50 * 3.50 + 100 * 4 + ($units - 150) * 5.20;
                            echo "Total electricity bill for " . $units . " units is " . $total;
                        } else {
                            $total = 50 * 3.50 + 100 * 4 + 100 * 5.20 + ($units - 250) * 6.50;
                            echo "Total electricity bill for " . $units . " units = " . $total;
                        }
                    }
                }


                ?>
            </a>
        </div>
    </div>

</body>

</html>