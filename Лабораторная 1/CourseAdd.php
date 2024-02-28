<?php
    require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\header.php';
    require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';
?>
<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Направление подготовки</title>
<script src="course.js"></script>
<form action="CourseAddDataBase.php" method="POST" enctype="multipart/form-data" style="margin-left: 450px;"> 
    <input type="text" name="name_direction" placeholder="Name direction" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;margin-top:50px;">
    <button type="submit" class="btn btn-success">Добавить</button>
</form>
<?php
    require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\footer.php';
?>