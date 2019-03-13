import Vue from 'vue'
import App from './App'
import router from '@/router/index'
import './assets/css/public'
import './iconfont/iconfont.css'
import './assets/css/nav'
var mv = new Vue({
  el:'#root',
  router:router,
  template:'<App/>',
  components:{
    App:App
  }
})