<?php
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\header.php';
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';

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
    <script src="C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\js\course.js"></script>
    </head>
    <body>
    <form action="CourseApdate.php" method="POST" enctype="multipart/form-data" style="margin-left: 450px;">
    <input type="hidden" name="id_direction" value="<?php echo htmlspecialchars($row_course['id_direction']); ?>"> 
    <input type="text" name="name_direction" value="<?php echo htmlspecialchars($row_course['name_direction']); ?>" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;margin-top:50px;">
    <button type="submit" class="btn btn-success">Сохранить</button>
    </form>
    </body>
</html>
<?php
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\footer.php';
?>