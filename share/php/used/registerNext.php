<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        .clear:after{display:block;clear:both;content:"";visibility:hidden;height:0} 
.clear{zoom:1}
        body{
            background: #fff;
        }
        
        .msg{
        
            text-align: center;
            
        }
        .netx{
           
            width: 100px;
            line-height: 45px;
            text-align: center;
            color: #fff;
            display: block;
            background: #f00056;
            cursor: pointer;
        }
        #box {
         margin: 50px 0;
      
            text-align: center;
        
        }
        #box div{
            
            display: inline-block;
        }
        #box .img{
            width: 81px;
            height: 55px;
            margin-right: 10px;
/*background: url(../img/33030894.auth-ico.png) no-repeat;*/
            background-position: 0 0;
        }
    </style>
</head>
<body>
  <div id="box" class="clear">
     <div class="img"></div>
     <div>
    
        <p class="msg">恭喜你成功注册xxxx</p>
        <a href="../html/login.html" class="netx">前往登录</a>
     </div>
      
  </div>
   
</body>
</html>


<?php
include("mysql.php");
$name = trim($_GET['name']);
$pasw = md5(trim($_GET['pasw']));

$token = md5($_GET['pasw'].$_GET['name'].time());

//INSERT INTO `user`(`id`, `name`, `password`, `bgimg`, `token`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5])
//INSERT INTO `user`(`id`, `name`, `password`, `bgimg`, `token`, `Pattern`, `fontcolor`, `newsf`, `baidu`, `news`) VALUES ([value-1],[value-2],[value-3],[value-4],[value-5],[value-6],[value-7],[value-8],[value-9],[value-10])
$sql = "insert into user (id,name, password, bgimg, token) values (null,'$name','$pasw','../img/1.png','$token')";

mysql_query($sql);
    
//setCookie('naem',$name);
//setCookie('pasw',$pasw);


?>