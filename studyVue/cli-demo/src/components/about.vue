<template>
  <div style="height:2000px;">
    <p>我是关于我们</p>
    <div id="nav-box">
      <ul>
        <router-link to="/about" exact tag="li">study</router-link>
        <router-link to="/about/sweet" tag="li">sweet</router-link>
        <router-link to="/about/forum" tag="li">forum</router-link>
      </ul>
     
    </div>
     <router-view></router-view>
  </div>
</template>



<script>
console.log(11212);
</script>
