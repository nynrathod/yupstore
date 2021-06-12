<template>
  <div id="app">
    <img alt="Vue logo" src="./assets/logo.png">
    <!-- <HelloWorld msg="Welcome to Your Vue.js App"/> -->
    <!-- <Home dynamic="Welcome"/> -->
    <!-- <Databind /> -->
    <!-- <Child v-bind:username=username /> -->
    <!-- <Child v-on:changeTitle="updatetitle($event)" /> -->
    <!-- <h1>{{title}}</h1> -->
    <!-- <Signup /> -->
    <!-- <Login /> -->
    <!-- <h1>{{name | Ucase}}</h1> -->
    <!-- <h1>Fetch Data With API</h1> -->
    <!-- <Employee /> -->
    <!-- <PostComponent />
    <router-link to="/">Home</router-link>
    <router-link to="/Aboutroute">About</router-link>
    <router-view></router-view> -->
    <products />
    
  </div>
</template>

<script>
// import HelloWorld from './components/HelloWorld.vue'
// import Home from './components/Home.vue'
// import Databind from './components/Databind.vue'
// import Child from './components/Child.vue'
// import Signup from './components/Signup.vue'
// import Login from './components/Login.vue'
// import Employee from './components/Employee.vue'
// import PostComponent from './components/PostComponent.vue'
import Products from "./components/Products.vue";

export default {
  name: 'App',
  components: {
    // HelloWorld,
    // Home,
    // Databind,
    // Child,
    // Signup,
    // Login,
    // Employee,
    // PostComponent
    Products
  },
  // data() 
  //   Products{
  //   return {
        // username: [
        //     {name: "nayan",email: "nayan@mail.com"},
        //     {name: "Arjun",email: "Arjun@mail.com"},
        //     {name: "John",email: "John@mail.com"},
        //     {name: "Daniel",email: "Daniel@mail.com"}
        // ]
        // name: "nayan"
    // }
    // {title: "Props Tutorial"}
  // },
  methods: {
      updatetitle(title) {
          this.title=title
      }
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
  margin-top: 60px;
}
</style>
