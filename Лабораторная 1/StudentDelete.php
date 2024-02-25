<?php
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

if (isset($_GET['id'])) { // Проверяем, был ли передан идентификатор записи для удаления через GET запрос
    $id = filter_var($_GET['id'], FILTER_VALIDATE_INT);
    $database->deleteGroup($id);
    header("Location: index.php"); 
    exit();
}
?>