<?php
require_once 'logic.php';


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($database->getConnect(), $query); // Используем свойство connect
    $row = mysqli_fetch_assoc($result);
}

?>
<
<!DOCTYPE html>
    <html lang="ru">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="index.js"></script>
    </head>
    <body>
    <form action="StudentApdate.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="file" name="img_student" accept="image/*">
    <input type="hidden" name="current_img_group" value="путь_к_текущему_изображению">
    <input type="text" name="name_student" value="<?php echo $row['name_student']; ?>">
    <input type="text" name="course_direction" value="<?php echo $row['course_direction']; ?>">
    <input type="text" name="name_group" value="<?php echo $row['name_group']; ?>">
    <input type="text" name="year" value="<?php echo $row['year']; ?>">
    <input type="submit" value="Сохранить">
    </form>
    </body>
</html>