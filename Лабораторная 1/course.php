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
            <th style="padding-right: 20px;">Направление подготовки</th>
                
            </tr>
            <tr>
            <?php foreach ($data_course as $row_course): ?>
            <tr>
            <td style="padding: 20px;"><?php echo htmlspecialchars($row_course['id_direction']) ?></td>
            <td style="padding: 20px;"><a href="StudentList.php?id_direction=<?php echo htmlspecialchars($row_course['id_direction']); ?>"><?php echo htmlspecialchars($row_course['name_direction']) ?></a></td>
            <td>
                <a href="CourseEdit.php?id_direction=<?php echo $row_course['id_direction']; ?>"><button type="button" class="btn btn-primary">Изменить</button></a>
            </td>
            <td style="padding-left: 50px;">
                <a href="CourseDelete.php?id_direction=<?php echo $row_course['id_direction']; ?>"><button type="button" class="btn btn-danger">Удалить</button></a>
            </td>
        </tr>
            <?php endforeach; ?>
        
        </table>
        <a href="CourseAdd.php" style="margin-left: 600px;"><button type="button" class="btn btn-success">Добавить</button></a>
</form>

<script src="./Top navbar example · Bootstrap v5.1_files/bootstrap.bundle.min.js.загрузка" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script src="//volgu.ivsupport.ru/script.php?<?=time()?>"></script>
      
  

</body></html>
<?php
  require_once 'C:\ProgrammingTechnologiesForTheInternet2Semestr\Лабораторная 1\шапка и подвал\footer.php';
?>