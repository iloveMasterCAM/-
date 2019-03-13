<template>
  <div id="root">
    <div id="nav-box">
      <ul>
        <router-link exact active-class="active" :to="home" tag="li">home</router-link>
        <router-link :to="{path:'/document'}" tag="li">document</router-link>
        <router-link  to="/about" tag="li">about</router-link>
        <router-link to="/user" tag="li">user</router-link>
      </ul>
    </div>
    <router-view name="sliderBox"></router-view>
    <router-view>
      <ul slot="ul">
        <li>1</li>
        <li>1</li>
        <li>1</li>
        <li>1</li>
      </ul>
    </router-view>
    
  </div>
</template>

<script>
export default {
  data() {
    return {
      home: "/"
    };
  }
};
</script>
<style>
body {
  background: #fff;
}
</style>

