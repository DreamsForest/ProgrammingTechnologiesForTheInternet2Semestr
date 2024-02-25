<?php
require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получаем данные из POST-запроса
    $id = filter_var($_POST['id'], FILTER_VALIDATE_INT);
    $name_student =  mysqli_real_escape_string($database->getConnect(), $_POST['name_student']);
    $course_direction = filter_var($_POST['course_direction'], FILTER_VALIDATE_INT);
    $name_group =  mysqli_real_escape_string($database->getConnect(), $_POST['name_group']);
    $year = filter_var($_POST['year'], FILTER_VALIDATE_INT);

    if (isset($_FILES['img_student']['error']) && $_FILES['img_student']['error'] === UPLOAD_ERR_NO_FILE) {
        // Если файл не был выбран, сохраняем старое изображение
        $img_student = $_POST['current_img_group'];
        $database->updateGroup($id, $img_student, $name_student, $course_direction, $name_group, $year);
    } else {
        // Если файл был выбран, производим загрузку и обновление данных
        $uploadDir = 'img/'; // Папка для сохранения загруженных файлов
        $uploadFile = $uploadDir . basename($_FILES['img_student']['name']); // Полный путь к файлу
        
        // Перемещаем загруженный файл в указанную папку
        if (move_uploaded_file($_FILES['img_student']['tmp_name'], $uploadFile)) {
            // В случае удачной загрузки, сохраняем путь к новому файлу в базе данных
            $img_student = $uploadFile;
            $database->updateGroup($id, $img_student, $name_student, $course_direction, $name_group, $year);
        } else {
            // В случае неудачной загрузки, можно вывести ошибку или предпринять другие действия
            echo "Ошибка при загрузке файла";
        }
    }

    // После обработки данных перенаправляем пользователя на главную страницу
    header('Location: index.php');
    exit();
}
?>