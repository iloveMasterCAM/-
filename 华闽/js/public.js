// 底部切换
$("#footer .link div").on('click',function(){
    $("#footer .link div").removeClass('acitve')
    $(this).addClass('acitve')
})

$("#Side .return").on('click',function(){
    $('body,html').animate({scrollTop:0},500);
   return false;
})