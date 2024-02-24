<?php
require_once 'logic.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name_direction = $_POST['name_direction'];

    $database->addCourse($name_direction); // Вызов метода добавления новой записи из logic.php
    // Здесь addDirection - это новая функция, котор нужно добавить в logic.php
    header('Location: course.php');
    exit();
}
?>