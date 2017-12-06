<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:41:"./application/index/view/index/index.html";i:1512396105;}*/ ?>
﻿
﻿<!DOCTYPE html>

<html>

<head>

    <meta charset="UTF-8"

    <meta name="baidu-site-verification" content="PMj7CcZUak" 

    <meta name="keywords" content="自定义导航,上网导航,网址大全">

    <meta name="description" content="www.yi-23.com-收藏夹-为用户提供门户、新闻、视频、游戏、小说等各种分类的收藏夹，让您的网络生活更简单精彩。上网，从yi-23开始" />

    <title>上网,从yi-23开始</title>
 <link rel="icon" href="/public/static/image/show/icon/yi-23.ico"/>

<link href="/public/static/css/show/aui.css" rel="stylesheet" />
    <link href="/public/static/css/show/indexfrm.css" rel="stylesheet" />

    <link href="/public/static/css/show/iconfont/iconfont.css" rel="stylesheet"/>

    <link href="/public/static/css/show/uphead.css" rel="stylesheet"/>

    <link href="/public/static/css/show/baidu.css" rel="stylesheet"/>

   <script src="/public/static/css/show/iconfont/iconfont.js"></script>

 <style>

    .icon_ {

       width: 1em; height: 1em;

       vertical-align: -0.15em;

       fill: currentColor;

       overflow: hidden;

    }
 #addclass_box p{
         line-height: 45px;
	height: 45px;
     }

     #history{

         position: relative;

         padding-left: 5%;

     }

     #history .history{

         position: absolute;

         left: 2%;

         top: 0.5rem;

         width: 2px;

         height: 100%;

         background: red;

     }

     #history .history span{

         width: 10px;

         height: 10px;

         border-radius: 50%;

         background: red;

        position: absolute;

         margin: 0;

         left: -4px;

     }

     #history .img, #history .txt{

         display: table-cell;

         vertical-align: middle;

     }

     #history img{

         width: 250px;

     }

     #history .time{

         position: absolute;

         left: -6.5%;

         top: 25%;

         font-size: 12px;

         padding: 5px 5px;

         background: red;

         color: #fff;

         border-radius: 5px;

     }

     #history>div{

         position: relative;

     }

     #history .msg{

         line-height: 30px;

     }

     .wea{

        font-size: 1.2rem;

     }

 

     #baidu{

         display: block;

        width: 640px;

         background: transparent;

         position: absolute;

         top: 12%;

         left: 50%;

         margin-left: -320px;

        z-index: 2;

     }

     #baidu img{

         width: 160px;

	margin-bottom: 10px;
     }

     #baidu table{

         background: transparent;

         width: 100%;

     }

     #baidu .submit{

         width: 104px;

         margin-left: -6px;

         line-height: 45px;

     }

     #Text{

        width: 537px;

        line-height: 29px;

        border-bottom: 1px solid #eee;

        border-left: 1px solid #eee;

        border-top: 1px solid #eee;

     }
     #allSitesBoxHdl{
         display: none;
     }
 #message{
         background: rgba(53, 181, 88, 0.62);
         color: #fff;
         width: 200px;
         padding: 15px 0;
         border-radius: 3px;
         position: fixed;
         top: 30%;
         left: 50%;
         margin-left: -100px;
         z-index: 20;
         display: none;
     }
    </style>

</head>

<body>

    

    <ul id="nav" class="clear">

           <li class="aui-pull-left aui-margin-l-15 aui-padded-r-10 aui-padded-r-15 weather">

               <a href="" id="weather" target="_blank" title="点击查看更多">

                   <span></span>&nbsp;&nbsp;

                   <svg class="icon_ wea" aria-hidden="true">

                      <use xlink:href=""></use>

                    </svg>

                </a> 

            </li>

           <li class="aui-pull-left aui-padded-l-15 skin" id="skin"><a href="javascript:void(0);">换肤</a></li>

           <li class="aui-pull-right aui-padded-r-15 aui-margin-r-15 "><a href="http://www.yi-23.com/public/index/index/feedback.html">反馈</a></li>

           <li class="aui-pull-right aui-padded-r-15 aui-margin-r-15 about"><a href="">关于</a>

        <ul>

           <i></i>

            <li>yi-23 是一个网站收藏夹， 致力于帮助用户收藏网站，建立友好、高效、一致的用户体验, 还加入了全球最大的中文搜索引擎一百度。

            <h1 class="aui-text-right">——yi-23</h1>

            </li>

        </ul>

           </li>

           <li class="aui-pull-right aui-padded-r-15 aui-margin-r-15 setindex"><a href="http://www.yi-23.com/public/index/index/homepage.html">把yi-23设为主页</a></li>

           <li class="aui-pull-right aui-padded-r-15 aui-margin-r-15 aui-margin-l-15 aui-padded-l-15 set"><a href="javascript:void(0);">设置</a></li>

           <li id="login" class="aui-pull-right login aui-hide"><a href="http://www.yi-23.com/public/index/index/login.html">登录</a> <span class="cursor">&nbsp;&nbsp;/&nbsp;&nbsp;</span><a href="http://www.yi-23.com/public/index/index/register.html" >注册</a></li>

           <li class="aui-pull-right aui-padded-r-15  username cursor aui-hide"><img id="userhead" src="/public/static/image/show/head.jpg" alt=""><a class="aui-margin-l-10" id="username"></a>

               <ul id="user">

                  <p class="aui-text-center"><i class=""></i></p>

                   <li class="aui-text-center uphead">上 传头像</li>

                   <li class="aui-text-center setName">修改昵称</li>

                   <li class="aui-text-center" id="exit">退出登录</li>

               </ul>

           </li>

           <div id="skin_box" class="box">

              <div class="btn clear aui-text-left ">

                      <p class="key">

                           <span class="stop aui-pull-right" id="stop"><i class="iconfont icon-shouqi"></i>收起</span>

                           <span class="aui-pull-right" id="dont"><i class="iconfont icon-float-close"></i>不要皮肤</span>

                      </p>

              </div>

              <div class="content_box">

                  

              </div>

          <!--    <div class="content active">

                 <div class="clear active">

                   <p class="aui-pull-left box1">

                     <img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src=" " alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     </p>

                     

                     <p class="aui-pull-left box1">

                    

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                      <img onclick="showbg(this)" class="img_large mar-l mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                 </div>

                 

                 <div class="clear">

                     <p class="aui-pull-left box1">

                     <img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     </p>

                     

                     <p class="aui-pull-left box1">

                    

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                      <img onclick="showbg(this)" class="img_large mar-l mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                 </div>

                 

                 <ol class="aui-text-center aui-margin-t-10">

                     <li class="active"></li>

                     <li></li>

                     <li></li>

                     <li></li>

                 </ol>

              </div>

               

              <div class="content">

                 <div class="clear">

                   <p class="aui-pull-left box1">

                     <img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     </p>

                     

                     <p class="aui-pull-left box1">

                    

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                      <img onclick="showbg(this)" class="img_large mar-l mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                 </div>

                 <div class="clear active">

                     <p class="aui-pull-left box1">

                     <img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     </p>

                     

                     <p class="aui-pull-left box1">

                    

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                      <img onclick="showbg(this)" class="img_large mar-l mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                 </div>

                 <ol class="aui-text-center aui-margin-t-10">

                     <li class="active"></li>

                     <li></li>

                     <li></li>

                     <li></li>

                 </ol>

              </div>



               <div class="content">

                 <div class="clear active">

                     <p class="aui-pull-left box1">

                     <img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     

                     <p class="aui-pull-left box1">

                    

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                      <img onclick="showbg(this)" class="img_large  mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                 </div>

                 <div class="clear">

                     <p class="aui-pull-left box1">

                     <img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="" alt="">

                     </p>

                     

                     <p class="aui-pull-left box1">

                    

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt="">

                     <img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                      <img onclick="showbg(this)" class="img_large mar-l mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                     <p  class="aui-pull-left">

                     <img onclick="showbg(this)" class="img_Small" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     <img onclick="showbg(this)" class="img_Small mar-t" src="/public/static/image/show/bg/Animal/1.jpg" alt="">

                     </p>

                 </div>

                 <ol class="aui-text-center aui-margin-t-10">

                     <li class="active"></li>

                     <li></li>

                     <li></li>

                     <li></li>

                 </ol>

              </div>-->

              

           </div>

           

       </ul>

    

     

   <form action="http://www.baidu.com/baidu" target="_blank" id="baidu" autocomplete="off">

        <table bgcolor="#FFFFFF"><tr><td>

        <p class="aui-text-center">  <a href="http://www.baidu.com/"><img src="/public/static/image/show/baidu.png" alt="Baidu" align="bottom" border="0"></a></p>

        <input name=tn type=hidden value=baidu>

      

        <input type=text name=word size=30 autocomplete="off"  url="true" id="Text" type="text">

        <input type="submit" class="submit" value="百度一下">

        </td></tr></table>

        <div style="position: absolute;" id="allSitesBoxHdl" class="classlist"

        onmouseover="this.style.display='block'" onmouseout="this.style.display='none'" >

<!--       -->

        <ul id="allSitesBoxContent">

        </ul>

    </div>



    

    </form>

    



        

    

    <div id="Collection">

           <div class="clear CollectionNav aui-margin-b-10">

           <h1 class="aui-pull-left aui-padded-l-10 aui-padded-r-10 h1 head active">我的收藏&nbsp;<span id="sum">(**)</span></h1>

            <p class="aui-pull-left aui-margin-l-15 aui-padded-l-10 aui-padded-r-10 cursor head">推荐</p> 

            <p class="aui-pull-left aui-margin-l-15 aui-padded-l-10 aui-padded-r-10 cursor head ">历史的今天</p> 

            <p class="aui-pull-left aui-margin-l-15"><input id="search" type="text" placeholder="输入我的收藏/拼音首字母"> <input type="hidden" value=""> </p> 

            <p class="aui-pull-right"><span id="edit">编辑</span> <span id="add_">添加收藏</span></p>

            </div>

            <div class="box active" id="list_box"></div>

              

           <div class="news box">

                <ul class="aui-col-xs-9" id="news_ul">

                </ul>

                <div class="aui-col-xs-3">

                    

                    

                </div>

            </div>

           

           <div id="history" class="box clear ">

                 <p class="history"><span></span></p>

                  <div class="msg">

                      <p class="aui-pull-left">回顾历史的长河，历史是生活的一面镜子</p>

                      <p class="aui-pull-right cursor huan"><i class="iconfont icon-huanyipi aui-pull-left "></i> <em class="aui-pull-left aui-padded-l-10">换一换</em></p>

                  </div>

              

           

           </div>

           <div id="search_box">

                <ul>

                   

                </ul>

           </div>

           <div class="clear add" id="addclass_box"> 

           <div class="aui-pull-left aui-padded-r-10 aui-hide"><i id="add_cla" class="iconfont icon-54-copy"></i><span id="custom" class="cursor">自定义</span></div>

            <p class="aui-pull-left"><input id="add_input" type="text" placeholder="添加分类"> <span id="addclass">确定</span></p>

            <input type="hidden">

            </div>

           

       </div>

       

    <div id="add">

          <p class="clear">添加网站 <span class="aui-pull-right iconfont icon-x x1"></span></p>

           <div class="clear aui-padded-t-15 aui-padded-b-15">

               <input class="aui-pull-left name aui-margin-r-15" id="nicName" name="name" type="text" placeholder="名称">

               <input type="hidden" id="nN" name="tt">

               <input class="aui-pull-left url" type="text" name="url" id="url" placeholder="网站 例如:www.baidu.com">

                <div class="selcet aui-pull-left">

                    <select id="key_box">

                        

                    </select>

                    

                    <input type="hidden" name="class">

                </div>

                 

           </div>

            <i>&nbsp;</i>

           <span>输入错误</span>

           <input type="button" value="添加网站">

       </div>



    <div id="set" class="aui-col-xs-12">

           <ul>

               <li class="clear">

                   <p class="aui-pull-left">是否展示推荐</p>

                   <label class="aui-pull-right cursor aui-margin-l-10"><input type="radio" name="Recommend" value="1" checked="checked">开启</label>

                   <label class="aui-pull-right cursor"><input type="radio" name="Recommend" value="0">关闭</label>

               </li>

               <li class="clear">

                   <p class="aui-pull-left">是否展示历史的今天</p>

                   <label class="aui-pull-right cursor aui-margin-l-10"><input type="radio" name="history" value="1" checked="checked">开启</label>

                   <label class="aui-pull-right cursor"><input type="radio" name="history"  value="0">关闭</label>

               </li>

               <li class="clear">

                   <p class="aui-pull-left">是否开启换肤活动提醒</p>

                   <label class="aui-pull-right cursor aui-margin-l-10"><input type="radio" name="remind"  value="1" checked="checked">开启</label>

                   <label class="aui-pull-right cursor"><input type="radio" name="remind"  value="0">关闭</label>

               </li>

               <li class="clear">

                   <p class="aui-pull-left">收藏文字颜色</p>

                   <label class="aui-pull-right cursor aui-margin-l-10"><input type="radio" name="color"  value="1" checked="checked">黑色</label>

                   <label class="aui-pull-right cursor"><input type="radio" name="color"  value="0">白色</label>

               </li>

                <p class="aui-text-center cursor aui-pull-right Save">保存设置</p>

                <i class="iconfont icon-x cursor x1"></i>

           </ul>

       </div>

       

    <div id="setName">

        <input type="text" name="name" placeholder="输入昵称/1~16位英文或数字"/>

        <span class="cursor">确定</span>

        <p>昵称不能超过12个汉字(24个字符)</p>

    </div>

    <div id="headimg">

      <div class="container">

      <div class="imageBox">

        <div class="thumbBox"></div>

        <div class="spinner" style="display: none">加载中...</div>

      </div>

      <div class="action"> 

        <div class="new-contentarea tc"> <a href="javascript:void(0)" class="upload-img">

          <label for="upload-file">选择头像</label>

          </a>

          <input type="file" class="" name="upload-file" id="upload-file" />

        </div>

        <input type="button" id="updata"  class="Btnsty_peyton aui-margin-l-15" value="完成">

        <input type="button" id="btnCrop"  class="Btnsty_peyton aui-margin-r-15" value="裁切">

        <input type="button" id="btnZoomIn" class="Btnsty_peyton" value="+"  >

        <input type="button" id="btnZoomOut" class="Btnsty_peyton" value="-" >

      </div>

      <div class="cropped"></div>

    </div>

    </div>

       

    <div id="return" class="aui-text-center cursor">

        <p class="text">返回顶部</p>

        <p class="icon iconfont icon-jinlingyingcaiwangtubiao11"></p>

        </div>

       
 <div id="message" class="aui-text-center">
        操作成功
    </div>
    <div class="bg_skin" id="bg_skin"></div>

    <div class="isShow"></div>

    <div id="bg"></div>

    <footer class="aui-text-center" id="footer">

        <p>©2017&nbsp;&nbsp;&nbsp;Yi-23 闽ICP备15012318号</p>

    </footer>

</body>

</html>



<script type="text/html" id="search_">

    {{each d as val}}

    <li class="aui-pull-left aui-text-center" id="{{val.id}}"><img src="{{val.url}}/favicon.ico" onerror='loadImg(this)'><a class="aui-padded-l-10 aui-ellipsis-1" href="{{val.url}}"  target="_blank">{{val.name}}</a> <sup class="iconfont icon-x"></sup>

    <input type="hidden" value="{{val.tt}}">

    </li>

    {{/each}}

</script>

<!--"id":6,"name":"aaa","tt":"aa","url":"aa","userid":1,"calss":"购物"-->

<script type="text/html" id="list">

    <div class="clear  list"> 

        <p class="aui-pull-left title aui-text-center aui-col-xs-1">{{data[0].calss}}</p>

            <ul class="aui-pull-right aui-col-xs-11">

<!--                <p class="bor-r three"></p>-->

                    {{each data as val}}        

                    <li class="aui-pull-left aui-text-center" id="{{val.id}}"><img src="{{val.url}}/favicon.ico" onerror='loadImg(this)'><a class="aui-padded-l-10 aui-ellipsis-1" href="{{val.url}}"  target="_blank" title="{{val.name}}">{{val.name}}</a> <sup class="iconfont icon-x" id="{{val.id}}" onclick="del(this)"></sup>

                    <input type="hidden" value="{{val.tt}}">

                    </li>              

                    {{/each}}

          </ul>

     </div>

</script>



<script type="text/html" id="key">

    {{each d as val}}

    <div key="{{val.title}}">{{val.title}}</div>

    {{/each}}

</script>



<script type="text/html" id="historytemp">

    {{each d as val}}

    <div class="aui-pull-left clear aui-margin-t-10 box_history">

          <span class="time cursor">{{val.year}}年</span>

           <div class="img aui-padded-r-15">

                <img class="aui-pull-left" onerror="errorimg(this)" src="{{val.pic}}"/>

           </div>

            <div class="txt">

                <h3>{{val.title}}</h3>

                <p>{{val.des}}</p>

                <p class="aui-text-right"><span>{{val.lunar}}</span></p>

            </div>

        </div>

    

    {{/each}}

</script>



<script type="text/html" id="news_box">

    {{each data as val}}

         <li class="clear">

            <div class="img">

                <a href="{{val.url}}" target="_blank"><img class="" src="{{val.thumbnail_pic_s}}" alt=""></a>

            </div>

            <div class="msg aui-padded-l-15">

                <h3 class="cursor aui-margin-b-15"><a href="{{val.url}}" target="_blank">{{val.title}}</a></h3>

                <p><em>{{val.author_name}}</em> <time>{{val.date}}</time>&nbsp;&nbsp;<time>{{val.time}}</time></p>

            </div>

        </li>

    {{/each}}

</script>

<script src="/public/static/script/jquery.js"></script>



<!--

<script src="/public/static/script/JScript2.js" type="text/javascript"></script>

  <script type="text/javascript">        Init();</script>

-->



<script src="/public/static/script/artTemplate.js"></script>

<!--<script src="/public/static/script/load.js"></script>-->

<script src="/public/static/script/Initials.js"></script>

<script src="/public/static/script/cropbox.js"></script> 

<script src="/public/static/script/cache.js"></script>



<script>

   

    //内容居中

   $("#Collection").css({marginLeft:parseInt($(window).width()/2)-465})

    

      /*天气*/

     $.getScript('http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js', function(_result) {

      

        if (remote_ip_info.ret == '1') {

            $.ajax({

                type: "GET",

                url: "http://wthrcdn.etouch.cn/weather_mini?city="+remote_ip_info.city,

                data: "",

                success: function(r){

                   var json = JSON.parse(r)

                   var type = json.data.yesterday.type

                   var icon;

                   if(type.indexOf('多云') != -1){

                         icon = '#icon-duoyun'

                   }else  if(type.indexOf('风雨') != -1){

                         icon = '#icon-baofengyu'

                   }else

                    if(type.indexOf('霾') != -1){

                         icon = '#icon-mai'

                   }else

                    if(type.indexOf('风') != -1){

                         icon = '#icon-xue'

                   }else

                    if(type.indexOf('晴') != -1){

                         icon = '#icon-qing-'

                   }else

                    if(type.indexOf('阴') != -1){

                         icon = '#icon-yin'

                   }else

                    if(type.indexOf('雨') != -1){

                         icon = '#icon-yu'

                   }

                   var hei = json.data.yesterday.high.replace('高温','');

                   var low = json.data.yesterday.low.replace('低温','');

                    

                   $("#weather use").attr('xlink:href',icon)

        $("#weather span").text(json.data.city+" "+hei+"~"+low+" "+type);

    $("#weather").attr('href','https://www.baidu.com/s?tn=baidutop10&rsv_idx=2&wd='+json.data.city+'天气预报')

                }

            });

        }else{

             $("#weather span").text('定位失败');

        }

    });

    

    

    /*默认图片*/

    function loadImg(o){

    $(o).attr("src", "/public/static/image/show/inter.png");

    };

    function errorimg(o){

    $(o).attr("src", "/public/static/image/show/inter.png");

    };


    /*判断是否登录*/

    var islogin = getcookie('token');

    

     var Recommend = true,history_ = true,remind = true,color = true,data,usermsg,height = [],cache;

   

    if(Math.abs(localStorage['time']) < Date.parse(new Date()) ){

        localStorage.clear('news');

    }

    if(islogin){

       post('index/Usermsg/usermsg','',function(r,d){

           usermsg = JSON.parse(d);

        $("#nav .username,.add>div").removeClass('aui-hide')

        $("#username").text(usermsg.nickname)

         $("#userhead").attr('src',usermsg.header || 'http://www.yi-23.com/public/static/image/show/default.png')

        if(usermsg.skin != '0'){
                $("#bg_skin").css({backgroundImage:'url('+usermsg.skin+')'}).addClass('active');
            }else{
                 $("#bg_skin").css({backgroundImage:'url(/public/static/image/show/yi23bg.png)','backgroundRepeat': 'repeat'});
            }

        // 0 == 关闭 1 == 开启

            showset(usermsg)

       })

    }else{

        

         $("#login").removeClass('aui-hide')

       cache = new cache();

        cache.temp(function(r){

           

            showset(r.set);

       if(r.skin != '0'){
                $("#bg_skin").css({backgroundImage:'url('+r.skin+')'}).addClass('active');
            }else{
                 $("#bg_skin").css({backgroundImage:'url(/public/static/image/show/yi23bg.png)','backgroundRepeat': 'repeat'});
            }
        });

    }

      var options ={

		thumbBox: '.thumbBox',

		spinner: '.spinner',

		imgSrc: '/web/public/static/image/show/avatar.png'

	}

    

	var cropper = $('.imageBox').cropbox(options);

    

	$('#upload-file').on('change', function(){

		var reader = new FileReader();

		reader.onload = function(e) {

			options.imgSrc = e.target.result;

			cropper = $('.imageBox').cropbox(options);

		}

		reader.readAsDataURL(this.files[0]);

		this.files = [];

	})

    

	$('#btnCrop').on('click', function(){

		var img = cropper.getDataURL();

		$('.cropped').html('');

		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:64px;margin-top:4px;border-radius:64px;box-shadow:0px 0px 12px #7E7E7E;" ><p>64px*64px</p>');

		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:128px;margin-top:4px;border-radius:128px;box-shadow:0px 0px 12px #7E7E7E;"><p>128px*128px</p>');

		$('.cropped').append('<img src="'+img+'" align="absmiddle" style="width:180px;margin-top:4px;border-radius:180px;box-shadow:0px 0px 12px #7E7E7E;"><p>180px*180px</p>');

	})

    

	$("#updata").on('click',function(){

        

        if($(".cropped").html() != ''){

        var or = $(".cropped img:first").attr('src')

        var src = $(".cropped img:first").attr('src').split(',')



        post('index/Usermsg/sethead',{'data':src[1]},function(r,d){

          $("#userhead").attr('src',or)

          $("#headimg,#bg").hide();

          

            

        })

        }

        

    })

    

    $('#btnZoomIn').on('click', function(){

		cropper.zoomIn();

	})

	$('#btnZoomOut').on('click', function(){

		cropper.zoomOut();

	})

    

    $("#setName span").on('click',function(){

      var txt = $("#setName input").val()

      if(txt == '') return;

      if( getBLen(txt) >= 16){

        $("#setName p").show();

          return;

      }

    //  var con = $("#setName input").serialize();

        post('index/Usermsg/setnickname',{'nickname':txt},function(r,d){

            $("#username").text(txt)

            $("#bg,#setName").fadeOut('300')

        })

  })

     

     // 添加网站

    $("#add input[type='button']").on('click',function(){

        var txt = $.trim($("#add .url").val())

        if($("#nicName").val() == ''){

             $("#add>span").css({marginLeft:'0'});

            $("#add>span").show();

            hidei()

            return;

        }

        if(txt.indexOf('http') == -1){

            txt = "http://"+txt

        }

        if(IsURL(txt)){

          var cla = $("#key_box option:selected").val();

          

            var name = $("#nicName").val()

            var tt = $("#nN").val()

             var con;

          

            if(islogin){

                con = {'name':name, 'tt': tt, 'url':txt, 'class':cla,'id':null}

            }

        if(islogin){
           //var con = $("#add input").serialize();
            post('index/Usermsg/addurl',con,function(r){
                $("#nicName,#add .url").val('')
               message('添加成功')
classname();
            })
        }else{
            cache.addurl(name,txt,tt)
         
          message('添加成功')
             $("#nicName,#add .url").val('')
            cache.temp(function(){})
        }
        }else{
           
        }
    })
    
    function message(msg){
        if(msg){ $("#message").text(msg);}
        
        $("#message").fadeIn();
        setTimeout(function(){
               $("#message").fadeOut();
        },2000)
    }
    

    var thisI;

    $("#Collection .add>div").on('click',function(i){

        thisI = this

          addClassTab(this)

          

    })

    /* 添加分类 */

    $("#addclass").on('click',function(){

         if($(this).prev().val() != ''){

      /*  post('php/userSet/addclass.php',{name:$(this).prev().val(),tt:$("#addclass_box input[type='hidden']").val()},function(r,e){

             cokie.addClass($(this).prev().val())

        })*/

        post('index/Usermsg/addclass',{'class':$.trim($("#add_input").val())},function(r,d){

           addClassTab(thisI)  

        })

            

        }

        

    })

    //显示 皮肤

    post('admin/html/show','',function(r,d){

  var arr=eval("("+d+")"); 
            var json = {};

            arr.forEach(function(key){

            if(key == 'animal'){

                json[key] = '动物'

            }

            if(key == 'belle'){

                 json[key] = '美女'

            }

            if(key == 'Comic'){

                 json[key] = '动漫'

            }

            if(key == 'geme'){

                 json[key] = '游戏'

            }

            if(key == 'film'){

                 json[key] = '电影'

            }

            if(key == 'Scenery'){

                 json[key] = '风景'

            }

            })

        for(var key in json){

             $("#skin_box .key").prepend('<span class="child" key="'+key+'">'+json[key]+'</span>')

            $("#skin_box .content_box").prepend('<div class="content" id="'+key+'"><ol class="aui-text-center aui-margin-t-10"></ol></div>')

           

        }

     $("#skin_box .content").eq(0).addClass('active')

      $("#skin_box .key .child").eq(0).addClass('active')

        

    //点击切换

    $("#skin_box .child").on('click',function(){

    var index = $(this).index(),$o = $(this);

    $("#skin_box .child").removeClass('active')

    $("#skin_box .content").removeClass('active')

    $("#skin_box .content").eq(index).addClass('active')

    $(this).addClass('active')

    showimgfun(this)

    })

        showimgfun($("#skin_box .child").eq(0))

    })

    

    //点击事件

      $("#skin").on('click',function(){

     $("#skin_box").slideToggle("slow");

       $('.isShow').show();

    })

    

    $(".isShow").on('click',function(){

        $("#skin_box,#set").fadeOut("slow");

        $(this).hide();

    })

    //收起

    $("#stop").on('click',function(){

        $("#skin_box,#set").fadeOut("slow");

        $('.isShow').hide();

    })

    $("#dont").on('click',function(){

        if(islogin){

            //dontskin

            post('index/Usermsg/dontskin','',function(r){

                   $("#bg_skin").css({backgroundImage:'url()'});

            })

        }else{

             cache.dontskin();

        }

    })

  

//    $("#Collection").css({marginLeft:parseInt($(window).width()/2)-465})

    

    var on = false;

    $(window).scroll(function(){

        var scrltop = document.documentElement.scrollTop || document.body.scrollTop;

       if(on){

            footer();

       }

        if(scrltop >= 190 ){

            $("#return").slideDown(); 

        }else{

            $("#return").fadeOut()

        }

        on = true;

    })



    $("#add .selcet span").on('click',function(){

        $("#add .selcet>div").slideToggle("slow");

    })

    

    

    

    /* 关闭添加弹框 */

    $("#add p span").on('click',function(){

      close();

    })

   

     $(".x1").on("mouseover",function(){

        $(this).addClass('icon-x1')

         $(this).removeClass('icon-x')

     })

    $(".x1").on('mouseleave',function(){

        

     $(this).addClass('icon-x')

      $(this).removeClass('icon-x1')

     

     })

    /*添加收藏*/

    $("#add_").on('click',function(){

        $("#add").fadeToggle('300')

         $("#bg").slideToggle('300')

    })

  

    $("#Collection sup").on('mouseover',function(){

            $(this).attr('class','iconfont icon-x1')

        })

    $("#Collection sup").on('mouseleave ',function(){

            $(this).attr('class','iconfont icon-x')

        })

    

    /*自定义*/

  /*  $("#Collection .add>div").on('mouseover',function(){

            $("#add_cla").attr('class','iconfont icon-jia')

         })

    $("#Collection .add>div").on('mouseleave',function(){

            $("#add_cla").attr('class','iconfont icon-54-copy')

         })
*/



    

    function addClassTab(this_){

     if($(this_).data('off')){

       $("#Collection .add p").animate({width:'0px'})

       $(this_).data('off',false)

        }else{

        $("#Collection .add p").animate({width:'270px'})

       $(this_).data('off',true)

        }

    }

    

    var index = 0;

    $("#Collection .head").on('click',function(){

    

        $("#Collection .head,#Collection .box").removeClass('active')

        $(this).addClass('active')

        $("#Collection .box").eq($(this).index()).addClass('active')

         index = $(this).index();

        if(index == 0){

             $("#edit,#add_,#search").show();

        }else{

            $("#edit,#add_,#search").hide();

            

        }

      

      

      

       

        footer();

        // 

    })

    

    /* 编辑 */

    $("#edit").on("click",function(){

        $("#Collection sup").fadeToggle()

        if($(this).text() == '编辑'){

                $("#Collection .three,#Collection .title").hide();

                $("#Collection li").addClass('active')

                $("#Collection .list").each(function(){

                $(this).css('height','auto')

                height.push($(this).css('height'))

                })

                $(this).text('完成')

                

            }else{

                $("#Collection li").removeClass('active')

                $("#Collection .three,#Collection .title").show();

                $(this).text('编辑')

                hei();

                $("#list_box").html('')



                for(var i=0; i<data.length; i++){

                     var d = {data:data[i]}

              var html = template('list',d)

                $("#list_box").append(html)

                }

               

                

            }

        footer();

        

    })

  

    

    $(".set").on('click',function(){

        $("#set").slideToggle()

        $('.isShow').show()

    })

    /*保存设置*/

    $("#set .Save").on('click',function(){

        $("#set").fadeOut()

        //{"Recommend":"false","history":"false","skin":"false","skin_address":"false","news":"false"}

        var Recommend = $('#set input[name="Recommend"]:checked').val();

        var history = $('#set input[name="history"]:checked').val();

        var remind = $('#set input[name="remind"]:checked').val();

        var color = $('#set input[name="color"]:checked').val();

        var data = {"Recommend":Math.abs(Recommend),history:Math.abs(history),remind:Math.abs(remind),color:Math.abs(color)};

        if(islogin){

            post('index/Usermsg/SaveSet',data,function(r,d){

            })

        }else{

            cache.set(data)

        }

       

            // setMsg();

            

    }) 

    $("#set i").on('click',function(){

        $("#set").fadeOut("slow");

    })

   

    

    /*返回顶部*/

    

    $("#return").on('click',function(){

    $('body').animate({scrollTop:0},300);

    return false;

    })

    $("#exit").on('click',function(){

    //logout

        post('index/Userlogin/logout',{'action':'logout'},function(r,d){

            window.location.reload();

        })

  })

  $("#search").keyup(function () {

    var txt = $(this).val();

   

      if(txt == ''){

        $("#Collection .list").show();

           $("#search_box").hide();

      }else{

      $("#Collection .list").hide();

        $("#search_box").show();

          pinyin.getFullChars(txt);

           $("#search_box ul").html('');

          /*var val = pinyin.getCamelChars(txt)

          if(!isChineseChar(txt)){

            val = txt

          }*/

         

      }

      if(islogin){

            var r = {d:search( pinyin.getCamelChars(txt.toUpperCase()) )}

            var html = template('search_',r)

            $("#search_box ul").append(html) 

      }else{

           var r = {d:cache.search( pinyin.getCamelChars(txt.toUpperCase()) )}

           

        var html = template('search_',r)

        $("#search_box ul").append(html) 

      }

    })

  

  

  $("#nicName").on('keyup',function(){

         pinyin.getFullChars($(this).val());

 $("#nN").val(pinyin.getCamelChars($(this).val().toUpperCase())) 

    })

  

  

  

  $("#add_input").on('keyup',function(){

     pinyin.getFullChars($(this).val());

      $("#addclass_box input[type='hidden']").val(pinyin.getCamelChars($(this).val().toUpperCase()))

  })

  

  $(".username .setName").on('click',function(){

     $("#bg,#setName").slideDown('300')

  })



  $(".username .uphead").on('click',function(){

     $("#bg,#headimg").slideDown('300')

  })

  

  $("#bg").on('click',function(){

    $("#bg,#setName").fadeOut('300')

    $("#headimg").hide();

    close();

    

  })

  

  $("#headimg input[type='file']").on('change',function(){

         var srcs = getObjectURL(this.files[0]);   //获取路径

//        $("#headimg .img").css('backgroundImage','url('+srcs+')')

      $("#headimg img").attr('src',srcs)

        $(this).hide();

        $('.file').hide();

      $("#headimg .again").show();

   

      

})

  

    function footer(){

 if(document.body.style.overflow!="hidden"&&document.body.scroll!="no"&&

                document.body.scrollHeight>document.body.offsetHeight)

            {

            // alert("有滚动条");

     $("footer").css({position:'static',marginTop:'35px',marginBottom:'0px'})

            }else 

            { 

             //alert("无滚动条");

                $("footer").css({position:'absolute'})

            }

    }

    /*删除*/    

    function del(o){

          var id = $(o).attr('id');

        if(islogin){

            post('index/Usermsg/del',{'id':id},function(r,e){

                $(o).parent().remove();

            })

        }else{

            cache.del(id)

            $(o).parent().remove();

        }   

        

    }

 

    

    function showimgfun(o){

            var $o = $(o);
            if($o.attr('key')){

            post('admin/html/showimg',{key:$(o).attr('key')},function(r,d){

      

                d = d.split(',')

                d.pop()

                var num = d.length/12

                if((num.toString().split('.')[1])){

                    num+=1; 

                }

                

                for(var i=0; i< parseInt(num); i++){

                    if(i == 0){

                        $("#"+$o.attr('key')).append('<div class="clear active"><p class="aui-pull-left box1"><img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src="" alt=""><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt=""><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="" alt=""></p><p  class="aui-pull-left"><img onclick="showbg(this)" class="img_Small" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""></p> <p class="aui-pull-left box1"><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt=""><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt=""><img onclick="showbg(this)" class="img_large mar-l mar-t" src="" alt=""></p><p  class="aui-pull-left"><img onclick="showbg(this)" class="img_Small" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""></p></div>')

                     $("#"+$o.attr('key')+' ol').append('<li class="active" onclick="tab(this)"></li>')

                    }else{

                        $("#"+$o.attr('key')).append('<div class="clear"><p class="aui-pull-left box1"><img onclick="showbg(this)" class="img_large mar-l aui-pull-left" src="" alt=""><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-t" src="" alt=""><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-r mar-t" src="" alt=""></p><p  class="aui-pull-left"><img onclick="showbg(this)" class="img_Small" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""></p> <p class="aui-pull-left box1"><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt=""><img onclick="showbg(this)" class="img_Small aui-pull-left mar-l mar-b" src="" alt=""><img onclick="showbg(this)" class="img_large mar-l mar-t" src="" alt=""></p><p  class="aui-pull-left"><img onclick="showbg(this)" class="img_Small" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""><img onclick="showbg(this)" class="img_Small mar-t" src="" alt=""></p></div>')

                         $("#"+$o.attr('key')+' ol').append('<li class="" onclick="tab(this)"></li>')

                    }

                     

                }

             

                d.forEach(function(o,i){

                     $("#"+$o.attr('key')+' img').eq(i).attr('src','/public/static/image/'+o)

                })

                

                

               

               $o.removeAttr('key')

                

            })

        }

    }

    

    function showbg(o){

        var arr = $(o).attr('src').split('/');

        var s = arr[arr.length-2]+'/'+arr[arr.length-1];

       if(islogin){
           post('index/Usermsg/setbg',{'name':s},function(r,d){

            $("#bg_skin").css({backgroundImage:'url('+d+')'});

        })

       }else{

           //$(o).attr('src')

           cache.setbg($(o).attr('src'));

           $("#bg_skin").css({backgroundImage:'url('+$(o).attr('src')+')'});

       }

        

    }

       //显示 皮肤

    function tab(o){

       var index = $(o).index()

       var obj = $(o).parents('.content')     

       obj.find('li').removeClass('active')

       $(o).addClass("active")

       obj.find('div').removeClass('active')

       obj.find('div').eq(index).addClass('active')

  }

 

    function post(url,data,callback){

    $.ajax({

        url:'/public/'+url,

        timeout: 10000, // 超时时间 10 秒

        headers: '',

        type:'POST',

        data:data,

        dataType:'json',

        complete:function(r){

         if(r.status == 200){

             //responseText

               callback(r,r.responseText)

            }else{



            }

        }

    })

    };



    function addClassTab(this_){

    if($(this_).data('off')){

    $("#Collection .add p").animate({width:'0px'})

    $(this_).data('off',false)

    }else{

    $("#Collection .add p").animate({width:'270px'})

    $(this_).data('off',true)

    }

    }



    function getBLen(str) {

    if (str == null) return 0;

    if (typeof str != "string"){

    str += "";

    }

    return str.replace(/[^\x00-\xff]/g,"01").length;

    }

    

    function getcookie(Name){

     if (document.cookie.length>0)

    {

            c_start=document.cookie.indexOf(Name + "=")

        if (c_start!=-1){ 



            c_start=c_start + Name.length+1 

            c_end=document.cookie.indexOf(";",c_start)

            if (c_end==-1) c_end=document.cookie.length

            return unescape(document.cookie.substring(c_start,c_end))

        } 

    }

    return false;

    }

     function close(){

        $("#add,#bg").fadeOut('slow')

    }

    

    function hidei(){

     setTimeout(function(){

            $("#add>span").hide()

        },2000)

    }

     function IsURL(str_url){

        var reg=/(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:/~\+#]*[\w\-\@?^=%&/~\+#])?/;

        if(reg.test(str_url)){

            return true;

        }else{

            return false;

        }

}

    function search(str){

        var Result = [];

        for(var k=0; k<data.length; k++){

           for(var i=0; i<data[k].length; i++){

               if(data[k][i].tt.indexOf(str[0]) != -1){

                Result.push(data[k][i])

            }

           }

            

        }

        return Result;

    }

      /*渲染新闻*/

    function tmp_news(d){

           var val = JSON.parse(d)

              for(var i=0; i<val.result.data.length; i++){

                val.result.data[i].time = val.result.data[i].date.substring(10)

                val.result.data[i].date = val.result.data[i].date.substring(0,val.result.data[i].date.length-5)

              }

             var html = template('news_box',val.result)

              $("#news_ul").append(html)

        if(!color){

             $("#news_ul a,#Collection .head,#Collection .title,#custom,#add_cla").css({color:'#fff'})

             $("#Collection .news .msg p").css({color:'#ddd'})

        }

    }

    /*显示用户链接*/

    function classname(){
             post('index/Usermsg/classname','',function(r,d){
            data = JSON.parse(d);
            $("#list_box").html('');
            var key = '';
            var num = 0;
            for(var i=0; i<data.length; i++){
                key += '<option value="'+data[i][0].calss+'">'+data[i][0].calss+'</option>';
                for(var j=0; j<data[i].length; j++){
                    if(!data[i][j].url){
                        data[i].splice(j, 1);
                    }
                }
                num += data[i].length;
                if(data[i][0]){
                     var d = {data:data[i]}
                     var html = template('list',d)
                     $("#list_box").append(html)
                }
                   
            }
             if(num == 0){
                 $("#list_box").html("<p class='aui-text-center aui-font-size-12 aui-margin-t-10'>----还没有添加收藏,赶紧添加试试吧!----</p>")
             }
             $("#sum").text('('+num+')')
            $("#key_box").html(key)
            if(!color){
             $('#set input[name="color"]').eq(1).attr("checked",'checked');
             $("#Collection a,#Collection .head,#Collection .title,#search_box a,#custom,#add_cla").css({color:'#fff'})
            }
                 
        })
        }

    

    /*显示设置*/

     function showset(data){

         

             for( var key in data){

            if(data[key] == 0){

                if(key == 'Recommend'){

                    Recommend = false;

                    $('#set input[name="Recommend"]').eq(1).attr("checked",'checked');

                     $(".head").eq(1).hide();

                }

                if(key == 'history'){

                    history_ = false;

                     $('#set input[name="history"]').eq(1).attr("checked",'checked');

                     $(".head").eq(2).hide();

                }

                if(key == 'remind'){

                    remind = false;

                     $('#set input[name="remind"]').eq(1).attr("checked",'checked');

                }

              

               if(key == 'color'){

                    color = false;

                   

                }

            }

        }

         

           if(Recommend){

            if(localStorage['news']){

               

                tmp_news(localStorage['news'])

            }else{

            post('index/html/news',{},function(r,d){

                

            localStorage['news'] = d;

           localStorage['time'] = Date.parse(new Date())+86400000;

            tmp_news(d)

            })

            }

         }

      

         if(history_){

             post('index/html/history',{},function(r,d){

                 historyfun(d)

                localStorage['History'] = d;

             })

         }

         if(islogin){

              classname();

         }else{

            if(!color){

             $('#set input[name="color"]').eq(1).attr("checked",'checked');

              $("#Collection a,#Collection .head,#Collection .title,#search_box a,#custom,#add_cla").css({color:'#fff'})

            }

            

         }

        

        }

        $("#history .huan").on('click',function(){

        historyfun(localStorage['History'])

        })

    function historyfun(d){

         $("#history .box_history").remove()

        var b= new Date();   

        var val = JSON.parse(d);

        var sum = [val[b.getSeconds()%val.length],val[(b.getSeconds()+1)%val.length]];

        var arr = {d:sum}

        var html = template('historytemp',arr)

        $("#history").append(html);

    }

    /*百度api */

       var keyi = -1;
        $("#Text").on('keyup ',function(ev){
            // 上 38 下 40
            var key =  ev.which;
             console.log(key)
            if(key == 37 || key == 39) return;
        if(key !=38 && key != 40){
              FillUrls();
        }else{
            console.log(keyi)
             if(key == 38){
            if(keyi){
                keyi--
            }else{
                keyi = 9
            }
        }
            if(key == 40){
            if(keyi<9){
            keyi++
            }else{
            keyi = -1;
            }
            }
            $("#allSitesBoxContent a").removeClass('active')
            $("#allSitesBoxContent a").eq(keyi).addClass('active')
           $(this).val($("#allSitesBoxContent a.active").text());
            
        }
       
    })
    $("#Text").on('mouseover',function(){
         FillUrls();
         keyi = -1;
    })

    $("#Text").on('mouseout',function(){

        $("#allSitesBoxHdl").hide();

    })

        $("#allSitesBoxHdl").width($("#Text").innerWidth())

        function FillUrls() {

    var strdomin = $.trim($("#Text").val());

    if(strdomin){

        console.log(strdomin)

        //'t': '1324113456725'

         var qsData = { 'wd': strdomin, 'cb': 'ShowDiv'};

    $.ajax({

        async: false,

        url: "http://suggestion.baidu.com/su",

        type: "GET",

        dataType: 'jsonp',

        jsonp: 'jsoncallback',

        jsonpCallback:'ShowDiv',

        data: qsData,

        timeout: 5000,

        success: function (json) {

        }

       

    });

    }

   

}

        function ShowDiv(strurls){

             var urls = strurls["s"];

            var html = "";

            if (urls) {

                var urllist = urls;

                var forlength = 0;

                var stringcookie;

                for (var i = urllist.length - 1; i >= 0; i--) {

                    var textval = urllist[i];

                    if ($.trim(textval) != "" && $.trim(textval) != "undefined") {

                        // html += "<li class=\"lis\"><a href=\"javascript:InputSetValue('" + textval + "');\">" + textval + "</a></li><br/>";



                        html += "<li class=\"lis\"><a href='https://www.baidu.com/s?f=8&rsv_bp=1&rsv_idx=1&word="+textval+"&tn=97925205_hao_pg' target='_blank'>" + textval + "</a></li><br/>";

                    }

                }

            } else {

               // html = "<li style='font-size: 12px;' >&nbsp;&nbsp;没有记录</li>";

            }

            if ($.trim(html) == "") {

                //html = "<li style='font-size: 12px;' >&nbsp;&nbsp;没有记录</li>";

            }

//            alert(html)

            $("#allSitesBoxHdl").show();

            $("#allSitesBoxContent").html(html);

        }

    /*    var a = [

        {title:'分类',tt:'',data:[

        {name:'百度一下',url:'www.baidu.com',tt:'fl'},

        {name:'腾讯',url:'www.baidu.com',tt:'fl'},

        {name:'阿里',url:'www.baidu.com',tt:'fl'},

    ]}

    ]*/

</script>





