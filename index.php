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
    require("tasks/Task1.php");
    echo Task1::isGreaterWithIfConditions(1) . '<br>';
    echo Task1::isGreaterWithIfConditions(10) . '<br>';
    echo Task1::isGreaterWithIfConditions(11) . '<br>';
    echo Task1::isGreaterWithIfConditions(21) . '<br>';
    echo Task1::isGreaterWithIfConditions(31) . '<br>';
    echo '<br>';

    echo Task1::isGreaterWithSwitch(1) . '<br>';
    echo Task1::isGreaterWithSwitch(10) . '<br>';
    echo Task1::isGreaterWithSwitch(11) . '<br>';
    echo Task1::isGreaterWithSwitch(21) . '<br>';
    echo Task1::isGreaterWithSwitch(31) . '<br>';
    echo '<br>';

    echo Task1::isGreaterWithTernary(1) . '<br>';
    echo Task1::isGreaterWithTernary(10) . '<br>';
    echo Task1::isGreaterWithTernary(11) . '<br>';
    echo Task1::isGreaterWithTernary(21) . '<br>';
    echo Task1::isGreaterWithTernary(31) . '<br>';
    
    
    ?>
</body>

</html>
