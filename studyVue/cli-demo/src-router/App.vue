<template>
  <div id="app">
    <img src="./assets/logo.png">
    <h1 v-text="val">{{val}}</h1>
    <router-link to="/">首页</router-link>
    <router-link to="/about">关于我们</router-link>
    <router-link to="/help">帮助</router-link>
    <keep-alive>
      <router-view/>
    </keep-alive>
  </div>
</template>

<script>
export default {};
</script>

<style>
#app {
  font-family: "Avenir", Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
</style>
