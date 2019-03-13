<template>
  <div>
    <div id="home-nav">
      <ul class="nav aui-row">
        <li class="aui-pull-left">
          <router-link exact to="/" active-class="router-link-active" >推荐</router-link>
        </li>
        <li class="aui-pull-left">
          <router-link  to="/toplist" class="">排行榜</router-link>
        </li>
        <li class="aui-pull-left">
          <router-link  to="/playlist" class="">歌单</router-link>
        </li>
        <li class="aui-pull-left">
          <router-link  to="/djradio" class="">主播电台</router-link>
        </li>
        <li class="aui-pull-left">
          <router-link  to="/artist" class="">歌手</router-link>
        </li>
        <li class="aui-pull-left">
          <router-link  to="/album" class="">新碟上架</router-link>
        </li>
      </ul>
    </div>
    <router-view></router-view>
  </div>
</template>
<script>
export default {};
</script>
<style>
#home-nav {
  z-index: 90;
  height: 35px;
  box-sizing: border-box;
  background-color: #c20c0c;
  border-bottom: 1px solid #a40011;
  
}
#home-nav .nav {
  width: 1100px;
  height: 34px;
  margin: 0 auto;
  padding-left: 180px;
}
#home-nav .nav li {
  margin: 0 17px 0;
}
#home-nav .nav a {
  font-size: 12px;
  color: #fff;
  padding: 2px 13px;
  border-radius: 20px;
}

#home-nav .router-link-active{
     background: #9b0909;
}
#home-nav {
}
#home-nav {
}
#home-nav {
}
</style>

