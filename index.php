<?php
    // Create some data to use
    $list_of_teammates = ["Dieume", "Joy"];
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>eManamba</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="srcs/main.css" />
    <script src="srcs/main.js"></script>
</head>
<body>

    <div id="helloteamdiv" >
        <p id="maintitle" >
            Hello Teammates! <br><br>
            <?php
                echo $list_of_teammates[0] . " & " . $list_of_teammates[1] . "<br><br>";
            ?>
            Looking forward to working with you!
        </p>
        <p id="subtitle" >
        </p>
    </div>
    
</body>
</html>