<template>
    <Header />
    <div>
      <form style="margin-left: 450px;" @submit.prevent="saveCourse">    
        <input placeholder="Название направления" type="text" name="name_direction" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
        <button type="submit" class="btn btn-success" style="margin-right:650px;">Сохранить</button>
      </form>
      <router-link to="/Course">
        <button type="submit" class="btn btn-success" style="margin-right:850px;">Вернуться</button>
      </router-link>
    </div>
    <Footer />
  </template>
  
  <script>
  import Footer from "@/components/Footer.vue";
  import Header from "@/components/Header.vue";
  
  export default {
    name: "CourseAdd",
    props: {
      msg: String,
    },
    components: {
      Footer,
      Header,
    },
    data() {
      return {
        name_direction: '',
      };
    },
    
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