<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Form</title>
<script src="index.js"></script>
<form action="StudentAddDataBase.php" method="POST" enctype="multipart/form-data">
    <input type="file" name="img_student" accept="image/*"> <!-- Поле для загрузки изображения -->
    <input type="text" name="name_student" placeholder="Name student">
    <input type="text" name="course_direction" placeholder="Course direction">
    <input type="text" name="name_group" placeholder="Name group">
    <input type="text" name="year" placeholder="Year">
    <input type="submit" value="Добавить">
</form>