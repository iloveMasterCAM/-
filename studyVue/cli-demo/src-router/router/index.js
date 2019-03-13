import vue from 'vue';
import vueRouter from 'vue-router';
import about from '../components/about';
import help from '../components/help';
import home from '../components/home';

vue.use(vueRouter);
export default new vueRouter({
  routes: [
    {
      path: '/',
      component:  home 
    },
    {
      path: '/about',
      component:  about 
    },
    {
      path: '/help',
      component: help 
    }
  ]
})