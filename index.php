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
    require("tasks/Task8.php");
    $m1 = new Matrix([[2.0,2.0],[2.0,2.0]]);
    $m2 = new Matrix([[2.0,2.0],[2.0,2.0]]);
    $m1->multiplicationByNumber(2);
    echo $m1;
    echo $m2;
    echo $m1->matrixAddition($m2);
    echo $m1->matrixMultiplication($m2);
    ?>
</body>

</html>