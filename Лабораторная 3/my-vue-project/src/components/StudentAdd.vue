<template>
  <Header />
  <div>
    <form style="margin-left: 450px;" @submit.prevent="saveStudent">
      <input v-model="name_student" placeholder="ФИО студента" type="text" name="name_student" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
      <input v-model="course_direction" placeholder="Направление подготовки" type="text" name="course_direction" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
      <input v-model="name_group" placeholder="Имя группы" type="text" name="name_group" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
      <input v-model="year" placeholder="Год рождения" type="text" name="year" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
      <button type="submit" class="btn btn-success" style="margin-right:650px;">Сохранить</button>
    </form>
    <router-link to="/Student">
      <button type="submit" class="btn btn-success" style="margin-right:850px;">Вернуться</button>
    </router-link>
  </div>
  <Footer />
</template>

<script>
import Footer from "@/components/Footer.vue";
import Header from "@/components/Header.vue";

export default {
  name: "StudentAdd",
  props: {
    msg: String,
  },
  components: {
    Footer,
    Header,
  },
  data() {
    return {
      name_student: '',
      course_direction: '',
      name_group: '',
      year: '',
    };
  },
  methods: {
    saveStudent() {
      fetch("http://localhost/student/add", {
        method: "POST",
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          name: this.name_student,
          course_direction: this.course_direction,
          name_group: this.name_group,
          year: this.year
        })
      })
      .then(() => {
        // Обработка успешного добавления
      })
      .catch((error) => {
        console.error("Ошибка при добавлении студента: ", error);
      });
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