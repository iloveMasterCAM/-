// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.

import Vue from 'vue'
import App from './App'
import router from './router'

// Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  data:{
      val:'hello val'
  },
  router,
  props:['title'],
  components: { App },
  template: '<App></App>',
 
  watch:{
    msg:function(val,olval){
      constants.log(val+"-------"+olval)
  }
},
  beforeCreate:function(){
    console.log('beforeCreate')
  }
})
