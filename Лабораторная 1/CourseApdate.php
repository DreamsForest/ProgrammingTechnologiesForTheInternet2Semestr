<?php
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_direction = intval($_POST['id_direction']);
    $name_direction = mysqli_real_escape_string($database->getConnect(), $_POST['name_direction']);

    $database->updateCourse($id_direction, $name_direction);
    header('Location: course.php');
    exit();
}
?>