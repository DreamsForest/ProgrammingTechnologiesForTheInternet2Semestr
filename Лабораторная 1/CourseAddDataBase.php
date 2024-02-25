<?php
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_direction = mysqli_real_escape_string($database->getConnect(), $_POST['name_direction']);

    $database->addCourse($name_direction); // Вызов метода добавления новой записи из logic.php
    header('Location: course.php');
    exit();
}

?>