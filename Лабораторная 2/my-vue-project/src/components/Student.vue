<template>
  <div>
    <form style="margin-left: 200px;">
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>Фотография</th>
            <th>ФИО студента</th>
            <th>Направление подготовки</th>
            <th>Название группы</th>
            <th>Год рождения</th>
            <th>Действия</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="student in students" :key="student.id">
            <td>{{ student.id }}</td>
            <td><img :src="student.img_student" width="120px" height="80px"></td>
            <td>{{ student.name_student }}</td>
            <td>{{ student.course_direction }}</td>
            <td>{{ student.name_group }}</td>
            <td>{{ student.year }}</td>
            <td>
              <a href="#"><button type="button" class="btn btn-primary">Изменить</button></a>
              <a href="#"><button type="button" class="btn btn-danger">Удалить</button></a>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="#" style="margin-left: 600px;"><button type="button" class="btn btn-success">Добавить</button></a>
    </form>
  </div>
</template>

<script>
export default {
  name: 'StudentDetails',
  props: {
    msg: String
  },
  data() {
    return {
      students: []
    };
  },
  mounted() {
    fetch('rest/students.json') 
      .then(response => response.json())
      .then(data => {
        this.students = data[2].data; 
      })
      .catch(error => {
        console.error('Error fetching JSON: ', error);
      });
  }
  
};
</script>
<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
