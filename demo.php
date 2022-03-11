<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo PHP</title>
</head>
<body>
    <?php

        echo $_POST["age"];
        $alder = $_POST["age"];

        if($alder < 18) {
            echo "<h1>Du er for liten til å kjøre bil.</h1>";

        } else {
            echo "<h1>Tut tut.</h1>";
        }
        
    ?>
</body>
</html>