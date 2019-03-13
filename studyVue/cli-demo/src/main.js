import Vue from 'vue'
import App from './App'
import router from './router/index'

import './assets/css/public.css'
import './assets/css/nav.css'
new Vue({
  el: '#root',
  router: router,
  template: '<App/>',
  components: {
    App: App
  }
})
/*

   去{
     1，目前没有别的公司邀请面试
     2，自己经验不是很强
     3，离家近，
     4，快速积累项目经验
   }

  不去{
     1，薪水有点低，
     2，公司有点小，
     3，大小休
  }

*/