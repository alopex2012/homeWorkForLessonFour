<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework for Lesson 4 </title>
</head>

<body>

    <h5>Заняття 4. ООП</h5>
    <hr />
    <?php
    /// add newbranch for pull request
    include "Employee.php";

    $employee1 = new Employee;
    $employee1->name = "John";
    $employee1->age = 25;
    $employee1->salary = 1000;

    $employee2 = new Employee;
    $employee2->name = "Eric";
    $employee2->age = 26;
    $employee2->salary = 2000;

    echo "Сума зарплат {$employee1->name} та {$employee2->name} дорівнює: " . $employee1->salary . " + " . $employee2->salary . " = " .  ($employee1->salary + $employee2->salary) . " <br />";

    echo "Загальний вік {$employee1->name} та {$employee2->name} дорівнює: " . $employee1->age . " + " . $employee2->age . " = " . ($employee1->age + $employee2->age) . " <br />";
    ?>

</body>

</html>