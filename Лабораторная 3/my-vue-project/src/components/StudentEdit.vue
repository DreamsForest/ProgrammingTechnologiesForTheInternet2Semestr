<template>
    <Header />
    <div>
        <form @submit.prevent="saveStudent" style="margin-left: 450px;">
            <input placeholder="ФИО студента" type="text" name="name_student" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
            <input placeholder="Направление подготовки" type="text" name="course_direction" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
            <input placeholder="Имя группы" type="text" name="name_group" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
            <input placeholder="Год рождения" type="text" name="year" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
            <button type="submit" class="btn btn-success" style="margin-right:650px;">Сохранить</button>
        </form>
        <router-link to="/Student"><button type="submit" class="btn btn-success" style="margin-right:850px;">Вернуться</button></router-link>
    </div>
    <Footer />
</template>
  
<script>
  import Footer from "@/components/Footer.vue";
  import Header from "@/components/Header.vue";

  export default {
    name: "StudentEdit",
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
        year: ''
      };
    },
    methods: {
    saveStudent() {
      fetch("http://localhost/student/update", {
        method: "POST",
        headers: {
          'Content-Type': 'application/json'
        },
        body: JSON.stringify(this.editedStudent)
      })
      .then(() => {
        // Обработка успешного обновления
      })
      .catch((error) => {
        console.error("Ошибка при обновлении студента: ", error);
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
  