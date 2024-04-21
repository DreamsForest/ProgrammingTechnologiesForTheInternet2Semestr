<template>
  <Header />
  <div>
    <form style="margin-left: 200px;">
      <table>
        <thead>
          <tr>
            <th style="padding-right: 20px;">ID</th>
            <!--<th style="padding-right: 20px;">Фотография</th>-->
            <th style="padding-right: 20px;">ФИО студента</th>
            <th style="padding-right: 20px;">Направление подготовки</th>
            <th style="padding-right: 20px;">Название группы</th>
            <th style="padding-right: 20px;">Год рождения</th>
            <th style="padding-right: 20px;">Действия</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="student in students" :key="student.id">
            <td style="padding: 20px;">{{ student.id }}</td>
            <td style="padding: 20px;">{{ student.name_student }}</td>
            <td style="padding: 20px;">{{ student.course_direction }}</td>
            <td style="padding: 20px;">{{ student.name_group }}</td>
            <td style="padding: 20px;">{{ student.year }}</td>
            <td>
              <button type="button" @click="deleteStudent(student.id)" class="btn btn-danger">Удалить</button>
              <router-link :to="'/StudentEdit/' + student.id">
                <button type="button" class="btn btn-primary">
                  Изменить
                </button>
              </router-link>
            </td>
          </tr>
        </tbody>
      </table>
      <router-link to="/StudentAdd">
        <button type="button" class="btn btn-success" style="margin-left: 400px;">Добавить</button>
      </router-link>
    </form>
  </div>
  <Footer />
</template>

<script>
import Footer from "@/components/Footer.vue";
import Header from "@/components/Header.vue";

export default {
  name: "StudentDetails",
  props: {
    msg: String,
  },
  components: {
    Footer,
    Header,
  },
  data() {
    return {
      students: [],
    };
  },
  mounted() {
    this.getData();
  },
  methods: {
    async getData() {
      try {
        const response = await fetch('http://localhost:80/');
        const data = await response.json();
        if (data.message) {
          console.log('Message from API:', data.message);
          // Делайте что-то с сообщением, например, сохраняйте его в переменную для отображения в шаблоне
          this.message = data.message;
        }
      } catch (error) {
        console.error('Error:', error);
      }
    }
  }
  
};
</script>

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
