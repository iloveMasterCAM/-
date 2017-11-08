$("#header .qie").on('click',function(){
    $("#header .address>div,#shade").show();

})
$("#shade").on('click',function(){
    $("#header .address>div,#shade").hide();
})

$("#nav .nav_product").on('mouseover',function(){
    $("#nav_product").css({'top':'120px'})
})
$("#nav_product").on('mouseover',function(){
     $("#nav_product").css({'top':'120px'})
})
$("#nav .nav_product,#nav_product").on('mouseout',function(){
    $("#nav_product").css({'top':'-60px'})
})
// mouseout 
if($(window).width()<=1300){
     $("#nav ul").css({'top':(-parseInt($("#nav ul").outerHeight())-128)+'px'})
$("#nav .caidan").on('click',function(){
    var h = parseInt($("#nav ul").css('top'))
    if(h > 0){
       $("#nav ul").css({'top':(-parseInt($("#nav ul").outerHeight())-128)+'px'})
    }else{
       $("#nav ul").css({'top':'86px'})
    }
})
    
}
 $("#side .return").on('click',function(){
             $('body,html').animate({scrollTop:0},500);
            return false;
        })
  $(window).on('scroll',function(){
                  if ($(window).scrollTop()>454){
                    $("#nav_ad").addClass('fixed')
                }
                else
                {
                 $("#nav_ad").removeClass('fixed')
                }
            })
/*城市切换*/
 $("#header .address li").on('click',function(){
             $("#header .address .active").removeClass('active')
            $(this).addClass('active')
            var index = $(this).index();
             $("#header .address .city").eq(index).addClass('active')
            
        })


var qr_coder = new QRCoder($('#weixin'));
    $('#showWn').click(function(){
        
        $("#weixin_bg,#weixin").show();
        $('#weixin').html("generating");
        qr_coder.setMode(1);
        qr_coder.draw('https://www.baidu.com/', 'h','img/er_wein.png', function(data){
        });
    });
$("#weixin_bg").on('click',function(){
    $("#weixin_bg,#weixin").hide();
        
})

  var p = {
      url: 'http://pan.baidu.com/',
      showcount: '1',/*是否显示分享总数,显示：'1'，不显示：'0' */
      desc: '信保网',/*默认分享理由(可选)*/
     summary: '信保网',/*分享摘要(可选)*/
     title: '信保网',/*分享标题(可选)*/
     site: '',/*分享来源 如：腾讯网(可选)*/
     pics: '', /*分享图片的路径(可选)*/
     style: '101',
     width: 199,
     height: 30
 };
 var s = [];
 for (var i in p) {
     s.push(i + '=' + encodeURIComponent(p[i] || ''));
 }

var url = 'http://sns.qzone.qq.com/cgi-bin/qzshare/cgi_qzshare_onekey?'+s.join('&')
$("#footer .qq").attr('href',url)
