<html>
<style>
    body {
        background-color: lightgreen;
    }

    .mid {
        position: absolute;
        text-align: center;
        justify-content: center;
        align-items: center;
        top: 50%;
        left: 50%;
        border: 1px solid black;
        margin: -143px 0 0 -242px;
        padding: 40px;
        padding-top: 10px;
        border-radius: 10px;
        background-color: #fff;
        overflow-x: auto;
        overflow-y: auto;
    }

    p,
    input {
        font-size: large;
        display: inline-block;
    }
</style>

<body>
    <div class="mid">
        <h2>FILE OPERATIONS IN PHP.</h2>
        <form method="post" action="" overflow>
            <p>
                Enter the text to be appended : <input type="text" name="text">
                <br>
                <br>
                <input type="submit" value="Display File Content">
            </p>

        </form>

        <?php
        if (isset($_POST["text"])) {
            $text = $_POST["text"];
            $file = fopen("webtech.txt", 'a');
            fwrite($file, $text);
            fclose($file);

            $myfile = fopen("webtech.txt", "r") or die("Unable to open file!");
            echo fread($myfile, filesize("webtech.txt"));
            fclose($myfile);
            echo "<br>";
        }
        ?>

    </div>
</body>

</html>