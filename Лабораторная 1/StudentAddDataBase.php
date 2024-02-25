<?php
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

//Добавить
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Проверяем, был ли выбран файл для загрузки
    if(isset($_FILES['img_student']) && $_FILES['img_student']['error'] === UPLOAD_ERR_OK) {
        $name_student = mysqli_real_escape_string($database->getConnect(), $_POST['name_student']);
        $course_direction = filter_var($_POST['course_direction'], FILTER_VALIDATE_INT);
        $name_group = mysqli_real_escape_string($database->getConnect(), $_POST['name_group']);
        $year = filter_var($_POST['year'], FILTER_VALIDATE_INT);

        $uploadDir = 'img/'; // Папка для сохранения загруженных файлов
        $uploadFile = $uploadDir . basename($_FILES['img_student']['name']); // Полный путь к файлу

        // Перемещаем загруженный файл в указанную папку
        if (move_uploaded_file($_FILES['img_student']['tmp_name'], $uploadFile)) {
            // В случае удачной загрузки, сохраняем путь к файлу в базе данных
            $img_student = $uploadFile;
            $database->addGroup($img_student, $name_student, $course_direction, $name_group, $year);
        } else {
            // В случае неудачной загрузки, можно вывести ошибку или предпринять другие действия
            echo "Error uploading file";
        }
    }
    header('Location: index.php');
}
?>