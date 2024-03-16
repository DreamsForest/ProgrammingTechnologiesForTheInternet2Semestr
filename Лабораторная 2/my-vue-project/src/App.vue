<template>
  <Header/>
  <Student/>
  <Footer/>
</template>

<script>
import Student from './components/Student.vue'
import Footer from './components/Footer.vue'
import Header from './components/Header.vue'

export default {
  name: 'App',
  components: {
    Student,
    Footer,
    Header
  }
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}
#nav {
  padding: 15px;
  background: #c8cccc;
}

#nav a {
  font-weight: bold;
  color: #2c3e50;
  text-decoration: none;
  &:not(:last-child) {
    margin-right: 8px;
   }
}

#nav a.router-link-exact-active {
  color: #42b983;
}
</style>
