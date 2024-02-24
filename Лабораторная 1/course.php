<!DOCTYPE html>
<?php 
  require_once 'header.php';
  require_once 'logic.php';
?>
<html lang="ru">
  <body>
  <form action="index.php" method="GET" style="margin-left: 200px;">   
            <table>   
            <tr>
            
            <th style="padding-right: 20px;">ID</th>
            <th style="padding-right: 20px;">Направление подготовки</th>
                
            </tr>
            <tr>
            <?php foreach ($data_course as $row_course): ?>
            <tr>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row_course['id_direction']) ?></td>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row_course['name_direction']) ?></td>
            <td>
                <a href="CourseEdit.php?id=<?php echo $row_course['id_direction']; ?>">Изменить</a>
            </td>
            <td style="padding-left: 50px;">
                <a href="StudentDelete.php?id=<?php echo $row_course['id_direction']; ?>">Удалить</a>
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