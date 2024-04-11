<template>
    <Header />
    <div>
        <form @submit.prevent="saveCourse" style="margin-left: 450px;">
            <input placeholder="Название направления" type="text" name="name_direction" class="form-control rounded-pill" style="width:700px;margin-bottom:25px;">
            <button type="submit" class="btn btn-success" style="margin-right:650px;">Сохранить</button>
        </form>
        <router-link to="/Course"><button type="submit" class="btn btn-success" style="margin-right:850px;">Вернуться</button></router-link>
    </div>
    <Footer />
</template>
  
<script>
  import Footer from "@/components/Footer.vue";
  import Header from "@/components/Header.vue";

  export default {
    name: "CourseEdit",
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
        async saveCourse() {
            try {
                await fetch('rest/direction.json', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    name_direction: this.name_direction,
                }),
                });

                // Ничего не делаем с ответом
            } catch (error) {
                // Обрабатываем ошибку
                console.error('Произошла ошибка при сохранении данных:', error);
            }
        },
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
  