var islogin = true;
var cookie = new Cookie(); 
/*
slideUp  收
slideDown 放
*/
 //localStorage.clear();
if(!localStorage['time']){
    localStorage['time']
}
if(localStorage['time'] <new Date().getDate()){
    localStorage.clear();
    localStorage['time'] = new Date().getDate()
}
$(function(){
    var options =
	{
		thumbBox: '.thumbBox',
		spinner: '.spinner',
		imgSrc: 'img/avatar.png'
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

        post('php/userSet/uphead.php',{data:src[1]},function(r){
         
          if(r.status == 200){
          $("#userhead").attr('src',or)
          $("#headimg,#bg").hide();
          }
        })
        }
        
        
    })
    
    $('#btnZoomIn').on('click', function(){
		cropper.zoomIn();
	})
	$('#btnZoomOut').on('click', function(){
		cropper.zoomOut();
	})
    
   var height = []
    var cokie,setcokie,Result;
    setcokie = new Icokie('set');
    cokie = new Icokie('web');
     var load = function(){
    /*判断是否登录*/
    if(cookie.getCookie('token')){
      $("#nav .username,.add>div").removeClass('aui-hide')
        post('php/usermsg/msg.php',{},function(r){
             var data = JSON.parse(r.responseText);
               $("#username").text(data.nickname)
             //  alert(data.headimg)
               $("#userhead").attr('src',data.headimg)
        })
        post('php/usermsg/set.php',{},function(r,d){
             cookie.setCookie('set',d)
            $("#sum").text("("+cokie.websum().length+")");
        })
        weburl(function(r){
             tmep(r,function(){
                 
                   addEclass();
            });
          setMsg();
        })
        
    }else{
        if(cookie.getCookie('web')){
             var data = {d:JSON.parse(cookie.getCookie('web'))}
            tmep(data,function(){
                 addEclass();
            });
        }else{
        
            var json = [{title:'综合',tt:'zonghe',data:[]},{title:'购物',tt:'gouwu',data:[]},{title:'社区',tt:'shequ',data:[]},{title:'工具',tt:'gongju',data:[]},{title:'影视',tt:'yingshi',data:[]}]
            cookie.setCookie('web',JSON.stringify(json))
        }
        /*判断设置*/
        if(cookie.getCookie('set')){
           setMsg();
        }else{
 //{"Recommend":"false","history":"false","skin":"false","skin_address":"false","news":"false"}
            var set = {news:false,history:false,skin:false,color:false}
        var set = {"Recommend":"false","history":"false","skin":"false","skin_address":"false","news":"false"}
            cookie.setCookie('set',JSON.stringify(set))
            
            
            
        }
        
        $("#nav .login").removeClass('aui-hide')
        islogin = false;
    }
    
}

     
     
    load();
     /*添加 分类点击事件*/
     function addEclass(){
         $("#add .selcet div div").on('click',function(){
                $("#add .selcet span").attr('key',$(this).attr('key'))
                $("#add .selcet input").val($(this).attr('key'))
                $("#add .selcet span").text($(this).text())
              $("#add .selcet>div").slideUp("slow");
        })
         
          /*删除网站*/
    $("#Collection sup").on('click',function(){
        var id = $(this).parents('li').attr('id');
         var o= $(this).parents('li');
        if(islogin){
            post('php/userSet/delurl.php',{id:id},function(r){
            o.hide();
            })
        }else{
           o.hide();
        }
       cokie.delCookie(id);
        
    })
         more();
    }
    
     /*显示更多*/
    function more(){
 
      $("#Collection .three").on('click',function(){
         
        if( $(this).parents('.list').data('off')){
            $(this).parents('.list').animate({height:40})
            $(this).parents('.list').data('off',false)
            $(this).addClass('bor-r')
            $(this).removeClass('bor-l')

        }else{
           // alert(height[$("#Collection .three").index(this)])
            $(this).parents('.list').animate({height:height[$("#Collection .three").index(this)]})
            $(this).addClass('bor-l')
            $(this).removeClass('bor-r')
            $(this).parents('.list').data('off',true)
        }

    })
    }
     
    /*获取用户设置*/
     function setMsg(){
         var j=0;
         var isnews = true;
         var isHistory = true;
        for(var i in setcokie.json){
        if(setcokie.json[i] == '0'){
    $('#set input[name='+i+']').eq(1).attr("checked",'checked');
            switch(j){
                case 0:
                $(".head").eq(1).hide();
                isnews = false;
                break;
                case 1:
                $(".head").eq(2).hide();
                 isHistory = false;   
                break;
                case 2:
                /*皮肤提醒*/
                break;
                case 3:
                /*文字颜色*/
               $("#Collection li a").css({color:'#fff'})
                break;
            }

            } 
            j++;
        }
         if(isnews){
            if(localStorage['news']){
                tmp_news(localStorage['news'])
            }else{
            post('php/news.php',{},function(r,d){
            localStorage['news'] = d;
            tmp_news(d)
            })
            }
         }
      
         if(isHistory){
             if(localStorage['History']){
                tmp_history(localStorage['History'])
             }else{
               post('php/history.php',{suggest:''},function(r){
                localStorage['History'] = r.responseText
                tmp_history(r.responseText);
             })
              
            }
        
         }

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
    }
    
    /*渲染历史*/
    function tmp_history(r){
        a(r)
        function a(r){
        $("#history .box_history").remove()
         var b = new Date(); 
        var val = JSON.parse(r);
        var sum = [val[b.getSeconds()%val.length],val[(b.getSeconds()+1)%val.length]];
       var arr = {d:sum}
       var html = template('historytemp',arr)
        $("#history").append(html);
    }
        $("#history .huan").on('click',function(){
          a(localStorage['History'])
        })
    }
    
    
    /*获取用户url*/
     function weburl(fn){
          post('php/usermsg/webclass.php',{},function(r){
           
            var arr = [];
                if(r.status == 200 && JSON.parse(r.responseText).length>0){
                    var data = JSON.parse(r.responseText);
                    for(var i=0; i<data.length; i++){
                    arr.push({title:data[i].name,tt:data[i].tt,data:[]})
                      for(var j=0; j<data[i][0].length; j++){
                        arr[i].data.push({id:data[i][0][j].ID,name:data[i][0][j].name,url:data[i][0][j].url,tt:data[i][0][j].tt})
                      } 
                    }
                Result = {d:arr};
                     cookie.setCookie('web',JSON.stringify(arr))
               fn && fn(Result);
                }else{
                alert('系统错误')
                }
          })
          
     }
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
                    
   //json.data.city
                
                }
            });
        }
    });
    
    /*渲染数据*/
    function tmep(r,fn){

        $("#list_box").html('')
             var key = template('key',r)
             $("#add .selcet input").val(r.d[0].tt)
             $("#key_box").html(key)
            for(var i=0; i<r.d.length; i++){
                if(r.d[i].data.length == 0) continue;
                var html = template('list',r.d[i])
                $("#list_box").append(html)
               
            }
       
             hei()
             if($.trim($("#list_box").html()) == ''){
                $("#list_box").html("<p class='aui-text-center aui-font-size-12 aui-margin-t-10'>----还没有添加收藏,赶紧添加试试吧!----</p>")
             }
        fn && fn()
    }

  $("#sum").text("("+cokie.websum().length+")");
    $("#skin").on('click',function(){
     $("#skin_box").slideToggle("slow");
       $('.isShow').show();
    })
    
    $(".isShow").on('click',function(){
        $("#skin_box,#set").slideUp("slow");
        $(this).hide();
    })

    $("#skin_box .child").on('click',function(){
        var index = $(this).index()
         $("#skin_box .child").removeClass('active')
    $("#skin_box .content").removeClass('active')

    $("#skin_box .content").eq(index).addClass('active')
    $(this).addClass('active')
    })

    $("#skin_box li").on('click',function(){
       var index = $(this).index()
       var obj = $(this).parents('.content')
       obj.find('li').removeClass('active')
       $(this).addClass("active")
       obj.find('div').removeClass('active')
       obj.find('div').eq(index).addClass('active')
    })

    $("#Collection").css({marginLeft:parseInt($(window).width()/2)-465})
    
    var on = false;
    $(window).scroll(function(){
        var scrltop = document.documentElement.scrollTop || document.body.scrollTop;
       if(on){
            footer();
       }
        if(scrltop >= 190 ){
            $("#return").slideDown(); 
        }else{
            $("#return").slideUp()
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
    $("#Collection .add>div").on('mouseover',function(){
            $("#add_cla").attr('class','iconfont icon-jia')
         })
    $("#Collection .add>div").on('mouseleave',function(){
            $("#add_cla").attr('class','iconfont icon-54-copy')
         })
    var thisI;
    $("#Collection .add>div").on('click',function(i){
        thisI = this
          addClassTab(this)
          
    })

    
     /* 添加分类 */
    $("#addclass").on('click',function(){
         if($(this).prev().val() != ''){
        post('php/userSet/addclass.php',{name:$(this).prev().val(),tt:$("#addclass_box input[type='hidden']").val()},function(r,e){
             cokie.addClass($(this).prev().val())
        })
        
        }
      addClassTab(thisI)  
        
    })
    
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
        if($(this).index() != 0){
            $("#edit,#add_,#search").hide();
        }else{
             $("#edit,#add_,#search").show();
        }
        index = $(this).index();
        footer();
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
               // alert(cokie.json)
                var data = {d:cokie.json}
                 tmep(data);
            }
        footer();
        
    })
/*
      $("input[name='rdo1']").eq(0).removeAttr("checked");
    $("input[name='rdo1']").eq(1).attr("checked","checked");
*/

   
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
            txt = "https://"+txt
        }
        if(IsURL(txt)){
          var cla = $("#add .selcet input").val()
            var name = $("#nicName").val()
            var tt = $("#nN").val()
            var con = {name:name, tt: tt, url:txt, class:cla}
            
        if(islogin){
           //var con = $("#add input").serialize();
            post('php/userSet/addurl.php',con,function(r){
                $("#nicName,#add .url").val('')
            })
        }
           
/*              var json = {
               id:cokie.rand(),
               name:$("#nicName").val(),
               tt:$("#nN").val(),
               url:txt
            }*/
        cokie.addCookie(con,cla)
     
         var data = {d:JSON.parse(cookie.getCookie('web'))}
            tmep(data,function(){
                more();
            });
        
          
          
        }else{
            $("#add>span").css({marginLeft:'220px'});
            $("#add>span").show();
            hidei()
        }

    })
    
    
    $(".set").on('click',function(){
        $("#set").slideToggle()
        $('.isShow').show()
    })
    
    $("#set .Save,#set i").on('click',function(){
        $("#set").slideUp()
        //{"Recommend":"false","history":"false","skin":"false","skin_address":"false","news":"false"}
        
        var Recommend = $('#set input[name="Recommend"]:checked').val();
        var history = $('#set input[name="history"]:checked').val();
        var skin = $('#set input[name="skin"]:checked').val();
        var news = $('#set input[name="news"]:checked').val();
        
        var arr = [Recommend,history,skin,news]
            setcokie.set(arr)
            post('php/userSet/set.php',{"Recommend":Recommend,history:history,skin:skin,news:news},function(r,d){
              
            })
            
             setMsg();
            
    }) 
    
   
    
    /*返回顶部*/
    
    $("#return").on('click',function(){
    $('body').animate({scrollTop:0},300);
    return false;
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
          var r = {d:cokie.search( pinyin.getCamelChars(txt.toUpperCase()) )}
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
    $("#bg,#setName").slideUp('300')
    $("#headimg").hide();
    close();
    
  })
  
  $("#setName span").on('click',function(){
      var txt = $("#setName input").val()
      if(txt == '') return;
      if( getBLen(txt) >= 25){
        $("#setName p").show();
          return;
      }
      var con = $("#setName input").serialize();
        
        post('php/usermsg/setName.php',con,function(r){
            $("#username").text(txt)
            $("#bg,#setName").slideUp('300')
        })
        
  })
  
  $("#headimg input[type='file']").on('change',function(){
         var srcs = getObjectURL(this.files[0]);   //获取路径
//        $("#headimg .img").css('backgroundImage','url('+srcs+')')
      $("#headimg img").attr('src',srcs)
        $(this).hide();
        $('.file').hide();
      $("#headimg .again").show();
   
      
})
  
  function getBLen(str) {
  if (str == null) return 0;
  if (typeof str != "string"){
    str += "";
  }
  return str.replace(/[^\x00-\xff]/g,"01").length;
}
  
  $("#exit").on('click',function(){
    cookie.delCookie('token')
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
        
    function hei(){
        $("#Collection .list").each(function(){
        height.push($(this).css('height'))
        $(this).css('height','40px')
        })
    }
     
 }) /* 结束 */


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

 /*验证是否中文*/
 function isChineseChar(str){   
   var reg = /[\u4E00-\u9FA5\uF900-\uFA2D]/;
   return reg.test(str);
}
 
/* Cookie 基本操作 */    
 function Cookie(){}
    Cookie.prototype.getCookie = function(Name){
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
    
    Cookie.prototype.setCookie = function(Name,key){
        var date=new Date(); 
date.setTime(date.getTime()+360*86400000); //设置date为当前时间+30分
//document.cookie="key=value; expires="+date.toGMTString(); //将date赋值给expires
        
         document.cookie=""+Name+"="+key+"; expires="+date.toGMTString()+";path=/";
    }
    
    Cookie.prototype.delCookie = function(Name){
          var date=new Date();
          date.setTime(date.getTime()-10000);
          document.cookie=Name+"=; expire="+date.toGMTString()+"; path=/";
     location.reload(true)   
    }


    
        /* Cookie 增删改 */
    function Icokie(str){
            this.json = JSON.parse(cookie.getCookie(str))
            this.string = cookie.getCookie(str)
    }
  /*添加网站*/
    Icokie.prototype.addCookie = function(r,title){
        var d = this.json
        for(var i=0; i<d.length; i++){
            if(d[i].tt == title){
                d[i].data.push(r)
            }
        }
        this.Save('web');
    }
    /*添加分类*/
    Icokie.prototype.addClass = function(name){
        var json = {title:name,data:[]}
        this.json.push(json)
       this.Save('web');
    }
    /*保存*/
    Icokie.prototype.Save = function(key){
      cookie.setCookie(key,JSON.stringify(this.json))
    }
   /*删除网站*/
    Icokie.prototype.delCookie = function(id){
       
        for(var i=0; i<this.json.length; i++){
            var a = this.json[i].data.length
            for(var j=0; j<this.json[i].data.length; j++){
                
                if(this.json[i].data[j].id == id){
                    this.json[i].data.splice(j,1)
                    this.Save('web');
                    break;
                }
            }
        }
    }
    
    Icokie.prototype.websum = function (){
        var arr = [];
         for(var i=0; i<this.json.length; i++){
           for(var j=0; j<this.json[i].data.length; j++){
           arr.push(this.json[i].data[j])
           }
        }
        return arr;
    }
    /*搜索网站*/
    Icokie.prototype.search = function(s){
        var Result = [];
        var arr = this.websum()
        
        for(var k=0; k<arr.length; k++){
           
            if(arr[k].tt.indexOf(s[0]) != -1){
                Result.push(arr[k])
            }
        }
        return Result;
       
    }
    
    Icokie.prototype.set = function(data){
       var i=0;
        for(var key in this.json){
            this.json[key] = data[i]+'';
            i++;
        }
        this.Save('set');
    }
    /* 生产随机id */
    Icokie.prototype.rand = function(){
    var date = Date.parse(new Date()).toString();
    var str =  date.substring(parseInt(date.length/2)+3,parseInt(date.length/2)-7)
    var az = ['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z']
    var id = '';
    for(var i=0; i<str.length; i++){
            if(Math.abs(str[i])%2 == 0){
                id += str[i]+az[i]
            }
    }
    return id;
}
    
    
 function close(){
        $("#add").fadeOut('slow')
        $("#bg").slideUp('200')
    }


setTimeout(function(){
// IE浏览器用
   //document.execCommand("Stop");
//Chrome和Firefox用    
//window.stop()
    
},1000)


 function IsURL(str_url){
        var reg=/(http|ftp|https):\/\/[\w\-_]+(\.[\w\-_]+)+([\w\-\.,@?^=%&:/~\+#]*[\w\-\@?^=%&/~\+#])?/;
        if(reg.test(str_url)){
            return true;
        }else{
            return false;
        }
}

function NetPing(url) {
         
         if(url.indexOf("http") == -1 ){
            url = "http://"+url
         }
         $.getScript(url,function(r){
           var json = {
               id:cokie.rand(),
               name:$("#nicName").val(),
               tt:$("#nN").val(),
               url:$.trim($("#url").val())
            }
           cokie.addCookie(json,$("#clas").attr('key'))
           
        });
         
     }

 function hidei(){
     setTimeout(function(){
            $("#add>span").hide()
        },2000)
    }
 
function myBrowser(){

    var userAgent = navigator.userAgent; //取得浏览器的userAgent字符串
    
    if (userAgent.indexOf("Safari") > -1) {
        return "Safari";
    } //判断是否Safari浏览器
    if (userAgent.indexOf("compatible") > -1 && userAgent.indexOf("MSIE") > -1 && !isOpera) {
        return "IE";
    };
    
    var isOpera = userAgent.indexOf("Opera") > -1;
    if (isOpera) {
        return "Opera"
    }; //判断是否Opera浏览器
    if (userAgent.indexOf("Firefox") > -1) {
        return "FF";
    } //判断是否Firefox浏览器
    if (userAgent.indexOf("Chrome") > -1){
  return "Chrome";
 }
    
}

function post(url,data,callback){
        $.ajax({
            url:url,
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

 
 //判断是否IE浏览器


 /*  function getCookie(Name){
    if (document.cookie.length>0)
    {
    c_start=document.cookie.indexOf(Name + "=")
    if (c_start!=-1)
    { 
    c_start=c_start + Name.length+1 
    c_end=document.cookie.indexOf(";",c_start)
    if (c_end==-1) c_end=document.cookie.length
    return unescape(document.cookie.substring(c_start,c_end))
    } 
    }
    return false;
    }
*/

/*$("#search").blur(function(){
    $("#Collection .box").eq(index).show();
  })*/
      /*$("#search").keyup(function () {
            var txt = $(this).val();
            var h = $("#banklist .aui-input-row label:not(:contains('" + txt + "'))").parent("div").hide();
            $("#banklist .aui-input-row label:contains('" + txt + "')").parent("div").show();
        });*/
    