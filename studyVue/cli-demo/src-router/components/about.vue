<template>
 
    <div>
      <h1>{{msg}}</h1>
      <h1>关于</h1>
      <input type="text" v-model="msg">
      <button @click="send()">按钮</button>
    </div>
 
</template>
<script>
export default {
  data() {
    return {
      msg: "关于我们"
    };
  },

  methods: {
    send: function() {
      this.msg = "hello world";
    }
  }
};
</script>
<style>
h1 {
  color: #42b983;
}
</style>

