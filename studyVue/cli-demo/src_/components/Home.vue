<template>
  <div class="">
    <h1>{{ value }}</h1>
    <p>231212121</p>
  </div>
</template>

<script>
export default {
  name: 'HomeHello',
  data () {
    return {
      value: 'hello vue'
    }
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h1, h2 {
  font-weight: normal;
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
