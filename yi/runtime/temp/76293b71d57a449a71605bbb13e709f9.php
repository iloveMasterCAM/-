<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:80:"/data/home/qxu1146510236/htdocs/public/../application/admin/view/html/index.html";i:1512483654;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
     <link href="__CSS__/admin/aui.css" rel="stylesheet"/>
     <link href="__CSS__/admin/iconfont/iconfont.css" rel="stylesheet"/>
    <style>
        #wrap{
            position: relative;
        }
        #nav{
            background: #434343;
            width: 350px;
            position: absolute;
            top: 0;
            bottom: 0;
        }
        #nav>ul{
            padding: 0 10px;
        }
        #nav ul>li{
             border-bottom: 1px solid #626262;
        }
        #nav ul>li i{
            color: #fff;
            font-size: 20px;
          line-height: 40px;
        }
        #nav ul>li a{
            line-height: 40px;
            color: #fff;
           
        }
        #centent{
            width: 80%;
            height: 1000px;
            border: 1px solid #eee;
        }
        #phont li{
            margin: 10px;
        }
        #img{
            margin-top: 20px;
            padding-left: 10px;
            display: none;
            position: relative;
        }
        #img img{
            width: 160px;
            height: 110px;
        }
        #img div{
            position: relative;
            margin: 0 25px 15px 0;
        }
        #img .shanchu{
            position: absolute;
            top: -15px;
            right: -15px;
            
        }
        #img .add{
            min-height: 110px;
            min-width: 160px;
            background: url(__IMG__/admin/file/add.png) no-repeat center center;
            background-size: contain;
            position: relative;
        }
        #img>p,#img .i-shanchu, #img .add{
            cursor: pointer;
        }
        #file {
            position: absolute;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            opacity: 0;
        }
        #formUp input{
            background: transparent;
            color: #fff;
        }
        #formUp .submit{
            position: absolute;
            right: 30px;
            top: -5px;
            padding: 3px 10px;
            background: green;
            
        }
        #nav
        #nav
        #nav
        #nav
        #nav
        #nav
        #nav
    </style>
</head>
<body>
   <div id="wrap" class="clear">
       <div id="nav">
            <ul>
                <li><a href=""><i class="iconfont i-image1 aui-margin-r-15"></i>皮肤管理</a> <span class="aui-pull-right"><i class="iconfont i-xiangyou"></i></span></li>
<!--                <li><a href=""><i class="iconfont i-miaoshuti aui-margin-r-15"></i>网站描述</a> <span class="aui-pull-right"><i class="iconfont i-xiangyou"></i></span></li>-->
               
            </ul>
        </div>
        <div id="centent" class="aui-pull-right">
            <ul class="clear aui-text-center " id="phont">
                <!--<li class="aui-pull-left">
                    <a href="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>
                <li class="aui-pull-left">
                    <a href="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>
                <li class="aui-pull-left">
                    <a href="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>
                <li class="aui-pull-left">
                    <a href="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>
                <li class="aui-pull-left">
                    <a href="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>
                <li class="aui-pull-left">
                    <a href="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>
                <li class="aui-pull-left">
                    <a href="" title="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>
                <li class="aui-pull-left">
                    <a href="">
                        <img src="__IMG__/admin/file/file.png" alt="">
                        <p>游戏</p>
                    </a>
                </li>-->
            </ul>
            <ul id="img" class="clear">
               <p class="aui-margin-b-15 return"><i class="iconfont i-xiangzuo"></i> 返回</p>

               <div class="box clear">
                   
                    <!--<div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                    <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                    <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                    <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                     <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                     <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                     <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                     <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                     <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                     <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                    <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>
                    <div class="aui-pull-left">
                        <img src="__IMG__/admin/bg.png" alt="">
                        <span class="shanchu"><i class="iconfont i-shanchu"></i></span>
                    </div>-->
               </div>
             
                   <form action="<?php echo url('updata'); ?>" method="post" enctype="multipart/form-data" id="formUp" class="clear" onsubmit="return isubmit(this);">
                       <div class="aui-pull-left add"> <input type="file" onchange="changefile(this)" name="file0" id="file"> <input type="hidden" id="catalog" name="catalog" value=""></div>
                       <div class="submit">
                           <input type="submit" value="上传">
                       </div>
                   </form>
                   
       
            </ul>
        </div>
   </div>
    <script src="__JS__/jquery.js"> </script>
    <script>
    
        
         /*var boo = new Boolean(true)

         alert(boo.toString())*/

          /*  var json = {toString:null}
            
            for(var key in json){
                alert(json[key])
                
                }
              
                
            */
        var fileObj,fileN = 1;
    post('admin/html/show','',function(r,d){
        var arr=eval("("+d+")"); 
        var j = {};
        arr.forEach(function(key){
          
            if(key == 'animal'){
                j[key] = '动物'
            }
            if(key == 'belle'){
                 j[key] = '美女'
            }
            if(key == 'Comic'){
                 j[key] = '动漫'
            }
            if(key == 'geme'){
                 j[key] = '游戏'
            }
            if(key == 'film'){
                 j[key] = '电影'
            }
            if(key == 'Scenery'){
                 j[key] = '风景'
            }
         
            
        })
         
        var html = '';
        for(var key in j){
             html += '<li class="aui-pull-left" key="'+key+'"><a  title="'+key+'"><img src="__IMG__/admin/file/file.png" alt=""><p>'+j[key]+'</p></a></li>'
        }
        $("#phont").append(html)
        $("#phont li").on('click',function(){
            var key = $(this).attr('key')
            post('admin/html/showimg',{key:key},function(r,d){
                var arr = d.split(',');
                arr.pop();
                var html = '';
                for(var i=0; i<arr.length; i++){
                    html += ' <div class="aui-pull-left"><img src="__IMG__'+arr[i]+'" alt=""><span class="shanchu"><i class="iconfont i-shanchu" key="'+arr[i]+'"></i></span></div>'
                }
               $("#img .box").html(html)
                $("#img span i").on('click',function(){
                    var key = $(this).attr('key')
                    var p = $(this).parent().parent();
                    if(key){

                         post('admin/html/dele',{key:key},function(r,d){
                       //window.location.reload(true);
                         p.empty();
                    })
                    }
                   
                })
                 $("#img").show();
                $("#phont").hide();
                $("#catalog").val(key)
                   
            })
        })
        
    })
        
        function isubmit(o){
            //return false;
        }
        function changefile(o){
                fileObj = $(o)
            var srcs = getObjectURL(o.files[0]);  //获取路径
            var input = o
            if(input.files){ 
                //读取图片数据  
              var f = input.files[0];  
              var reader = new FileReader();  
              reader.onload = function (e) {  
                  var data = e.target.result;  
                  var image = new Image();  
                  image.onload=function(){  
                      var width = image.width;  
                      var height = image.height;  
                      if(width >=1500){
                          $("#img .box").append('<div class="aui-pull-left"><img src="'+srcs+'" alt=""></div>')
                          fileObj.hide();
                          $("#img .add").append('<input type="file" onchange="changefile(this)" name="file'+fileN+'" id="file">')
                          fileN++;
                      }else{
                          alert('宽度最少1500px')
                      }
                  };  
                  image.src= data;  
              };  
                  reader.readAsDataURL(f);  
                
              }
        }
        /*
        else{  
        var image = new Image();   
        image.onload =function(){  
        var width = image.width;  
        var height = image.height;  
        var fileSize = image.fileSize;  
        alert(width+'======'+height+"====="+fileSize);  
        }  
        image.src = input.value;  
        }

        window.check=function(){  
        var input = document.getElementById("file");  

        }  


        $(function() {
        $(".filepath").on("change",function() {

        var srcs = getObjectURL(this.files[0]);   //获取路径
        $(this).nextAll(".img1").hide();   //this指的是input
        $(this).nextAll(".img2").show();  //fireBUg查看第二次换图片不起做用
        $(this).nextAll('.close').show();   //this指的是input
        $(this).nextAll(".img2").attr("src",srcs);    //this指的是input
        $(this).val('');    //必须制空
        $(".close").on("click",function() {
        $(this).hide();     //this指的是span
        $(this).nextAll(".img2").hide();
        $(this).nextAll(".img1").show();
        })
        })
        })
        */
       
    function getObjectURL(file) {
        var url = null;
        if (window.createObjectURL != undefined) {
            url = window.createObjectURL(file)
        } else if (window.URL != undefined) {
            url = window.URL.createObjectURL(file)
        } else if (window.webkitURL != undefined) {
            url = window.webkitURL.createObjectURL(file)
        }
        return url
    }; 
        $("#img .return").on('click',function(){
              $("#img").hide();
            $("#img .box").html('');
            $("#phont").show();
            
        })
       
        function post(url,data,callback){
            data = data || {}
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