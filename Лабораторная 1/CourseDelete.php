<?php
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $id_direction = $_GET['id_direction'];

    $studentsExist = $database->checkStudentsInDirection($id_direction); // Проверка наличия студентов по данному направлению

    if ($studentsExist) {
        echo "Направление содержит студентов. Удаление невозможно.";
    } else {
        $database->deleteDirection($id_direction); // Вызов метода удаления записи из logic.php
    }
}
?>