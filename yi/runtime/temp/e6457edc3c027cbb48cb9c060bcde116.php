<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:81:"/data/home/qxu1146510236/htdocs/public/../application/index/view/index/login.html";i:1511677322;}*/ ?>
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
<meta name="viewport" content="width=device-width, initial-scale=1"> 
<title>用户登录</title>
<link rel="icon" href="__IMG__/show/icon/yi-23.ico"/>
<link rel="stylesheet" type="text/css" href="__CSS__/show/normalize.css" />
<link rel="stylesheet" type="text/css" href="__CSS__/show/demo.css" />
<!--必要样式-->
<link rel="stylesheet" type="text/css" href="__CSS__/show/component.css" />

<!--[if IE]>
	<script src="__JS__/html5.js"></script>
<![endif]-->
   <style>
       
        body,html{
            width: 100%;
            height: 100%;
            max-height: 100%;
        }
       *{
           margin: 0; padding: 0;
       }
        #submit{
            width: 300px;
            padding: 0;
            font-size: 18px;
            background: #f00056;
            color: #fff;
        }
        input{
            display: block;
            width: 300px;
            height: 45px;
            border: none;
            padding-left: 10px;
        }
        #form{
            position: absolute;
            top: 25%;
            right: 25%;
            z-index: 5;
            background: url(__IMG__/show/bg.png) repeat;
            padding: 50px 15px;
        }
        #form>p{
            border-bottom: 1px solid #fff;
            color: #fff;
            font-size: 16px;
            margin-top: 10px;
        }
       #form>p a{
           float: right;
           color: #fff;
           font-size: 16px;
       }
        #form .box a{
            width: 55px;
            cursor: pointer;
            cursor: pointer;
            height: 55px;
            display: inline-block;
            background: url(__IMG__/show/fouricon.png) no-repeat;
            margin: 15px 10px 0 10px;
        }
        #form .box .qq{
            background-position: 0 -65px;
        }
        #form .box .qq:hover{
            background-position: 0 0;
        }
        #form .box .weibo:hover{
            background-position: -80px 0;
        }
        #form .box .weibo{
            background-position: -80px -65px;
        }
        .imsg{
            color: #f00056;
            font-size: 14px;
            height: 35px;
            position: relative;
        }
        .imsg p{
            display: none;
             line-height: 35px;
        }
       .imsg a{
           position: absolute;
           right: 0;
           top: 10px;
           color: #fff;
       }
        #qq a{
            opacity: 0;
           position: absolute;
            height: 55px;
        }
       #f_hidden {
           display: none;
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
    </style>
</head>
<body>
<form class="container demo-2">
	<div class="content">
		<div id="large-header" class="large-header">
			<canvas id="demo-canvas"></canvas>
		</div>
		<div id="form" >
       <p>登录</p>
        <input type="text" name="account" id="account" placeholder="邮箱/用户名">
         <div class="imsg">
             <p>邮箱/用户名错误</p>
        </div>
        <input type="password" name="pasw" id="pasw" placeholder="密码">
        <div class="imsg">
             <p>密码错误</p>
             <a href="Forgotpassword.html">忘记密码?</a>
        </div>
        <input type="button" id="submit" value="登录" onclick="isubmit()">
        <p>快速登录 <a href="register.html">邮箱注册</a></p>
        <div class="box">
            <a class="qq" target="_blank" href="qq_login"></a>
            <a class="weibo" id="weibo"></a>
        </div>
    </div>
	</div>
</form><!-- /container -->
<form id="f_hidden">
    <input type="hidden" name="nickname" value="">
    <input type="hidden" name="openId" value="">
</form>
<footer class="" id="footer">
        <p>©2017&nbsp;&nbsp;&nbsp;Yi-23 闽ICP备15012318号</p>
    </footer>
<script src="__JS__/rAF.js"></script>
<script src="__JS__/demo-2.js"></script>
<script src="__JS__/jquery.js"></script>
<!--<script src="../script/jquery.cookie.js"></script>-->
<script>
    $(function(){
        
        $(document).on('keyup',function(event){
            var keycode = event.which; 
             if(keycode==13){ 
                isubmit();
             } 
        })
        
    })
    //code_url
    function isubmit(){
           post('index/Userlogin/login',{'account':$.trim($("#account").val()),'pasw':$.trim($("#pasw").val())},function(r,d){
               if(d == 1){
                $(".imsg p").eq(0).show()
                }else if(d == 2){
                    $(".imsg p").eq(1).show()
                }
               if(d == 200){
                   window.history.back(-1);
               }
               setTimeout(function(){
                    $(".imsg p").hide();
               },2000)
           }) 
    };
    post('index/Userlogin/wblogin','',function(r,d){
        $("#weibo").attr('href',d);
    })
    function post(url,data,callback){
    $.ajax({
        url:'__ROOT__/'+url,
        timeout: 10000, // 超时时间 10 秒
        headers: 'aaaaaaaaaaaaa',
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