<?php
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\header.php';
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id = $id";
    $result = mysqli_query($database->getConnect(), $query); // Используем свойство connect
    $row = mysqli_fetch_assoc($result);
}

?>
<!DOCTYPE html>
    <html lang="ru">
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Изменить данные студента</title>
    <script src="index.js"></script>
    </head>
    <body>
    <form action="StudentApdate.php" method="POST" enctype="multipart/form-data" style="margin-left: 450px;">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>"style="width:700px;margin-bottom:25px;">
    <input type="file" name="img_student" accept="image/*"style="width:700px;margin-bottom:25px;">
    <input type="hidden" name="current_img_group" value="путь_к_текущему_изображению">
    <input type="text" name="name_student" value="<?php echo htmlspecialchars($row['name_student']); ?>"class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <input type="text" name="course_direction" value="<?php echo htmlspecialchars($row['course_direction']); ?>"class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <input type="text" name="name_group" value="<?php echo htmlspecialchars($row['name_group']); ?>"class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <input type="text" name="year" value="<?php echo htmlspecialchars($row['year']); ?>"class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
    <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
    </body>
</html>
<?php
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\footer.php';
?>