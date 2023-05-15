<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    require("tasks/Task2.php");
    echo Task2::birthdayCountdown("10-05-2020");
    echo Task2::birthdayCountdown("11-05-2020");
    echo Task2::birthdayCountdown("12-05-2023");
    ?>
</body>

</html>