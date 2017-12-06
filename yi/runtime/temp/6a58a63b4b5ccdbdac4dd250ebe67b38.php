<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/data/home/qxu1146510236/htdocs/public/../application/admin/view/html/login.html";i:1512478768;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>登录</title>
  <link href="__CSS__/admin/aui.css" rel="stylesheet"/>
    <style>
    
        html,body{
            height: 100%;
            background: url(__IMG__/admin/bg.png) no-repeat center center;
            background-size: cover;
        }
        input{
            background: transparent;
            
        }
        input::-webkit-input-placeholder, textarea::-webkit-input-placeholder { 
            color: #fff; 
            font-size: 16px;
        } 
        input:-moz-placeholder, textarea:-moz-placeholder { 
            color: #fff; 
            font-size: 16px;
        } 
        input::-moz-placeholder, textarea::-moz-placeholder { 
            color: #fff; 
            font-size: 16px;
        } 
        input:-ms-input-placeholder, textarea:-ms-input-placeholder { 
            color: #fff; 
            font-size: 16px;
        } 
        input[type='text'],input[type='password']{
            line-height: 50px;
            border: 1px solid #fff;
            width: 100%;
            text-indent: 15px;
            border-radius: 2px;
            margin-bottom: 25px;
            font-size: 20px;
            color: #fff;
        }
        #box{
            width: 500px;
            position: absolute;
            left: 50%;
            top: 30%;
            margin-left: -250px;
        }
        #box h1{
            color: #fff;
            font-weight: 500;
            margin-bottom: 20px;
        }
        #box input[type='submit']{
            color: #fff;
            background: #d7000f;
            width: 100%;
            line-height: 45px;
            font-size: 18px;
        }
        #box .pas a{
         
            font-size: 13px;
        }
        #box
        #box
    </style>
</head>
<body>
    <div id="box">
       <h1 class="aui-text-center">管理后台登录</h1>
        <div>
            <input type="text" id="account" autocomplete="off" placeholder="用户名">
        </div>
        <div>
            <input id="pasw" type="password" autocomplete="off" placeholder="密码">
        </div>
        <p class="pas aui-text-right aui-margin-b-15"><a href="">忘记密码？</a></p>
        <div class="aui-text-center">
            <input type="submit" onclick="mysubmit()" value="登录">
        </div>
    </div>
   <script src="__JS__/jquery.js"></script>
    <script>
        
        
    function mysubmit(){
        if(!$("#account").val()){
            alert('别闹！账号没输入。。。')
        }
        if(!$("#pasw").val()){
            alert('别闹！账号没输入。。。')
        }
        post('admin/html/login_',{'account':$.trim($("#account").val()),'pasw':$.trim($("#pasw").val())},function(r,d){
       
            if(d == '200'){
               window.location.href='http://www.yi-23.com/public/admin/html/index.html';
            }else if(d == '1'){
                alert('账号错误')
            }else if(d == '2'){
                alert('密码错误')
            }
        })
    }
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