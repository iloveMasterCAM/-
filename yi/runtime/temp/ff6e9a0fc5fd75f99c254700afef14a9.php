<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"/data/home/qxu1146510236/htdocs/public/../application/index/view/index/register.html";i:1512138662;}*/ ?>
<!DOCTYPE html>

<html lang="en" class="no-js">

<head>

<meta charset="UTF-8" />

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>快速注册</title>

    <link rel="icon" href="__IMG__/show/icon/yi-23.ico"/>

    <link rel="stylesheet" type="text/css" href="__CSS__/show/normalize.css" />

    <link rel="stylesheet" type="text/css" href="__CSS__/show/demo.css" />



<!--必要样式-->

<link rel="stylesheet" type="text/css" href="__CSS__/show/component.css" />



<!--[if IE]>

    <script src="__JS__/html5.js"></script>

<![endif]-->

    <style>

   input[type="submit"]{
            width: 100%;
            padding: 0;
            font-size: 18px;
            background: #35b558;
            color: #fff;
        margin: 20px 0;
        }
        input{
            display: block;
            width: 100%;
            border: none;
            height: 45px;
            padding-left: 10px;
        }
        #form{
            position: absolute;
            top: 23%;
            left: 50%;
            background: url(__IMG__/show/bg.png) repeat;
            padding: 50px 15px;
            z-index: 5;
            width: 600px;
            margin-left: -300px
        }
        #form .border{
            border-bottom: 1px solid #fff;
            color: #fff;
            font-size: 16px;
        }
        #form div>a{
            width: 55px;
            cursor: pointer;
            cursor: pointer;
            height: 55px;
            display: inline-block;
            background: url(__IMG__/show/fouricon.png) no-repeat;
            margin: 15px 10px 0 10px;
        }
        #form .qq{
            background-position: 0 -65px;
        }
        #form .qq:hover{
            background-position: 0 0;
        }
        #form .weibo:hover{
            background-position: -80px 0;
        }
        #form .weibo{
            background-position: -80px -65px;
        }
        .imsg{
            color: #35b558;
            font-size: 14px;
            height: 30px;
visibility:hidden;
        }
        .imsg.active{
            visibility: inherit;
        }
     #qq a{
            opacity: 0;
           position: absolute;
            height: 55px;
        }
           #footer{
                position: absolute;
    bottom: 10px;
    width: 100%;
    left: 0;
    font-size: 12px;
    color: #fff;
             z-index: 5;
             text-align: center;
        }
        .aui-hide{
            display: none;
        }

    </style>

</head>

<body>

        <div class="container demo-1">

        <div class="content">

        <div id="large-header" class="large-header">

        <canvas id="demo-canvas"></canvas>

        </div>

        <div  id="form">
                <p class="border">注册</p>
                  <div id="email">
                        <input type="text" name="name" placeholder="邮箱" id="name">
                        <div class="imsg ">
                       输入正确的邮箱
                        </div>
                  </div>
                <div id="pasw_box" class="aui-hide">
                    <input type="password" name="pasw" placeholder="6位之16位英文或字母" id="pasw">
                    <div class="imsg">
                   输入正确的密码
                    </div>
                    <input type="password" name="pasw" placeholder="确认密码" id="pasw_new">
                    <div class="imsg">
                       两次密码不一致
                    </div>
                     <input type="text" name="orders" placeholder="验证码" id="orders">
                      <div class="imsg">
                        验证码错误
                    </div>
                </div>
                <input type="submit" onclick="isubmit()" value="下一步">
                <p class="border">快速注册</p>
                <div>
                <a class="qq" href="qq_login"></a>
                <a class="weibo" id="weibo"></a>
                </div>

                </div>

        </div>

        </div>

		<div id="f_hidden">

		    <input type="hidden" name="nickname" value="">

		    <input type="hidden" name="openId" value="">

		</div>

		<footer class="aui-text-center" id="footer">

        <p>©2017&nbsp;&nbsp;&nbsp;Yi-23 闽ICP备15012318号</p>

    </footer>

		<script src="__JS__/TweenLite.min.js"></script>

		<script src="__JS__/EasePack.min.js"></script>

		<script src="__JS__/rAF.js"></script>

		<script src="__JS__/demo-1.js"></script>

		 <script src="__JS__/jquery.js"></script>

<script>

    

        function isEmail(str){

        var re = /^(\w-*\.*)+@(\w-?)+(\.\w{2,})+$/

            if(re.test(str)){

                return true

            }else{

                return false

            }

        }

    

        function ispasw(str){

         var re = /^[a-z,A-Z,0-9][^\s]{6,16}$/ig;

            if(re.test(str)){

                return true;

            }else{

                return false;

            }

        }

    var off = true,email;
        function isubmit(){
            $(".imsg").removeClass('active');
            if(off){
                 if(!isEmail($("#name").val())){
                $(".imsg").eq(0).addClass('active')
                return;
            }
           

             post('index/index/email',{'name':$.trim($("#name").val())},function (r,d) {
                    if(d == '400'){
                        alert('该邮箱已经注册！')
                    }else{
                        alert('已发送至邮箱，注意查收！')
                        $("#email").addClass('aui-hide');
                        $("#pasw_box").removeClass('aui-hide')
                        off = false;
                        email = $.trim($("#name").val())
                    }
             })
            }else{
                 if(!ispasw($.trim($("#pasw").val()))){
                $(".imsg").eq(1).addClass('active')
                return ;
            }
            if($("#pasw").val() !== $("#pasw_new").val()){
                $(".imsg").eq(2).addClass('active')
                return ;
            }
                if(!$("#orders").val()) {
                    $(".imsg").eq(3).addClass('active')
                    return ;
                };
                 post('index/index/validatei',{'pasw':$.trim($("#pasw").val()),'order':$.trim($("#orders").val()),'email':email},function (r,d) {
                     if(d == '200'){
                         alert('恭喜您，注册成功! 前往首页')
                     }
             })
            }
           
        }
    $(document).on('keyup',function(event){

            var keycode = event.which; 

             if(keycode==13){ 

                isubmit();

             } 

        })

     post('index/Userlogin/wblogin','',function(r,d){

         

        $("#weibo").attr('href',d);

    })

        //email

        function post(url,data,callback){

            $.ajax({

                url:'__ROOT__/'+url,

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



    </script>

	</body>

</html>