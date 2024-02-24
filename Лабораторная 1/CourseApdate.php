<?php
require_once 'logic.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_direction = $_POST['id_direction'];
    $name_direction = $_POST['name_direction'];

    $database->updateCourse($id_direction, $name_direction);
    // Здесь updateDirection - это новая функция, которую нужно добавить в logic.php
    // Она будет обновлять запись с указанным id_direction новыми данными
    header('Location: course.php');
    exit();
}
?>