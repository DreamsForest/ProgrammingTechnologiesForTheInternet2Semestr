<!DOCTYPE html>
<?php 
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\header.php';
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\logic\logic.php';
?>
<html lang="ru">
  <body>

  <form action="index.php" method="GET" style="margin-left: 200px;">   
           
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
            <a href="StudentEdit.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-primary">Изменить</button></a>
            </td>
            <td style="padding-left: 50px;">
                <a href="StudentDelete.php?id=<?php echo $row['id']; ?>"><button type="button" class="btn btn-danger">Удалить</button></a>
            </td>
        </tr>
            <?php endforeach; ?>
        
        </table>
        <a href="StudentAdd.php" style="margin-left: 600px;"><button type="button" class="btn btn-success">Добавить</button></a>
</form>
<?php
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\footer.php';
?>
<script src="./Top navbar example · Bootstrap v5.1_files/bootstrap.bundle.min.js.загрузка" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//volgu.ivsupport.ru/script.php?<?=time()?>"></script>
      
  

</body></html>