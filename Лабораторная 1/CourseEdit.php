<?php
require_once 'logic.php';


if (isset($_GET['id_direction'])) {
    $id = $_GET['id_direction'];
    $query = "SELECT * FROM direction WHERE id_direction = $id";
    $result = mysqli_query($database->getConnect(), $query); // Используем свойство connect
    $row_course = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
    <html lang="ru">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <script src="course.js"></script>
    </head>
    <body>
    <form action="CourseApdate.php" method="POST" enctype="multipart/form-data">
    <input type="hidden" name="id_direction" value="<?php echo $row_course['id_direction']; ?>"> 
    <input type="text" name="name_direction" value="<?php echo $row_course['name_direction']; ?>">
    <input type="submit" value="Сохранить">
    </form>
    </body>
</html>