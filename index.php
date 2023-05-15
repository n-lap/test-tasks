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
    require("tasks/Task11.php");
    $field = [
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 0, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 0, 1, 0, 1, 1, 1, 1, 1, 1],
        [1, 0, 1, 1, 1, 1, 1, 1, 1, 1],
        [1, 1, 1, 0, 1, 1, 1, 1, 1, 1],
    ];
    $start = [2, 2];
    $end = [9, 1];
    $shortestPath = new ShortestPathBetweenCellsBFS();
    $path = $shortestPath->shortestPath($field, $start, $end);
    ShortestPathBetweenCellsBFS::writeAttemptToFile("fieldAndAttempt.txt", $field, $path, $start, $end);
    echo ShortestPathBetweenCellsBFS::readAttemptFromFile("fieldAndAttempt.txt");
    ?>
</body>

</html>