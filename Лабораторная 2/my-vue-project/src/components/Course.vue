<template>
    <Header/>
    <form style="margin-left: 200px;">   
        <table>
            <tr>
              <th style="padding-right: 20px;">ID</th>
              <th style="padding-right: 20px;">Направление подготовки</th>
            </tr>
            <tr v-for="direction in direction" :key="direction.id_direction">
              <td style="padding: 20px;">{{ direction.id_direction }}</td>
              <td style="padding: 20px;">{{ direction.name_direction }}</td>
              <td>
                <a href="#"><button type="button" class="btn btn-primary">Изменить</button></a>
                <a href="#"><button type="button" class="btn btn-danger">Удалить</button></a>
              </td>
            </tr>
          </table>
    <a href="#" style="margin-left: 600px;"><button type="button" class="btn btn-success">Добавить</button></a>
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
      direction: []
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
