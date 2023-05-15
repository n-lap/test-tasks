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
    require("tasks/Task10.php");
    $mycalc = new MyCalculator(12, 6);
    echo $mycalc->add(); // Displays 18
    echo $mycalc->multiply(); // Displays 72
    //Calculation by chain
    echo $mycalc->add()->divideBy(9); // Displays 2 ( (12+6)/9=2 )
    ?>
</body>

</html>