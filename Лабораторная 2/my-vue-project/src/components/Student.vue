<template>
  <Header/>
  <div>
    <form style="margin-left: 200px;">
      <table>
        <thead>
          <tr>
            <th style="padding-right: 20px;">ID</th>
            <th style="padding-right: 20px;">Фотография</th>
            <th style="padding-right: 20px;">ФИО студента</th>
            <th style="padding-right: 20px;">Направление подготовки</th>
            <th style="padding-right: 20px;">Название группы</th>
            <th style="padding-right: 20px;">Год рождения</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="student in students" :key="student.id">
            <td style="padding: 20px;">{{ student.id }}</td>
            <td style="padding: 20px;"><img :src="student.img_student" width="120px" height="80px"></td>
            <td style="padding: 20px;">{{ student.name_student }}</td>
            <td style="padding: 20px;">{{ student.course_direction }}</td>
            <td style="padding: 20px;">{{ student.name_group }}</td>
            <td style="padding: 20px;">{{ student.year }}</td>
            <td>
              <a href="#"><button type="button" class="btn btn-primary">Изменить</button></a>
              <a href="#"><button type="button" class="btn btn-danger">Удалить</button></a>
            </td>
          </tr>
        </tbody>
      </table>
      <a href="#" style="margin-left: 400px;"><button type="button" class="btn btn-success">Добавить</button></a>
    </form>
  </div>
  <Footer/>
</template>

<script>
import Footer from '@/components/Footer.vue'
import Header from '@/components/Header.vue'

export default {
  name: 'StudentDetails',
  props: {
    msg: String
  },
  components: {
    Footer,
    Header
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
