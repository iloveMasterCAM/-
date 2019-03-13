import Vue from 'vue';
import VueRouter from 'vue-router';
import home from '../components/home'
import about from '../components/about'
import document from '../components/document'
import notFind from '../components/notFind'
import study from '../components/study'
import sweet from '../components/sweet'
import forum from '../components/forum'
import slider from '../components/slider'
import user from '../components/user'
Vue.use(VueRouter);
var router = new VueRouter({
    mode: 'history',
    scrollBehavior:function (to,from,position){ // 滚动条位置
        if(position){
            return position
        }else{
            return {x:0,y:0}
        }
    },
    routes: [ // 路由
        {
            path: '/',
            component: home,
            alias: '/index' //别名
        },
        {
            path: '/home',
            component: home
        },
        {
            path:'/user/:tip?/:userId?',
            component:user
        },
        {
            path: '/about',
            component: about,
            children: [ //子路由
                {
                    path: '',
                    component: study
                },
                
                {
                    path: 'sweet',
                    component: sweet
                },
                {
                    path: 'forum',
                    component: forum
                }
            ]
        }, {
            path: '/document',
            components:{  //多个模块
                default:document,
                sliderBox:slider
            }
        },
        {
            path:'*',
             component:notFind
          //  redirect:'/home' 重定向
        },

    ]
})


export default router;
