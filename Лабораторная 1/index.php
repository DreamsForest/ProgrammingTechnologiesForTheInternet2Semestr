<!DOCTYPE html>
<?php 
  require_once 'header.php';
  require_once 'footer.php';
  require_once 'logic.php';
?>
<html lang="ru">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Образование в Швейцарии | Среднее и высшее образование |Условия поступления и обучения | Спецпроект Forbes Education</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="index.css" rel="stylesheet">
    

    <!-- Bootstrap core CSS -->
    <link href="./Top navbar example · Bootstrap v5.1_files/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <!-- Custom styles for this template -->
    <link href="./Top navbar example · Bootstrap v5.1_files/navbar-top.css" rel="stylesheet">
  </head>
  <body>

  <form action="index.php" method="GET" style="margin-left: 200px;">   
            <a href="StudentAdd.php" style="margin-left: 600px;">Добавить</a>
            <table>   
            <tr>
            
            <th style="padding-right: 20px;">ID</th>
            <th style="padding-right: 20px;">Фотография</th>
            <th style="padding-right: 20px;">ФИО студента</th>
            <th style="padding-right: 20px;">Направление подготовки</th>
            <th style="padding-right: 20px;">Название группы</th>
            <th style="padding-right: 20px;">Год рождения</th>
            
            </tr>
            <tr>
            <?php foreach ($data as $row): ?>
            <tr>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row['id']) ?></td>
            <td style="padding: 20px;"><img src="<?php echo htmlspecialchars($row['img_student']) ?>" width="120px" height="80px"></td>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row['name_student']) ?></td>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row['course_direction']) ?></td>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row['name_group']) ?></td>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row['year']) ?></td>
            <td>
                <a href="StudentEdit.php?id=<?php echo $row['id']; ?>">Изменить</a>
            </td>
            <td style="padding-left: 50px;">
                <a href="StudentDelete.php?id=<?php echo $row['id']; ?>">Удалить</a>
            </td>
        </tr>
            <?php endforeach; ?>
    
        </table>
 
</form>

<script src="./Top navbar example · Bootstrap v5.1_files/bootstrap.bundle.min.js.загрузка" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

      
  

</body></html>