<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:90:"/data/home/qxu1146510236/htdocs/public/../application/index/view/index/Forgotpassword.html";i:1512740548;}*/ ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <title>忘记密码</title>

    <link rel="icon" href="__IMG__/show/icon/yi-23.ico"/>

    <link href="__CSS__/show/aui.css" rel="stylesheet" />

</head>

    <style>

        #head {

            padding: 30px 0;

        }

        #head h1{

            display:table-cell;

            font-weight:500; 

            font-size: 26px;

             vertical-align: middle;

            color: #35b558

        }

        #head img{

            width: 180px;

            display:table-cell;

             vertical-align: middle;

        }

        #head .logo{

            display: table;

        }

        #head .aui-row{

            width: 1024px;

            margin: 0 auto;

        }

        #head{

            border-bottom: 1px solid #eee;

        }

        #head .right{

            margin-top: 30px;

        }

        .red{

            background: rgba(53, 181, 88, 0.62);

            display: inline-block;

            width: 15px;

            height: 15px;

            position: relative;

            margin-right: 10px;

        }

        .red i{

            position: absolute;

            top: 4px;

            left: 4px;

            width: 7px;

            height: 7px;

            display: inline-block;

            background: #35b558;

        }

         .txt{

            color: #999;

            font-size: 17px;

            margin-bottom: 15px;

            font-weight: 500;

             margin-top: 50px;

        }

        #wrap{

            width: 1024px;

            margin: 0 auto;

        }

        #wrap input[type="email"], #wrap input[type="text"],#wrap input[type="password"]{

            height: 45px;

            border: 1px solid #eee;

            width: 500px;

            text-indent: 10px;

        }

         #wrap input[type="button"], #wrap input[type="submit"]{

            height: 45px;

           background: #35b558;

                width: 500px;

             color: #fff;

             margin-top: 50px;

        }

         #footer{

                position: absolute;

    bottom: 10px;

    width: 100%;

    left: 0;

    font-size: 12px;

    color: #333;

        }

        #wrap .box{

            width: 500px;

            margin: 0 auto;

        }

        #wrap .msg{

            visibility:hidden;

            color: #35b558;

            font-size: 12px;

            padding-top: 5px;

        }

        #wrap .msg.show{

            visibility:inherit;

        }
    #bg{
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(25,25,25,0.06);
            z-index: 20;
            display: none;
        }
        #loginload{
            position: fixed;
            top: 50%;
            left: 50%;
            z-index: 21;
            margin-left: -25px;
            margin-top: -25px;
        }

    </style>

<body>

  

  

   <div id="head">

       <div class="aui-row clear">

           <a href="index.html" class="aui-pull-left logo">

              <img src="__IMG__/show/yi-23.png" alt="">

               <h1>上网,从yi-23开始</h1>

           </a>

           <div class="aui-pull-right right">

               <a href="login.html">登录</a><span class="cursor">&nbsp;&nbsp;/&nbsp;&nbsp;</span>

               <a href="register.html">注册</a>

           </div>

       </div>

   </div>

   <div id="wrap">

            <p class="txt"><span class="red"><i></i></span> <em>输入您的邮箱/账号</em> </p>

            <div class="box account  ">

                <div class="aui-text-center aui-margin-t-15">

                     <p><input type="email" id="account"  placeholder="输入您的邮箱/账号"></p>

                     <p class="aui-text-left msg " >账号为注册/输入错误</p>

                </div>

                <div class="aui-text-center but">

                      <input type="button" onclick="email()" value="下一步">

                </div>

            </div>

            <form class="box form aui-hide" onsubmit="return mysubmit();">

               <div class="aui-text-center aui-margin-t-15">

                    <p><input type="password" id="newlpasw"  placeholder="输入新密码/6~16位数字或字母"></p>

                     <p class="aui-text-left msg newlpasw" >6~16位数字或字母</p>

                </div>

                <div class="aui-text-center aui-margin-t-15">

                      <p><input type="password" id="newpasw"  placeholder="确认新密码"></p>

                     <p class="aui-text-left msg newpasw">两次输入的密码不一致</p>

                </div>

                <div class="aui-text-center aui-margin-t-15">

                      <p><input type="text" id="code"  placeholder="输入邮箱中的验证码"></p>
                       <p class="aui-text-left msg code">验证码错误</p>
                </div>

                <div class="aui-text-center but aui-margin-t-15">

                      <input type="submit" value="完成">

                </div>

            </form>

            

   </div>

   <footer class="aui-text-center" id="footer">

        <p>©2017&nbsp;&nbsp;&nbsp;Yi-23 闽ICP备15012318号</p>

    </footer>
  <div id="bg">
        <div id="loginload"> <img src="__IMG__/show/loginload.gif" alt=""></div>
   </div>
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

       

        

        function email(){

          

           var val = $.trim($("#account").val()); 

            if(isEmail(val)){
	 $("#bg").show();
                post('index/index/Forgotpasw',{'name':val},function(r,d){

                    if(d == '400'){

                        //该邮箱没有注册哦

                         $(".msg").text('该邮箱没有注册哦');

                         $(".msg").eq(0).addClass('show')

                    }else{

                         alert('验证码已发送到邮箱，请查收！')

                        $(".txt em").text('验证码已发送到邮箱，请前往邮箱查收！')

                        $(".form").removeClass('aui-hide')

                        $(".account").addClass('aui-hide')
                    }
	 $("#bg").hide();
                })

            }else{

                $(".msg").text('邮箱错误！');

                $(".msg").eq(0).addClass('show')

               

            }

            setTimeout(function(){

                 $(".msg").eq(0).removeClass('show')

            },4000)

        }

       

        function mysubmit(){

            if(!ispasw($("#newlpasw").val())){

                $(".newlpasw").addClass('show')

                setTimeout(function(){

                 $(".msg").eq(0).removeClass('show')

            },4000)

               return false; 

            }

          

            if(!($("#newlpasw").val() == $("#newpasw").val())){

                $(".newpasw").addClass('show')

                setTimeout(function(){

                 $(".msg").eq(0).removeClass('show')

            },4000)

               return false; 

            }
 if(!$("#code").val()){
                   $(".code").addClass('show')

                setTimeout(function(){

                 $(".msg").removeClass('show')

            },4000)
                return false; 
            }
  $("#bg").show();
            post('index/index/coder',{code:$.trim($("#code").val()),pasw:$.trim($("#newlpasw").val()),account:$.trim($("#account").val())},function(r){
 alert(JSON.stringify(r))
                 $("#bg").hide();
	//window.history.back(-1); 

            })

            return false; 

            

        }

        

        

//      

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