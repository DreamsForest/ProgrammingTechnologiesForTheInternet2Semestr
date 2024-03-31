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
    methods: {
      saveCourse() {
        const newDirection = {
          name_direction: this.name_direction,
        };
  
        fetch('rest/direction.json', {
          method: 'POST',
          headers: {
            'Content-Type': 'application/json',
          },
          body: JSON.stringify(newDirection),
        })
          .then(response => {
            if (!response.ok) {
              throw new Error('Network response was not ok');
            }
            return response.json();
          })
          .then(data => {
            console.log('Данные сохранены:', data);
            this.$router.push("/Course");
          })
          .catch(error => {
            console.error('Произошла ошибка при сохранении данных:', error);
          });
      },
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