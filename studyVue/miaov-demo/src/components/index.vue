<template>
  <div id="index">
    <div id="nav">
      <ul class="aui-row">
        <router-link exact class="logo" to="/" tag="li">
          <a href>
            <img src alt>
          </a>
        </router-link>
        <ul class="nav">
          <li>
            <router-link  to="/">发现音乐</router-link>
          </li>
          <li>
            <router-link  to="/mine">我的音乐</router-link>
          </li>
          <li>
            <router-link  to="/friend">朋友</router-link>
          </li>
          <li>
            <router-link  to="/shop">商城</router-link>
          </li>
          <li>
            <router-link  to="/nmusician">音乐人</router-link>
          </li>
          <li>
            <router-link  to="/download">下载客户端</router-link>
          </li>
        </ul>
        <ul class="aui-pull-right aui-row nav-r">
          <!-- aui-relative -->
          <li class="aui-pull-left saerch aui-padded-r-15 aui-relative">
            <i class="iconfont icon-search"></i>
            <input type="text" placeholder="音乐/视频/电台/用户">
          </li>
          <li class="aui-pull-left video aui-padded-r-15">
            <router-link to="/fuservideo">
              <i class="iconfont icon-18"></i> 视频投稿
            </router-link>
          </li>
          <li class="aui-pull-left">
            <router-link to="/login">
              登录
              <i class="iconfont icon-s_bottom"></i>
            </router-link>
          </li>
        </ul>
      </ul>
    </div>
    <router-view></router-view>
  </div>
</template>
<script>
import router from "@/router/index";
export default {
  router,
  data() {
    return {};
  }
};
</script>
<style>
#nav {
  position: relative;
  z-index: 1000;
  height: 70px;
  box-sizing: border-box;
  background: #242424;
  border-bottom: 1px solid #000;
}
#nav > ul {
  width: 1100px;
  margin: 0 auto;
}
#nav .logo {
  float: left;
  width: 176px;
  height: 69px;
  background-position: 0 0;
  background: url(https://s2.music.126.net/style/web2/img/frame/topbar.png?47c167771c3e8566452c1d031829c93e)
    no-repeat 0 0px;
}
#nav .logo a {
  height: 100%;
  display: inline-block;
  width: 100%;
}
#nav ul ul {
  float: left;
}
#nav ul ul li {
  float: left;
  height: 70px;
  font-size: 14px;
}
#nav ul ul li a {
  padding: 0 19px;
  text-align: center;
  line-height: 70px;
  color: #ccc;
  display: inline-block;
  position: relative;
}
#nav ul ul li a::after {
  content: "";
  position: absolute;
  bottom: 0;
  left: 50%;
  margin-left: -6px;
  width: 0;
  height: 0;
 
  border-color: transparent;
  border-bottom-color: #c20c0c;
  border-width: 6px;
  border-style: solid;
   display: none;
}
#nav i {
  color: #ccc;
}
#nav input {
  background: #fff;
  border-radius: 50px;
  height: 32px;
  line-height: 32px;
  padding-left: 25px;
  font-size: 12px;
}
#nav input::placeholder {
  font-size: 12px;
}

#nav ul .nav-r .saerch {
  padding-top: 20px;
}
#nav .video a {
  border-radius: 50px;
  padding: 6px 12px;
  display: inline;
  border: 1px solid #ccc;
}
#nav .nav .router-link-active {
  color: #fff;
  background: #000;
}
#nav .nav a.router-link-active::after{
  display: block;
}
#nav .icon-search {
  position: absolute;
  top: 1.1rem;
  left: 0.2rem;
  color: #000;
}
</style>

