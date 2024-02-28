<?php
    require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\header.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Добавление студента в БД</title>
<script src="index.js"></script>
</head>
<body>
<form action="StudentAddDataBase.php" method="POST" enctype="multipart/form-data" style="margin-left: 450px;">
    <input type="file" name="img_student" accept="image/*" style="width:700px;margin-bottom:25px;"> <!-- Поле для загрузки изображения -->
    <input type="text" name="name_student" placeholder="Name student" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <input type="text" name="course_direction" placeholder="Course direction" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <input type="text" name="name_group" placeholder="Name group" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <input type="text" name="year" placeholder="Year" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <button type="submit" class="btn btn-success">Добавить</button>
</form>
</body>
</html>
<?php
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\footer.php';
?>
