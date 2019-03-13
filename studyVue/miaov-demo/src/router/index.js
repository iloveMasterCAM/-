import Vue from "vue";
import VueRout from "vue-router";

Vue.use(VueRout);

import notfind from "@/components/notfind"
import download from "@/views/download"
import friend from "@/views/friend"
import home from "@/views/home"
import login from "@/views/login"
import shop from "@/views/shop"
import mine from "@/views/mine"
import fuservideo from "@/views/fuservideo"
import nmusician from "@/views/nmusician"
//二级菜单
import toplist from "@/views/home/toplist"
import album from "@/views/home/album"
import artist from "@/views/home/artist"
import discover from "@/views/home/discover"
import djradio from "@/views/home/djradio"
import playlist from "@/views/home/playlist"
var router = new VueRout({
    mode:'history',
    // linkActiveClass:'active',// 自定义类名
    routes: [
    //    {
    //        path:'/',
    //        component: home,
    //        children:[
    //         {
    //             path:'/',
    //             component:discover
    //         },
    //        ]
    //    },
        {
            path: '/',
            component: home,
            children:[
                {
                    path:'toplist',
                    component:toplist
                },
                {
                    path:'album',
                    component:album
                },
                {
                    path:'artist',
                    component:artist
                },
                {
                    path:'',
                    component:discover
                },
                {
                    path:'djradio',
                    component:djradio
                },
                {
                    path:'playlist',
                    component:playlist
                }
            ]
        },
        {
            path: '/download',
            component: download
        },
        {
            path: '/friend',
            component: friend
        },
        {
            path: '/login',
            component: login
        },
        {
            path: '/shop',
            component: shop
        },
        {
            path: '/mine',
            component: mine
        },
        {
            path: '/fuservideo',
            component: fuservideo
        },
        {
            path: '/nmusician',
            component: nmusician
        },
        {
            path:'*',
            component:notfind
        }

    ]

})
export default router;
