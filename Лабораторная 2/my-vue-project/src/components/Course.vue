<template>
    <Header/>
    <form style="margin-left: 200px;">   
        <table>
            <tr>
              <th style="padding-right: 20px;">ID</th>
              <th style="padding-right: 20px;">Направление подготовки</th>
            </tr>
            <tr v-for="direction in direction" :key="direction.id_direction">
              <router-link :to="'/StudentList/' + selectedDirection"><td style="padding: 20px;">{{ direction.id_direction }}</td></router-link>
              <td style="padding: 20px;">{{ direction.name_direction }}</td>
              <td>
                <router-link :to="'/CourseEdit/' + direction.id_direction">
                  <button type="button" class="btn btn-primary">
                    Изменить
                  </button>
                </router-link>
                <button type="button" @click="deleteStudent(direction.id_direction)" class="btn btn-danger">Удалить</button>
              </td>
            </tr>
          </table>
          <router-link to="/CourseAdd"><button type="button" class="btn btn-success" style="margin-left: 400px;">Добавить</button></router-link>
    </form>    
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
      direction: [],
      selectedDirection: null
    }
  },
  mounted() {
    // Загрузка данных из файла JSON
    fetch('rest/direction.json') 
      .then(response => response.json())
      .then(data => {
        this.direction = data[2].data; 
      })
      .catch(error => {
        console.error('Error fetching JSON: ', error);
      });
  },
  methods: {
    async deleteStudent(id_direction) {
      try {
        await fetch("rest/direction.json" , { method: "DELETE" });
        // Ничего не делаем с ответом
      } catch (error) {
        // Ничего не делаем с ошибкой
      }
      // Визуально удаляем запись из списка студентов
      this.direction = this.direction.filter((direction) => direction.id_direction !== id_direction);
    },
    editStudent(id_direction) {
      this.$router.push({ name: 'CourseEdit', params: { id_direction } });
    },
  },
    
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
