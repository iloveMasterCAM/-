$("#nav .menu").on('click',function(){
   
    $("#nav ul").css({top:0})
    $("#bg").show();
})
 $("#bg,#nav .guanbi").on('click',function(){
   
     var h = $("#nav ul").height();
     $("#bg").hide();
        $("#nav ul").css({top:"-"+h+'px'})
 })
$(".m_er").on('click',function(){
$(this).hide();    
})
$("#weixin").on('click',function(){
    
    $(".m_er").show();
})