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
    require("tasks/Task9.php");
    $student1 = new Aspirant("Aleksandr","Petrov", 1, 5);
    $student2 = new Aspirant("John","Dogget", 1, 5.3);
    $student3 = new Student("Aleks","Craicheg", 1, 5);
    $student4 = new Student("Santa","Claus", 1, 5.4);
    $groupOfStudents = [$student1, $student2, $student3, $student4];
    foreach ($groupOfStudents as $student)
    {
        echo "Name: " .$student->getFirstName() .", scholarship: ". $student->getScholarship() . "USD;<br>";
    }
    ?>
</body>

</html>